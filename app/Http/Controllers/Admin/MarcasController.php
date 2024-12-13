<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Marcas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MarcasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->rol_id != 0) {
            return redirect('dashboard');
        }

        $marcas = Marcas::all();
        return view('admin.modules.users.marcas', compact('marcas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Marcas::create([
            'nombre_marca' => $request->nuevoMarca,
            'fecha_creacion' => now(), // Fecha actual
            'fecha_actualizacion' => '',
        ]);

        return redirect('Marcas')->with('success', 'La marca ha sido Agregado correctamente');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_marca)
    {
        $marca = Marcas::find($id_marca);

        return response()->json($marca);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Marcas $marcas)
    {
        Marcas::where('id_marca', $request->id_marca)->update([
            'nombre_marca' => $request->editarMarca,
        ]);

        return redirect('Marcas')->with('success', 'La categoria ha sido Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Marcas $marcas)
    {
        //
    }
}
