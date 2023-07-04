<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Values;
use App\Models\Licenses;
use App\Models\Identitas;
use App\Models\Operation;
use App\Models\Mostclient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class IdentitasController extends Controller
{
    public function index()
    {
        $sub = Auth::user()->subdomain;
        $data = Identitas::where('subdomain', $sub)->first();
        return view('admin.identitas.index', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = [
            'nama_website' => $request->nama_website,
            'deskripsi' => $request->deskripsi,
            'email' => $request->email,
            'url' => $request->url,
            'facebook' => $request->facebook,
            'youtube' => $request->youtube,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
        ];


        if ($request->has('image')) {
            $image = $request->image;
            $imageName = time() . $image->getClientOriginalName();
            $image->move('uploads/foto_website', $imageName);
            $data['image'] = $imageName;
        }
        if ($request->has('image_white')) {
            $image = $request->image_white;
            $imageName = time() . $image->getClientOriginalName();
            $image->move('uploads/foto_website', $imageName);
            $data['image_white'] = $imageName;
        }
        if ($request->has('favicon')) {
            $image = $request->favicon;
            $imageName = time() . $image->getClientOriginalName();
            $image->move('uploads/foto_website', $imageName);
            $data['favicon'] = $imageName;
        }
        if ($request->has('image_login')) {
            $image = $request->image_login;
            $imageName = time() . $image->getClientOriginalName();
            $image->move('uploads/foto_website', $imageName);
            $data['image_login'] = $imageName;
        }
        Identitas::where('id', $id)->update($data);
        toast('Data Berhasil Di Update', 'success');
        return redirect()->back();
    }

    public function sambutan()
    {
        $data = Identitas::first();
        return view('admin.identitas.sambutan', compact('data'));
    }

    public function updateSambutan(Request $request, $id)
    {
        $data = [
            'sambutan' => $request->sambutan,
            'nama_kepala' => $request->nama_kepala,
            'jabatan_kepala' => $request->jabatan_kepala,
        ];

        if ($request->has('foto_kepala')) {
            $image = $request->foto_kepala;
            $imageName = time() . $image->getClientOriginalName();
            $image->move('uploads/foto_pimpinan', $imageName);
            $data['foto_kepala'] = $imageName;
        }

        Identitas::where('id', $id)->update($data);
        toast('Data Berhasil Di Update', 'success');
        return redirect()->back();
    }

    

}
