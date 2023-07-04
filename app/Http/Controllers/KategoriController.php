<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $sub = Auth::user()->subdomain;
            $data = Kategori::where('subdomain',$sub)->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('aksi', function ($data) {
                    $actionButton = '
                   <button data-bs-toggle="modal" data-bs-target="#editKategori" onclick="editData(&quot;' . $data->id . '&quot;)" class="btn waves-effect waves-light btn-warning btn-sm">
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
        return view('admin.kategori.index');
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
            'status' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'aktif' => $request->status,
            'username' => Auth::user()->name,
            'subdomain' => Auth::user()->subdomain,
            'slug' => Str::slug($request->name),
            'sidebar' => 0
        ];

        Kategori::create($data);
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
        $data = Kategori::where('id', $id)->firstOrFail();

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
            'status' => 'required'
        ]);

        $id = $request->id;

        $data = [
            'name' => $request->name,
            'aktif' => $request->status,
            'username' => Auth::user()->name,
            'slug' => Str::slug($request->name),
            'sidebar' => 0
        ];

        Kategori::where('id', $id)->update($data);
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

        $data = Kategori::where('id', $id)->delete();
        if ($data) {
            return response()->json(['message' => 'Kategori Berhasil Di Hapus'], 200);
        } else {
            return response()->json(['message' => 'Error'], 200);
        }
    }
}
