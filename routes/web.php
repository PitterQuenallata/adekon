<?php
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Ruta pública (Front)
Route::get('/', [HomeController::class, 'index'])->name('home');

// Ruta de administración
// Por ahora sin middleware de auth, luego puedes agregarlo cuando tengas el login implementado.
Route::prefix('admin')->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
