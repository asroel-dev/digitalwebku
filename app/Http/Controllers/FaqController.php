<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;
use Alert;

class FaqController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Faq::orderByDesc('id')->get();

            return Datatables::of($data)
                ->addIndexColumn()
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
                  <button class="btn waves-effect waves-light btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editGambar" onclick="editData(&quot;' . $data->id. '&quot;)">
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
        return view('admin.faq.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
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
    

        Faq::create($data);
        toast('Berhasil Di Tambah', 'success');
        return redirect()->route('faq.index');
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $data = Faq::where('id', $id)->firstOrFail();

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
        $data = [
            'is_active' => 1,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'link' => $request->link,
        ];


        Faq::where('id', $id)->update($data);
        toast('Berhasil Di Update', 'success');
        return redirect()->route('faq.index');
    }

    public function destroy(Request $request)
    {
        $id = $request->id;

        $data = Faq::where('id', $id)->first();

        Faq::where('id', $id)->delete();

        if ($data) {
            return response()->json(['message' => 'Berhasil Di Hapus'], 200);
        } else {
            return response()->json(['message' => 'Error'], 200);
        }
    }
}
