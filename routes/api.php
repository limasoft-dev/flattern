<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\HerosCotroller;
use App\Http\Controllers\LinksController;
use App\Http\Controllers\PortefoliosController;
use App\Http\Controllers\ServicosController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/getheros',[HerosCotroller::class,'getData']);
Route::get('/getservicos',[ServicosController::class,'getservicos']);
Route::get('/getcategorias',[CategoriasController::class,'getcategorias']);
Route::get('/getportefolios',[PortefoliosController::class,'getportefolios']);
Route::get('/getclientes',[ClientesController::class,'getclientes']);
Route::get('/getlinks',[LinksController::class,'getlinks']);
