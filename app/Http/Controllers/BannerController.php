<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;
use Alert;

class BannerController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Banner::orderByDesc('id')->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('gambar', function ($data) {
                    $gambar = '<img src="' . asset('uploads/foto_banner/' . $data->gambar) . '" class="img-fluid" >';
                    return $gambar;
                })
                ->editColumn('judul', function ($data) {
                    $judul = $data->judul;
                    return $judul;
                })
                ->editColumn('deskripsi', function ($data) {
                    $deskripsi = $data->deskripsi;
                    return $deskripsi;
                })
                ->editColumn('link', function ($data) {
                    $link = $data->link;
                    return $link;
                })
                ->editColumn('aksi', function ($data) {
                    $actionButton = '
                  <button class="btn waves-effect waves-light btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editimage" onclick="editData(&quot;' . $data->id. '&quot;)">
                         <i class="bi bi-pencil-square"></i> 
                    </button>
                     <button class="btn waves-effect waves-light btn-danger btn-sm" onclick="alertHapus(&quot;' . $data->id . '&quot;)">
                         <i class="bi bi-trash"></i>
                    </button>';
                    return $actionButton;
                })
                ->escapeColumns([])
                ->make(true);
        }
        return view('admin.banner.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'gambar' => 'required|max:5024',
            'judul' => 'required',
            'deskripsi' => 'required',
            'link' => 'required',
        ]);

        $data = [
            'is_active' => 1,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'link' => $request->link,
        ];
    
        if ($request->has('gambar')) {
            $image = $request->gambar;
            $imageName = time() . $image->getClientOriginalName();
            $image->move('uploads/foto_banner', $imageName);
            $data['gambar'] = $imageName;
        }

        Banner::create($data);
        toast('Berhasil Di Tambah', 'success');
        return redirect()->route('banner.index');
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $data = Banner::where('id', $id)->firstOrFail();
        $data['gambar'] = asset('uploads/foto_banner/' . $data->gambar);

        return response()->json($data, 200);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'deskripsi' => 'required',
            'link' => 'required',
        ]);

        $id = $request->id;
        $image = Banner::where('id', $id)->first();
        $data = [
            'is_active' => 1,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'link' => $request->link,
        ];

        if ($request->has('gambar')) {
            $image = $request->gambar;
            $imageName = time() . $image->getClientOriginalName();
            $image->move('uploads/foto_banner', $imageName);
            $data['gambar'] = $imageName;
            if ($image->gambar) {
                unlink('uploads/foto_banner/' . $image->gambar);
            }
        }

        Banner::where('id', $id)->update($data);
        toast('Berhasil Di Update', 'success');
        return redirect()->route('banner.index');
    }

    public function destroy(Request $request)
    {
        $id = $request->id;

        $data = Banner::where('id', $id)->first();
        if ($data->gambar) {
            unlink('uploads/foto_banner/' . $data->gambar);
        }

        Banner::where('id', $id)->delete();

        if ($data) {
            return response()->json(['message' => 'Gambar Berhasil Di Hapus'], 200);
        } else {
            return response()->json(['message' => 'Error'], 200);
        }
    }
}
