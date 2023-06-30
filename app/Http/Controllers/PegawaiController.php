<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class PegawaiController extends Controller
{
    public function index(Request $request)
    {
        $cek = Pegawai::first();
        $data = json_decode($cek->data);
        // return $data;
        return view('admin.pegawai.index',compact('data'));
    }
}
