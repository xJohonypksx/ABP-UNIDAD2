<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('personas',App\Http\Controllers\PersonasController::class );
Route::resource('clientes',App\Http\Controllers\ClientesController::class );
Route::resource('inventarios',App\Http\Controllers\InventariosController::class );
Route::resource('pagos',App\Http\Controllers\PagosController::class );
Route::resource('productos',App\Http\Controllers\ProductosController::class );
Route::resource('proveedores',App\Http\Controllers\ProveedoresController::class );
Route::resource('tickets',App\Http\Controllers\TicketsController::class );
Route::resource('vendedores',App\Http\Controllers\VendedoresController::class );
Route::resource('ventas',App\Http\Controllers\VentasController::class );

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
