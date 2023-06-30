<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use Alert;
use App\Models\About;
use App\Models\Dokumen;
use App\Models\Kategori;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class DokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $kategori_file = Kategori::get();
        if ($request->ajax()) {
            $data = Dokumen::all();
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('gambar', function ($data) {
                    $actionButton = '<a href="' . asset('uploads/dokumen/' . $data->file) . '" target="_blank" > Lihat File </a>';
                    return $actionButton;
                })
                ->editColumn('kategori_id', function ($data) {
                    return $data->kategori->name;
                })
                ->editColumn('detail', function ($data) {
                    if ($data->detail) {
                        return $data->detail;
                    } else {
                        return '-';
                    }
                })
                ->editColumn('aksi', function ($data) {
                    $actionButton = '
                   <button data-bs-toggle="modal" data-bs-target="#editAplikasi" onclick="editData(&quot;' . $data->id . '&quot;)" class="btn waves-effect waves-light btn-warning btn-sm">
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
        return view('admin.dokumen.index', compact('kategori_file'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'detail' => 'nullable',
            'file' => 'mimes:pdf,png,jpeg,jpg',
        ]);

        $data = [
            'judul' => $request->judul,
            'detail' => $request->detail,
            'kategori_id' => $request->kategori_id,
        ];

        if ($request->has('file')) {
            $image = $request->file;
            $imageName = time() . $image->getClientOriginalName();
            $image->move('uploads/dokumen', $imageName);
            $data['file'] = $imageName;
        }


       Dokumen::create($data);
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
    public function edit(Request $request)
    {
        $id = $request->id;
        $data = Dokumen::where('id', $id)->firstOrFail();

        return response()->json($data, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'detail' => 'nullable',
            'file' => 'mimes:pdf,png,jpeg,jpg',
        ]);

        $id = $request->id;

        $data = [
            'judul' => $request->judul,
            'detail' => $request->detail,
            'kategori_id' => $request->kategori_id,
            'username' => Auth::user()->name,
        ];

        if ($request->has('file')) {
            $image = $request->image;
            $imageName = time() . $image->getClientOriginalName();
            $image->move('uploads/dokumen', $imageName);
            $data['file'] = $imageName;
        }

        Dokumen::where('id', $id)->update($data);
        toast('Berhasil Di Update', 'success');
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
        $data = Dokumen::where('id', $id)->delete();
        if ($data) {
            return response()->json(['message' => 'Dokumen Berhasil Di Hapus'], 200);
        } else {
            return response()->json(['message' => 'Error'], 200);
        }
    }
}
