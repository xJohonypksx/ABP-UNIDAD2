<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dobano_inicio', function () {
    return view('dobano_inicio');
});

Route::get('/dobano_info', function () {
    return view('dobano_info');
})->middleware('auth')->name('dobano_info');

Route::get('/empresa', function () {
    return view('empresa');
})->middleware('auth')->name('empresa');




Route::resource('personas',App\Http\Controllers\PersonasController::class );
Route::resource('clientes',App\Http\Controllers\ClientesController::class );
Route::resource('inventarios',App\Http\Controllers\InventariosController::class );
Route::resource('pagos',App\Http\Controllers\PagosController::class );
Route::resource('productos',App\Http\Controllers\ProductosController::class );
Route::resource('proveedores',App\Http\Controllers\ProveedoresController::class );
Route::resource('tickets',App\Http\Controllers\TicketsController::class );
Route::resource('vendedores',App\Http\Controllers\VendedoresController::class );
Route::resource('ventas',App\Http\Controllers\VentasController::class );

Route::get('/dashboard', [DashboardController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
