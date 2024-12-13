<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->rol_id != "0") {
            return redirect('dashboard');
        }

        $categorias = Categorias::all();
        return view('admin.modules.users.categorias', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Categorias::create([
            'nombre_categoria' => $request->nuevoCategoria,
            'fecha_creacion' => now(), // Fecha actual
            'fecha_actualizacion' => '',
        ]);

        return redirect('Categorias')->with('success', 'La categoria ha sido Agregado correctamente');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_categoria)
    {
        $categoria = Categorias::find($id_categoria);

        return response()->json($categoria);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorias $categorias)
    {
        Categorias::where('id_categoria', $request->id_categoria)->update([
            'nombre_categoria' => $request->editarCategoria,
        ]);

        return redirect('Categorias')->with('success', 'La categoria ha sido Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorias $categorias)
    {
        //
    }
}
