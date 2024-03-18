<?php

use Illuminate\Support\Facades\Route;


Route::resource('ventas', VentaController::class);
Route::resource('proveedores', ProveedorController::class);
Route::resource('vendedores', VendedorController::class);
Route::resource('clientes', ClienteController::class);
Route::resource('productos', ProductoController::class);
