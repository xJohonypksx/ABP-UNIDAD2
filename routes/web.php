<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VentaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Rutas públicas
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dobano_inicio', function () {
    return view('dobano_inicio');
});

// Autenticación (si usas el sistema de autenticación de Laravel)
Auth::routes();

// Rutas protegidas (requieren autenticación)
Route::middleware(['auth'])->group(function () {
    // Dashboard principal
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Rutas para productos
    Route::prefix('productos')->group(function () {
        Route::get('/', [ProductoController::class, 'index'])->name('productos.index');
        Route::get('/crear', [ProductoController::class, 'create'])->name('productos.create');
        Route::post('/', [ProductoController::class, 'store'])->name('productos.store');
        Route::get('/{id}/editar', [ProductoController::class, 'edit'])->name('productos.edit');
        Route::put('/{id}', [ProductoController::class, 'update'])->name('productos.update');
        Route::delete('/{id}', [ProductoController::class, 'destroy'])->name('productos.destroy');
        Route::get('/{id}', [ProductoController::class, 'show'])->name('productos.show');
    });

    // Rutas para clientes
    Route::resource('clientes', ClienteController::class)->except(['show']);

    // Rutas para ventas
    Route::prefix('ventas')->group(function () {
        Route::get('/', [VentaController::class, 'index'])->name('ventas.index');
        Route::get('/nueva', [VentaController::class, 'create'])->name('ventas.create');
        Route::post('/', [VentaController::class, 'store'])->name('ventas.store');
        Route::get('/{id}/detalle', [VentaController::class, 'show'])->name('ventas.show');
        Route::get('/{id}/ticket', [VentaController::class, 'ticket'])->name('ventas.ticket');
    });

    // Reportes
    Route::prefix('reportes')->group(function () {
        Route::get('/ventas', [DashboardController::class, 'reporteVentas'])->name('reportes.ventas');
        Route::get('/inventario', [DashboardController::class, 'reporteInventario'])->name('reportes.inventario');
    });
});

// Ruta de fallback (para manejar rutas no definidas)
Route::fallback(function () {
    return redirect()->route('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
