<?php

use App\Http\Controllers\VentaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['middleware' => 'api'], function ($router){

    //Endpoints de metodo GET para obtener registros
    Route::get('getProveedores', 'ProveedorController@getProveedores');
    Route::get('getProductos', 'ProductoController@getProductos');
    Route::get('getSucursales', 'SucursalController@getSucursales');
    Route::get('getVendedores', 'VendedorController@getVendedores');
    Route::get('getClientes', 'ClienteController@getClientes');
    Route::get('getVentas', 'VentaController@getVentas');

    //Endpoint de metodo POST para crear una venta
    Route::post('createVenta', 'VentaController@createVenta');
});
