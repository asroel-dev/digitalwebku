<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Layanan::all();

            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('aksi', function ($data) {
                    $actionButton = '
                   <button data-bs-toggle="modal" data-bs-target="#editLayanan" onclick="editData(&quot;' . $data->id . '&quot;)" class="btn waves-effect waves-light btn-warning btn-sm">
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
        return view('admin.layanan.index');
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
            'name' => 'required',
            'gambar' => 'required|max:5024',
        ]);

        $data = [
            'name' => $request->name,
            'username' => Auth::user()->name,
            'tag_seo' => Str::slug($request->name),
            'count' => 0
        ];

        if ($request->has('gambar')) {
            $image = $request->gambar;
            $imageName = time() . $image->getClientOriginalName();
            $image->move('uploads/foto_banner', $imageName);
            $data['gambar'] = $imageName;
        }

        Layanan::create($data);
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
        $data = Layanan::where('id', $id)->firstOrFail();

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
            'name' => 'required',
        ]);

        $id = $request->id;
        $gambar = Layanan::where('id', $id)->first();


        $data = [
            'name' => $request->name,
            'username' => Auth::user()->name,
            'tag_seo' => Str::slug($request->name),
            'count' => 0
        ];

        if ($request->has('gambar')) {
            $image = $request->gambar;
            $imageName = time() . $image->getClientOriginalName();
            $image->move('uploads/foto_banner', $imageName);
            $data['gambar'] = $imageName;
            if ($gambar->gambar) {
                unlink('uploads/foto_banner/' . $gambar->gambar);
            }
        }

        Layanan::where('id', $id)->update($data);
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

        $data = Layanan::where('id', $id)->delete();
        if ($data) {
            return response()->json(['message' => 'Layanan Berhasil Di Hapus'], 200);
        } else {
            return response()->json(['message' => 'Error'], 200);
        }
    }
}
