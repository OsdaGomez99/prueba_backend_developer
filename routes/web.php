<?php

use Illuminate\Support\Facades\Route;


Route::resource('ventas', VentaController::class);
Route::resource('proveedores', ProveedorController::class);
Route::resource('vendedores', VendedorController::class);
Route::resource('clientes', ClienteController::class);
Route::resource('productos', ProductoController::class);

Route::post('/detalles_venta/{venta}', [\App\Http\Controllers\DetalleVentaController::class, 'store']) -> name ('detalles_venta.store');
Route::delete('/detalles_venta/{id}/{venta}', [\App\Http\Controllers\DetalleVentaController::class, 'destroy']) -> name ('detalles_venta.destroy');

