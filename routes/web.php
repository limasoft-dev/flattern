<?php

use App\Http\Controllers\AdmController;
use App\Http\Controllers\FirmaController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\SadController;
use App\Http\Controllers\UsrController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [GuestController::class,'index'])->name('inicio');
Route::get('/about', [GuestController::class,'about'])->name('about');

//USR - Utilizador
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('usr/dashboard',[UsrController::class,'index'])->name('usr.dashboard');
});

//ADM - Administrator
Route::middleware(['auth:sanctum', 'verified', 'authadm'])->group(function () {
    Route::get('adm/dashboard',[AdmController::class,'index'])->name('adm.dashboard');
});

//SAD - Super Admin LimaSoft
Route::middleware(['auth:sanctum', 'verified', 'authsad'])->group(function () {
    Route::get('sad/dashboard',[SadController::class,'index'])->name('sad.dashboard');

    Route::get('sad/firma/contactos',[FirmaController::class,'contactos'])->name('sad.firma.contactos');
    Route::get('sad/firma/socials',[FirmaController::class,'socials'])->name('sad.firma.socials');

    Route::put('entidade/{id}',[FirmaController::class,'entidadeupdate'])->name('entidade.update');
    Route::put('morada/{id}',[FirmaController::class,'moradaupdate'])->name('morada.update');
    Route::put('emailphone/{id}',[FirmaController::class,'emailphoneupdate'])->name('emailphone.update');

    Route::put('socials/{id}',[FirmaController::class,'socialsupdate'])->name('socials.update');

});
