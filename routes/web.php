<?php
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsuariosController;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Admin\CategoriasController;
use App\Http\Controllers\Admin\DisenosController;
use App\Http\Controllers\Admin\MarcasController;
use App\Http\Controllers\Admin\ModelosController;
use App\Http\Controllers\Admin\ProductosController;
use App\Http\Controllers\Admin\ProveedoresController;

// Ruta pública (Front)
Route::get('/', [HomeController::class, 'index'])->name('home');

// Ruta de administración
// Por ahora sin middleware de auth, luego puedes agregarlo cuando tengas el login implementado.
Route::prefix('admin')->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
});

// Rutas de autenticación
Route::get('admin', function() {
    return view('admin.modules.users.ingresar');
});

Auth::routes();


Route::get('Categorias', action: [CategoriasController::class, 'index']);
//Route::get('Proveedores', action: [ProveedoresController::class, 'index']);
Route::get('Marcas', action: [MarcasController::class, 'index']);
Route::get('Modelos', action: [ModelosController::class, 'index']);
Route::get('Diseños', action: [DisenosController::class, 'index']);
Route::get('Productos', action: [ProductosController::class, 'index']);





// Route::post('Proveedores', [ProveedoresController::class, 'store']);
Route::post('Categorias', [CategoriasController::class, 'store']);
Route::post('Marcas', [MarcasController::class, 'store']);
Route::post('Modelos', action: [ModelosController::class, 'store']);
Route::post('Diseños', action: [DisenosController::class, 'store']);
Route::post('Productos', action: [ProductosController::class, 'store']);



// Route::get('Editar-Proveedor/{id_proveedor}', [ProveedoresController::class, 'edit']);
Route::get('Editar-Categoria/{id_categoria}', [CategoriasController::class, 'edit']);
Route::get('Editar-Marca/{id_marca}', [MarcasController::class, 'edit']);
Route::get('Editar-Modelo/{id_modelo}', [ModelosController::class, 'edit']);
Route::get('Editar-Diseno/{id_diseno}', [DisenosController::class, 'edit']);
Route::get('Editar-Producto/{id_producto}', [ProductosController::class, 'edit']);




// Route::put('Actualizar-Proveedor', [ProveedoresController::class, 'update']);
Route::put('Actualizar-Categoria', [CategoriasController::class, 'update']);
Route::put('Actualizar-Marca', [MarcasController::class, 'update']);
Route::put('Actualizar-Modelo', [ModelosController::class, 'update']);
Route::put('Actualizar-Diseño', [DisenosController::class, 'update']);
Route::put('Actualizar-Producto', [ProductosController::class, 'update']);

