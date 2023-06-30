<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use Alert;
use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PengumumanController extends Controller
{
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $kategori = Kategori::where('nama_kategori', 'Pengumuman')->first();
            $data = Berita::where('tag', 'pengumuman')->orWhere('id_kategori', $kategori->id_kategori)->orderBy('tanggal', 'DESC')->get();;

            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('id_kategori', function ($data) {
                    return $data->kategori->nama_kategori ?? '-';
                })
                ->editColumn('tag', function ($data) {
                    return $data->tag ?? '-';
                })
                ->editColumn('aksi', function ($data) {
                    $actionButton = '
                   <button data-bs-toggle="modal" data-bs-target="#editKategori" onclick="editData(&quot;' . $data->id_kategori . '&quot;)" class="btn waves-effect waves-light btn-warning btn-sm">
                         <i class="bi bi-pencil-square"></i>
                    </button>
                     <button class="btn waves-effect waves-light btn-danger btn-sm" onclick="alertHapus(&quot;' . $data->id_kategori . '&quot;)">
                         <i class="bi bi-trash"></i>
                    </button>';
                    return $actionButton;
                })
                ->escapeColumns([])
                ->make(true);
        }
        return view('admin.pengumuman.index');
    }
}
