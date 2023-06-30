<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Berita;
use App\Models\Kategori;
use App\Models\Dokumen;
use App\Models\Statistik;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
// use DB;
use Illuminate\Support\Facades\DB;


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
        $beritaCount = Berita::count();
        $pengunjungCount = Statistik::count();
        $dokumenCount = Dokumen::count();
        $beritaView = Berita::orderBy('dibaca', 'DESC')->take(5)->get();
        $kategori = Kategori::where('name', 'Pengumuman')->first();
        $pengaduanCount = '0';
        $agendaCount = '0';
        // $pengaduanCount = Pengaduan::count();
        // $pengaduan = Pengaduan::orderBy('tanggal', 'DESC')->get();
        $pengaduan = '0';
        return view('home', compact('beritaCount', 'beritaView', 'agendaCount', 'pengaduanCount', 'pengaduan','pengunjungCount','dokumenCount'));
    }

    public function chart()
    {

        $data =  DB::table("statistik")->select(array('tanggal', DB::raw('COUNT(hits) AS count')))->groupBy('tanggal')
            ->whereYear('tanggal', '=', date('Y'))->get();

        return response()->json($data, 200);
    }
}
