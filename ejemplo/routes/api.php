<?php

use Illuminate\Http\Request;

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
Route::get('/Provincia/{id}','Provincia\ProvinciaSelect@Provincias');
Route::get('/Distrito/{id}','Distrito\DistritoSelect@Distritos');
Route::get('/vendedores/{id}','vendedores\vendedoresSelect@vendedores');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
