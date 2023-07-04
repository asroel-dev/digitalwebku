<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Berita;
use App\Models\Kategoriberita;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Identitas;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $konfigurasi = Identitas::first();
        $sub = Auth::user()->subdomain;
        if ($request->ajax()) {
            $data = Berita::where('subdomain', $sub)->with('kategori')->orderBy('tanggal', 'DESC')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('gambar', function ($data) {
                    $gambar = '
                    <a href="' . route('berita.edit', $data->id) . '" class="symbol symbol-50px">
                    <span class="symbol-label" style="background-image:url(' . asset('uploads/foto_berita/' . $data->gambar) . ');"></span>
					</a>';
                    return $gambar;
                })
                ->editColumn('tanggal', function ($data) {
                    return changeDate($data->tanggal);
                })
                ->editColumn('status', function ($data) {
                    if ($data->status == 'Y') {
                        return 'Publish';
                    } else {
                        return 'Draft';
                    }
                })
                ->editColumn('kategori_id', function ($data) {
                    return $data->kategori->name ?? '-';
                })
                ->editColumn('aksi', function ($data) {
                    $actionButton = '
                   <a href="' . route('berita.edit', $data->id) . '" class="btn waves-effect waves-light btn-warning btn-sm">
                         <i class="bi bi-pencil-square"></i>
                    </a>
                     <button class="btn waves-effect waves-light btn-danger btn-sm" onclick="alertHapus(&quot;' . $data->id . '&quot;)">
                         <i class="bi bi-trash"></i>
                    </button>';
                    return $actionButton;
                })
                ->escapeColumns([])
                ->make(true);
        }

        return view('admin.berita.index', compact('konfigurasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Kategoriberita::all();
        return view('admin.berita.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'judul' => 'required',
            'isi_berita' => 'required',
            'kategori_id' => 'required',
            'gambar' => 'required',
        ]);

        $data = [
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'isi_berita' => $request->isi_berita,
            'username' => Auth::user()->name,
            'subdomain' => Auth::user()->subdomain,
            'kategori_id' => $request->kategori_id,
            'hari' => getHari(date('l')),
            'tanggal' => date('Y-m-d'),
            'jam' => date('h:i:s'),
            'dibaca' => 0
        ];

        // return $data;

        if ($request->has('gambar')) {
            $image = $request->gambar;
            $imageName = time() . $image->getClientOriginalName();
            $image->move('uploads/foto_berita', $imageName);
            $data['gambar'] = $imageName;
        }
        if ($request->publish == 'Y') {
            $data['status'] = 'Y';
        } else if ($request->draft == "N") {
            $data['status'] = "N";
        }
        Berita::create($data);
        toast('Berhasil Di Tambah', 'success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $data = Berita::where('id', $id)->firstOrFail();
        $categories = Kategoriberita::all();
        return view('admin.berita.edit', compact('data', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'isi_berita' => 'required',
            'kategori_id' => 'required',
        ]);
        $data = [
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'isi_berita' => $request->isi_berita,
            'username' => Auth::user()->name,
            'subdomain' => Auth::user()->subdomain,
            'kategori_id' => $request->kategori_id,
        ];

        if ($request->has('gambar')) {
            $image = $request->gambar;
            $imageName = time() . $image->getClientOriginalName();
            $image->move('uploads/foto_berita', $imageName);
            $data['gambar'] = $imageName;
        }
        if ($request->publish == 'Y') {
            $data['status'] = 'Y';
        } else if ($request->draft == "N") {
            $data['status'] = "N";
        }
        Berita::where('id', $id)->update($data);
        toast('Berhasil Di Ubah', 'success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;

        $data = Berita::where('id', $id)->first();
        if ($data->image) {
            unlink('uploads/foto_berita/' . $data->image);
        }
        Berita::where('id', $id)->delete();

        if ($data) {
            return response()->json(['message' => 'Berita Berhasil Di Hapus'], 200);
        } else {
            return response()->json(['message' => 'Error'], 200);
        }
    }
}
