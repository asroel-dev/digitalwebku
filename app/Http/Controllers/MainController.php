<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Banner;
use App\Models\Berita;
use App\Models\Dokumen;
use App\Models\Gallery;
use App\Models\Identitas;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MainController extends Controller
{
    public function index(Request $request)
    {
        $sub = 'main';
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

            return view('main.index', 
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
}
