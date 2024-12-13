<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Disenos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DisenosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->rol_id != 0) {
            return redirect('dashboard');
        }

        $disenos = Disenos::all();
        return view('admin.modules.users.disenos', compact('disenos'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Disenos::create([
            'nombre_diseño' => $request->nuevoDiseno,
            'fecha_creacion' => now(),
            'fecha_actualizacion' => '',
        ]);

        return redirect('Modelos')->with('success', 'El modelo ha sido Agregado correctamente');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_diseno)
    {
        $diseno = Disenos::find($id_diseno);

        return response()->json($diseno);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Disenos $disenos)
    {
        Disenos::where('id_diseño', $request->id_diseno)->update([
            'nombre_diseño' => $request->editarDiseno,
        ]);

        return redirect('Diseños')->with('success', 'El diseño ha sido Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Disenos $disenos)
    {
        //
    }
}
