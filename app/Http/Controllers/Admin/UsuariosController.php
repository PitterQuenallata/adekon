<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;


class UsuariosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function ActualizarPerfil(Request $request)
    {
        $user = auth()->user();
    
        $datos = $request->validate([
            'editarNombrePerfil' => 'required|string|max:255',
            'editarApellidoPerfil' => 'required|string|max:255',
            'editarApellidoMaternoPerfil' => 'required|string|max:255',
            'editarCelularPerfil' => 'required|digits:8|regex:/^[67]\d{7}$/',
            'editarEmailPerfil' => 'required|email|max:255|unique:users,email,' . $user->id,
            'editarPasswordPerfil' => 'nullable|min:8|confirmed',
            'fotoPerfil' => 'nullable|image|max:2048',
        ], [
            'editarNombrePerfil.required' => 'El nombre es obligatorio.',
            'editarApellidoPerfil.required' => 'El apellido paterno es obligatorio.',
            'editarApellidoMaternoPerfil.required' => 'El apellido materno es obligatorio.',
            'editarCelularPerfil.required' => 'El número de celular es obligatorio.',
            'editarCelularPerfil.digits' => 'El número de celular debe tener 8 dígitos.',
            'editarCelularPerfil.regex' => 'El número de celular debe comenzar con 6 o 7.',
            'editarEmailPerfil.required' => 'El correo electrónico es obligatorio.',
            'editarEmailPerfil.email' => 'El correo electrónico no es válido.',
            'editarEmailPerfil.unique' => 'El correo electrónico ya está en uso.',
            'editarPasswordPerfil.min' => 'La contraseña debe tener al menos 8 caracteres.',
            'editarPasswordPerfil.confirmed' => 'Las contraseñas no coinciden.',
            'fotoPerfil.image' => 'El archivo subido debe ser una imagen.',
            'fotoPerfil.max' => 'La imagen no debe superar los 2 MB.',
        ]);
        
    
        if ($request->hasFile('editarFotoPerfil')) {
            // Ruta absoluta para guardar la foto en "public/admins/storage/users"
            $directorio = public_path('admins/storage/users');
    
            // Crear el directorio si no existe
            if (!File::exists($directorio)) {
                File::makeDirectory($directorio, 0755, true); // Crea la carpeta con permisos
            }
    
            // Generar un nombre único para la foto
            $filename = Str::random(5) . '.' . $request->file('editarFotoPerfil')->getClientOriginalExtension();
            $rutaCompleta = $directorio . '/' . $filename;
    
            // Mover el archivo a la carpeta pública
            $request->file('editarFotoPerfil')->move($directorio, $filename);
    
            // Eliminar la foto anterior si existe
            if ($user->foto) {
                $rutaFotoAnterior = public_path($user->foto);
                if (File::exists($rutaFotoAnterior)) {
                    File::delete($rutaFotoAnterior);
                }
            }
    
            // Guardar el nombre del archivo en la base de datos
            $user->foto = 'admins/storage/users/' . $filename;
        }
    
        // Mantener la foto anterior si no se sube una nueva
        if (!$request->hasFile('editarFotoPerfil')) {
            $user->foto = $user->foto;
        }
    
        // Actualizamos los datos del usuario
        $user->first_name = $datos['editarNombrePerfil'];
        $user->last_name = $datos['editarApellidoPerfil'];
        $user->last_mader_name = $datos['editarApellidoMaternoPerfil'];
        $user->telefono = $datos['editarCelularPerfil'];
        $user->email = $datos['editarEmailPerfil'];
    
        if ($request->filled('editarPasswordPerfil')) {
            $user->password = bcrypt($request->editarPasswordPerfil);
        }
    
        $user->updated_at = now();
        $user->save();
    
        return back()->with('success', 'Perfil actualizado correctamente.');
    }
    
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
