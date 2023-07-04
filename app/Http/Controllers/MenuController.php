<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\MenuList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function index()
    {
        $sub = Auth::user()->subdomain;
        $data = Menu::where('subdomain',$sub)->with('details')->get();
        return view('admin.menu.index', compact('data'));
    }


    public function storeMenu(Request $request)
    {

        // dd($request->parent_id);
        if ($request->parent_id == null) {
            $data = [
                'name' => $request->name,
                'subdomain' => Auth::user()->subdomain,
                'link' => $request->link,
                'urutan' => '0',
            ];
             Menu::create($data);

        } else {
            // return $request->all();
            $data = [
                'name' => $request->name,
                'link' => $request->link,
                'menu_id' => $request->parent_id,
                'urutan' => '0',
            ];
            MenuList::create($data);
        }

        toast('Berhasil Di Tambah', 'success');
        return redirect()->back();
    }

    public function updateMenu(Request $request, $id)
    {
        $data = [
            'name' => $request->name,
            'link' => $request->link,
        ];
        Menu::where('id', $id)->update($data);
        toast('Berhasil Di Update', 'success');
        return redirect()->back();
    }

    public function updateMenuList(Request $request, $id)
    {
        $data = [
            'name' => $request->name,
            'link' => $request->link,
        ];

        MenuList::where('id', $id)->update($data);
        toast('Berhasil Di Update', 'success');
        return redirect()->back();
    }

    public function menuJson($id)
    {
        $data = Menu::where('id', $id)->first();

        return response()->json($data, 200);
    }

    public function deleteMenu($id)
    {
        $menu = Menu::where('id', $id)->first();
        if ($menu->details()->get()->isNotEmpty()) {
            $menu->details()->delete();
        }
        Menu::where('id', $id)->delete();
        toast('Berhasil Di Hapus', 'success');
        return redirect()->back();
    }
    public function deleteMenuList($id)
    {
        MenuList::where('id', $id)->delete();
        toast('Berhasil Di Hapus', 'success');
        return redirect()->back();
    }
}
