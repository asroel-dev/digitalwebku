<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use Alert;
use App\Models\Halaman;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class HalamanController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Halaman::all();

            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('link', function ($data) {
                    $link = '<input  class="form-control" type="text" value="/halaman/'. $data->slug .'" id="myInput">';
                    return $link;
                })
                ->editColumn('aksi', function ($data) {
                    $actionButton = '
                    <a href="' . route('halaman.edit', $data->id) . '"><button class="btn waves-effect waves-light btn-warning btn-sm">
                         <i class="bi bi-pencil-square"></i>
                    </button></a>
                     <button class="btn waves-effect waves-light btn-danger btn-sm" onclick="alertHapus(&quot;' . $data->id . '&quot;)">
                         <i class="bi bi-trash"></i>
                    </button>';
                    return $actionButton;
                })
                ->escapeColumns([])
                ->make(true);
        }
        return view('admin.halaman.index');
    }

    public function create()
    {
        return view('admin.halaman.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
        ]);

        $data = [
            'judul' => $request->judul,
            'menu' => $request->menu,
            'slug' => Str::slug($request->judul),
            'isi_halaman' => $request->isi_halaman,
            'username' => Auth::user()->name,
            'hari' => getHari(date('l')),
            'tgl_posting' => date('Y-m-d'),
            'jam' => date('h:i:s'),
            'dibaca' => 0
        ];

        if ($request->has('gambar')) {
            $image = $request->gambar;
            $imageName = time() . $image->getClientOriginalName();
            $ekstensi = $image->getClientOriginalExtension();
            $image->move('uploads/foto_statis', $imageName);
            $data['gambar'] = $imageName;
            $data['ext'] = $ekstensi;
        }

        Halaman::create($data);
        toast('Data Berhasil Di Tambah', 'success');
        return redirect()->route('halaman.index');
    }

    public function edit($id)
    {
        $data = Halaman::where('id', $id)->first();
        return view('admin.halaman.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
        ]);

        $data = [
            'judul' => $request->judul,
            'menu' => $request->menu,
            'slug' => Str::slug($request->judul),
            'isi_halaman' => $request->isi_halaman,
            'username' => Auth::user()->name,
            'hari' => getHari(date('l')),
            'tgl_posting' => date('Y-m-d'),
            'jam' => date('h:i:s'),
        ];

        $statis = Halaman::where('id', $id)->first();

        if ($request->has('gambar')) {
            $image = $request->gambar;
            $imageName = time() . $image->getClientOriginalName();
            $image->move('uploads/foto_statis', $imageName);
            $data['gambar'] = $imageName;
            if ($statis->gambar) {
                unlink('uploads/foto_statis/' . $statis->gambar);
            }
        }

        Halaman::where('id', $id)->update($data);
        toast('Data Berhasil Di Update', 'success');
        return redirect()->route('halaman.index');
    }

    public function destroy(Request $request)
    {

        $id = $request->id;
        $data = Halaman::where('id', $id)->first();
        if ($data->gambar) {
            unlink('uploads/foto_statis/' . $data->gambar);
        }
        Halaman::where('id', $id)->delete();

        if ($data) {
            return response()->json(['message' => 'Halaman Berhasil Di Hapus'], 200);
        } else {
            return response()->json(['message' => 'Error'], 200);
        }
    }
}
