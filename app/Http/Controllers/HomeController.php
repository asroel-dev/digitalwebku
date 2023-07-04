<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Berita;
use App\Models\Dokumen;
use App\Models\Kategori;
use App\Models\Pengaduan;
use App\Models\Statistik;
use Illuminate\Http\Request;
// use DB;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sub = Auth::user()->subdomain;
        $beritaCount = Berita::where('subdomain',$sub)->count();
        $pengunjungCount = Statistik::where('subdomain',$sub)->count();
        $dokumenCount = Dokumen::where('subdomain',$sub)->count();
        $beritaView = Berita::where('subdomain',$sub)->orderBy('dibaca', 'DESC')->take(5)->get();
        $kategori = Kategori::where('subdomain',$sub)->where('name', 'Pengumuman')->first();
        $pengaduanCount = '0';
        $agendaCount = '0';
        $pengaduan = '0';
        return view('home', compact('beritaCount', 'beritaView', 'agendaCount', 'pengaduanCount', 'pengaduan','pengunjungCount','dokumenCount'));
    }

    public function chart()
    {
        $sub = Auth::user()->subdomain;
        $data =  DB::table("statistik")->where('subdomain',$sub)->select(array('tanggal', DB::raw('COUNT(hits) AS count')))->groupBy('tanggal')
            ->whereYear('tanggal', '=', date('Y'))->get();

        return response()->json($data, 200);
    }
}
