<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionMenu;
use App\Models\Admin\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::getMenu();
        return view('admin.menu.index', compact('menus'));
    }

    public function crear()
    {
        return view('admin.menu.crear');
    }

    public function guardar(ValidacionMenu $request)
    {
        Menu::create($request->all());
        return redirect('admin/menu/crear')->with('mensaje', 'Menú creado con éxito');
    }

    public function editar($id)
    {
        $data = Menu::findOrFail($id);
        return view('admin.menu.editar', compact('data'));
    }

public function actualizar(ValidacionMenu $request, $id)
{
    Menu::findOrFail($id)->update($request->all());
    return redirect('admin/menu')->with('mensaje', 'Menú actualizado con éxito');
}

    public function eliminar($id)
    {
        Menu::destroy($id);
        return redirect('admin/menu')->with('mensaje', 'Menú eliminado con éxito');
    }

    public function guardarOrden(Request $request)
    {
        if ($request->ajax()) {
            $menu = new Menu;
            $menu->guardarOrden($request->menu);
            return response()->json(['respuesta' => 'ok']);
        } else {
            abort(404);
        }
    }
}
