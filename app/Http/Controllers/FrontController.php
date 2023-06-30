<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Banner;
use App\Models\Berita;
use App\Models\Dokumen;
use App\Models\Gallery;
use App\Models\Halaman;
use App\Models\Kategori;
use App\Models\Identitas;
use Illuminate\Http\Request;
use App\Models\Kategoriberita;

class FrontController extends Controller
{

    public function index(Request $request)
    {
        $sub = $request->subdomain;
        $identitas = Identitas::where('subdomain',$sub)->first();
        if ($identitas) {

            //constract
            $profil = Identitas::where('subdomain',$sub)->first();
            $menu = Menu::where('subdomain',$sub)->with('details')->orderBy('urutan', 'ASC')->get();
            //end_constract

            $berita = Berita::where('subdomain',$sub)->limit('3')->orderBy('tanggal', 'DESC')->get();
            $banner = Banner::where('subdomain',$sub)->get();
            $sambutan = Identitas::where('subdomain',$sub)->first();
            $dokumen = Dokumen::where('subdomain',$sub)->get();
            $gambar = Gallery::where('subdomain',$sub)->orderBy('id', 'DESC')->take(10)->get();

            return view('frontend.index', 
            compact(
                'profil',
                'menu',
                'identitas',
                'berita',
                'dokumen',
                'sambutan',
                'gambar',
                'banner',
            ));
        } 
        return '404 Not Found';
        
    }

    public function galeriGambar(Request $request)
    {
        $title = "Galeri Gambar";
        $konfigurasi = Identitas::first();
        $data = Gallery::orderBy('id', 'DESC')->get();
        return view('frontend.galerigambar', compact('data','konfigurasi','title'));
    }

    public function berita(Request $request)
    {
        $sub = $request->subdomain;
        $identitas = Identitas::where('subdomain',$sub)->first();
        if ($identitas) {
             //constract
             $profil = Identitas::where('subdomain',$sub)->first();
             $menu = Menu::where('subdomain',$sub)->with('details')->orderBy('urutan', 'ASC')->get();
             //end_constract

            $kategori_berita = Kategoriberita::where('subdomain',$sub)->where('aktif', 'Y')->get();
            request()->validate([
                'kategori' => 'string',
            ]);
            $title = 'Semua Berita';
            if(request('kategori')){
                $kategori = Kategoriberita::where('subdomain',$sub)->firstWhere('slug', request('kategori'));
                $title =  'Berita : '. $kategori->name;
            }
            if(request('search')){
                $search = request('search');
                $title =  'Berita : '. $search;

            }
            $berita = Berita::where('subdomain',$sub)->orderBy('tanggal','DESC')->filter(request(['search','kategori']))->paginate(6)->withQueryString();
            $berita_lain = Berita::where('subdomain',$sub)->where('aktif', 'Y')->where('utama', 'N')->take(5)->orderBy('tanggal', 'DESC')->get();
            return view('frontend.blog', compact(
            'profil',
            'menu',
            'berita', 
            'berita_lain',
            'kategori_berita',
            'title'));
        } 
        return '404 Not Found';

    }

    public function dokumen(Request $request)
    {
        $sub = $request->subdomain;
        $identitas = Identitas::where('subdomain',$sub)->first();
        if ($identitas) {
            request()->validate([
                'kategori' => 'string',
            ]);
             //constract
             $profil = Identitas::where('subdomain',$sub)->first();
             $menu = Menu::where('subdomain',$sub)->with('details')->orderBy('urutan', 'ASC')->get();
             //end_constract

            $kategori = $request->kategori;
            $title = Kategori::where('subdomain',$sub)->where('slug', $kategori)->first();
            $dokumen = Dokumen::where('subdomain',$sub)->orderBy('id','asc')
                        ->when($kategori, function ($query, $kategori) {
                            return $query->whereHas('kategori', function($query) use ($kategori){
                                $query->where('slug', $kategori);
                            });
                        })
                        ->paginate(20);

            return view('frontend.dokumen',compact(
                'dokumen',
                'title',
            ));
        }
        return '404';
    }


    public function detailBerita(Request $request)
    {

        $sub = $request->subdomain;
        $identitas = Identitas::where('subdomain',$sub)->first();
        if ($identitas) {
            
            //constract
            $profil = Identitas::where('subdomain',$sub)->first();
            $menu = Menu::where('subdomain',$sub)->with('details')->orderBy('urutan', 'ASC')->get();
            //end_constract

            $slug = $request->slug;
            $kategori_berita = Kategoriberita::where('subdomain',$sub)->where('aktif', 'Y')->get();
            $berita = Berita::where('subdomain',$sub)->with('kategori')->where('slug', $slug)->firstOrFail();
            $title = $berita->judul;
            Berita::where('subdomain',$sub)->with('kategori')->where('slug', $slug)->update(['dibaca' => $berita->dibaca + 1]);
            if ($berita->kategori != null) {
                $related = Berita::where('subdomain',$sub)->where('kategori_id', $berita->kategori->id)->orderBy('tanggal', 'DESC')->take(4)->get();
            } else {
                $related = Berita::where('subdomain',$sub)->orderBy('tanggal', 'DESC')->take(4)->get();
            }
            return view('frontend.detailblog', compact(
                'profil', 
                'menu',
                'berita', 
                'related',
                'kategori_berita',
                'title'));
            }
        return '404';
    }


    public function detailPengumuman(Request $request)
    {
        $sub = $request->subdomain;
        $identitas = Identitas::where('subdomain',$sub)->first();
        if ($identitas) {
            $slug = $request->slug;
            $konfigurasi = Identitas::where('subdomain',$sub)->first();
            $pengumuman = Berita::where('subdomain',$sub)->with('kategori')->where('slug', $slug)->firstOrFail();
            $related = Berita::where('subdomain',$sub)->where('id_kategori', $pengumuman->kategori->id_kategori)->orderBy('tanggal', 'DESC')->take(4)->get();
            return view('frontend.detailpengumuman', compact('pengumuman', 'related','konfigurasi'));
        }
        return '404';
    }



    public function detailHalaman(Request $request)
    {
        $sub = $request->subdomain;
        $identitas = Identitas::where('subdomain',$sub)->first();
        if ($identitas) {
            $slug = $request->slug;
            
             //constract
             $profil = Identitas::where('subdomain',$sub)->first();
             $menu = Menu::where('subdomain',$sub)->with('details')->orderBy('urutan', 'ASC')->get();
             //end_constract

            $halaman =  Halaman::where('subdomain',$sub)->where('slug', $slug)->first();
            $title =  $halaman->judul;
            $description =  Halaman::where('subdomain',$sub)->where('slug', $slug)->first()->content;
            $kategori_all = Kategori::where('subdomain',$sub)->where('aktif', 'Y')->get();
            $related = Berita::where('subdomain',$sub)->orderBy('tanggal', 'DESC')->take(4)->get();
            return view('frontend.halaman', compact(
                'profil',
                'menu',
                'halaman',
                'title',
                'description',
                'kategori_all',
                'related'));
        }
        return '404';
    }

    public function kategori(Request $request)
    {
        $sub = $request->subdomain;
        $identitas = Identitas::where('subdomain',$sub)->first();
        if ($identitas) {
            $slug = $request->slug;
            $konfigurasi = Identitas::where('subdomain',$sub)->first();
            $kat = Kategori::where('subdomain',$sub)->where('slug', $slug)->first();
            $katName = $kat->nama_kategori;
            $kategori = Berita::where('subdomain',$sub)->where('id_kategori', $kat->id_kategori)->orderBy('tanggal', 'DESC')->paginate(6);
            return view('frontend.kategori', compact('kategori', 'katName','konfigurasi'));
        }
        return '404';
    }
}
