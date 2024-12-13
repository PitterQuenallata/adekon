<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Modelos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ModelosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->rol_id != 0) {
            return redirect('dashboard');
        }

        $modelos = Modelos::all();
        return view('admin.modules.users.modelos', compact('modelos'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Modelos::create([
            'nombre_modelo' => $request->nuevoModelo,
            'fecha_creacion' => now(),
            'fecha_actualizacion' => '',
        ]);

        return redirect('Modelos')->with('success', 'El modelo ha sido Agregado correctamente');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_modelo)
    {
        $modelo = Modelos::find($id_modelo);

        return response()->json($modelo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Modelos $modelos)
    {
        Modelos::where('id_modelo', $request->id_modelo)->update([
            'nombre_modelo' => $request->editarModelo,
        ]);

        return redirect('Marcas')->with('success', 'La marca ha sido Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Modelos $modelos)
    {
        //
    }
}
