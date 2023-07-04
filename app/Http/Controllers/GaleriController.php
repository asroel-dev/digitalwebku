<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Alert;
use App\Models\Gallery;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class GaleriController extends Controller
{
    public function gambar(Request $request)
    {
        if ($request->ajax()) {
            $sub = Auth::user()->subdomain;
            $data = Gallery::where('subdomain',$sub)->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('gambar', function ($data) {
                    $gambar = '<img style="width : 200px" src="' . asset('uploads/foto_galeri/' . $data->gambar) . '" class="img-fluid" >';
                    return $gambar;
                })
                ->editColumn('aksi', function ($data) {
                    $actionButton = '
                  <button class="btn waves-effect waves-light btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editGallery" onclick="editData(&quot;' . $data->id . '&quot;)">
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
        return view('admin.galeri.gambar');
    }

    public function storeGambar(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'image' => 'required'
        ]);

        $data = [
            'judul' => $request->judul,
            'album_id' => 0,
            'username' => Auth::user()->name,
            'slug' => Str::slug($request->judul),
            'subdomain' => Auth::user()->subdomain,
            'keterangan' => "-"
        ];

        if ($request->has('image')) {
            $image = $request->image;
            $imageName = time() . $image->getClientOriginalName();
            $image->move('uploads/foto_galeri', $imageName);
            $data['gambar'] = $imageName;
        }

        Gallery::create($data);
        toast('Berhasil Di Tambah', 'success');
        return redirect()->route('galeri.gambar');
    }

    public function editGambar(Request $request)
    {
        $id = $request->id;
        $data = Gallery::where('id', $id)->firstOrFail();
        $data['gambar'] = asset('uploads/foto_galeri/' . $data->gambar);

        return response()->json($data, 200);
    }

    public function updateGambar(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
        ]);

        $id = $request->id;

        $gambar = Gallery::where('id', $id)->first();

        $data = [
            'judul' => $request->judul,
            'album_id' => 0,
            'username' => Auth::user()->name,
            'slug' => Str::slug($request->judul),
            'keterangan' => "-"
        ];

        if ($request->has('gambar')) {
            $image = $request->gambar;
            $imageName = time() . $image->getClientOriginalName();
            $image->move('uploads/foto_galeri', $imageName);
            $data['gambar'] = $imageName;
            if ($gambar->gambar) {
                unlink('uploads/foto_galeri/' . $gambar->gambar);
            }
        }

        Gallery::where('id', $id)->update($data);
        toast('Berhasil Di Update', 'success');
        return redirect()->route('galeri.gambar');
    }

    public function destroyGambar(Request $request)
    {
        $id = $request->id;

        $data = Gallery::where('id', $id)->first();
        if ($data->gambar) {
            unlink('uploads/foto_galeri/' . $data->gambar);
        }

        Gallery::where('id', $id)->delete();

        if ($data) {
            return response()->json(['message' => 'Gallery Berhasil Di Hapus'], 200);
        } else {
            return response()->json(['message' => 'Error'], 200);
        }
    }

    public function video()
    {
        //
    }
}
