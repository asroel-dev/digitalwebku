<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class PriceController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Price::orderByDesc('id')->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('price', function ($data) {
                    $price = $data->price;
                    return $price;
                })
                ->editColumn('date', function ($data) {
                    $date = $data->date;
                    return $date;
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
        return view('admin.price.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'price' => 'required',
            'date' => 'required',
        ]);

        $data = [
            'price' => $request->price,
            'date' => $request->date,
        ];
    

        Price::create($data);
        toast('Berhasil Di Tambah', 'success');
        return redirect()->route('price.index');
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $data = Price::where('id', $id)->firstOrFail();
        return response()->json($data, 200);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'price' => 'required',
            'date' => 'required',
        ]);

        $id = $request->id;
        $gambar = Price::where('id', $id)->first();
        $data = [
            'price' => $request->price,
            'date' => $request->date,
        ];


        Price::where('id', $id)->update($data);
        toast('Berhasil Di Update', 'success');
        return redirect()->route('price.index');
    }

    public function destroy(Request $request)
    {
        $id = $request->id;
        Price::where('id', $id)->delete();
        return response()->json(['message' => 'Error'], 200);
    }
}
