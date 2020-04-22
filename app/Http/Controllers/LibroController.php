<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller
{
    public function index()
    {
        // dd(session()->all());
        can('listar-libros');
        $datas = Libro::orderBy('id')->get();
        return view('libro.index', compact('datas'));
    }

    public function crear()
    {
        can('crear-libros');
        return view('libro.crear');
    }

    public function guardar(Request $request)
    {
        if ($foto = Libro::setCaratula($request->foto_up))
            $request->request->add(['foto' => $foto]);
        /* Libro::create($request->all());
        return redirect()->route('libro')->with('mensaje', 'El libro se creo correctamente'); */
    }

    public function ver($id)
    {
        //
    }

    public function editar($id)
    {
        //
    }

    public function actualizar(Request $request, $id)
    {
        //
    }

    public function eliminar($id)
    {
        //
    }
}
