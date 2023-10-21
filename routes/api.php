<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/Personas', '\App\Http\Controllers\PersonaController@index');
Route::post('/Personas', '\App\Http\Controllers\PersonaController@store');
Route::get('/Personas/{id}', '\App\Http\Controllers\PersonaController@show');
Route::put('/Personas/{id}', '\App\Http\Controllers\PersonaController@update');
Route::delete('/Personas/{id}', '\App\Http\Controllers\PersonaController@destroy');
