<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Menu;
use App\Models\About;
use App\Models\Banner;
use App\Models\Berita;
use App\Models\Dokumen;
use App\Models\Gallery;
use App\Models\Halaman;
use App\Models\Kategori;
use App\Models\Identitas;
use App\Models\StatisPage;
use Illuminate\Http\Request;
use App\Models\Kategoriberita;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class FrontController extends Controller
{
    public function index(Request $request)
    {

        $title = Identitas::first()->nama_website;
        $data = Menu::with('details')->orderBy('urutan', 'ASC')->get();
        $berita = Berita::limit('3')->orderBy('tanggal', 'DESC')->get();
        $kategori_file = Kategori::where('aktif', 'Y')->get();
        $banner = Banner::get();
        $sambutan = Identitas::first();
        $Dokumen = Dokumen::get();
        $gambar = Gallery::orderBy('id', 'DESC')->take(10)->get();

        return view('frontend.index', 
        compact(
        'kategori_file',
        'title',
        'berita',
        'Dokumen',
        'sambutan',
        'gambar',
        'data',
        'banner',
        ));
    }


    public function galeriGambar()
    {
        $title = "Galeri Gambar";
        $konfigurasi = Identitas::first();
        $data = Gallery::orderBy('id', 'DESC')->get();
        return view('frontend.galerigambar', compact('data','konfigurasi','title'));
    }

    public function berita(Request $request)
    {
        $kategori_berita = Kategoriberita::where('aktif', 'Y')->get();
        request()->validate([
            'kategori' => 'string',
        ]);
        $title = 'Semua Berita';
        if(request('kategori')){
            $kategori = Kategoriberita::firstWhere('slug', request('kategori'));
            $title =  'Berita : '. $kategori->name;
        }
        if(request('search')){
            $search = request('search');
            $title =  'Berita : '. $search;

        }
        $berita = Berita::orderBy('tanggal','DESC')->filter(request(['search','kategori']))->paginate(6)->withQueryString();

        
        // $berita = Berita::latest()->where('status', 'Y')->orderBy('tanggal', 'DESC')
        //             ->when($kategori, function ($query, $kategori) {
        //                 return $query->whereHas('kategori', function($query) use ($kategori){
        //                     $query->where('slug', $kategori);
        //                 });
        //             })
        //             ->paginate(6);


        $beritaLainnya = Berita::where('aktif', 'Y')->where('utama', 'N')->take(5)->orderBy('tanggal', 'DESC')->get();
        return view('frontend.blog', compact('berita', 'beritaLainnya','kategori_berita','title'));
    }

    public function dokumen(Request $request)
    {
        request()->validate([
            'kategori' => 'string',
        ]);

        $kategori = $request->kategori;
        $title = Kategori::where('slug', $kategori)->first();
        $dokumen = Dokumen::orderBy('id','asc')
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


    public function client()
    {
        $title = Identitas::first('nama_website');
        $kategori = Kategori::withCount('berita')->get();
        $konfigurasi = Identitas::first();
        return view('frontend.client', compact('kategori', 'title','konfigurasi'));
    }

    public function detailBerita($slug)
    {
        $kategori_berita = Kategoriberita::where('aktif', 'Y')->get();
        $berita = Berita::with('kategori')->where('slug', $slug)->firstOrFail();
        $title = $berita->judul;
        Berita::with('kategori')->where('slug', $slug)->update(['dibaca' => $berita->dibaca + 1]);

        if ($berita->kategori != null) {
            $related = Berita::where('kategori_id', $berita->kategori->id)->orderBy('tanggal', 'DESC')->take(4)->get();
        } else {
            $related = Berita::orderBy('tanggal', 'DESC')->take(4)->get();
        }

        return view('frontend.detailblog', compact('berita', 'related','kategori_berita','title'));
    }

    public function pengumuman()
    {
        $konfigurasi = Identitas::first();
        $kategori = Kategori::where('nama_kategori', 'Pengumuman')->first();
        $pengumuman = Berita::where('tag', 'pengumuman')->orWhere('id_kategori', $kategori->id_kategori)->orderBy('tanggal', 'DESC')->paginate(6);

        return view('frontend.pengumuman', compact('pengumuman','konfigurasi'));
    }

    public function pegawai()
    {
        $data_pegawai = get_pegawai('https://epinisi.sulselprov.go.id/api/pegawai?unit=102205&size=1000&page=0');
        return view('frontend.pegawai', compact('data_pegawai'));
    }

    public function detailPengumuman($slug)
    {
        $konfigurasi = Identitas::first();
        $pengumuman = Berita::with('kategori')->where('slug', $slug)->firstOrFail();
        $related = Berita::where('id_kategori', $pengumuman->kategori->id_kategori)->orderBy('tanggal', 'DESC')->take(4)->get();
        return view('frontend.detailpengumuman', compact('pengumuman', 'related','konfigurasi'));
    }



    public function detailHalaman($slug)
    {
        $konfigurasi = Identitas::first();
        $data =  Halaman::where('slug', $slug)->first();
        $title =  $data->judul;
        $description =  Halaman::where('slug', $slug)->first()->content;
        $menusamping = Menu::with('details')->orderBy('urutan', 'ASC')->where('id',$data->menu)->first();
        $kategori_all = Kategori::where('aktif', 'Y')->get();
        $related = Berita::orderBy('tanggal', 'DESC')->take(4)->get();

            return view('frontend.halaman', compact('data','konfigurasi','menusamping','title','description','kategori_all','related'));
    }

    public function kategori($slug)
    {
        $konfigurasi = Identitas::first();
        $kat = Kategori::where('slug', $slug)->first();
        $katName = $kat->nama_kategori;
        $kategori = Berita::where('id_kategori', $kat->id_kategori)->orderBy('tanggal', 'DESC')->paginate(6);

        return view('frontend.kategori', compact('kategori', 'katName','konfigurasi'));
    }
}
