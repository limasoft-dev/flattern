<?php

use App\Http\Controllers\AdmController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ContactosController;
use App\Http\Controllers\FirmaController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HerosCotroller;
use App\Http\Controllers\NewslettersController;
use App\Http\Controllers\PortefoliosController;
use App\Http\Controllers\SadController;
use App\Http\Controllers\ServicosController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\TestemunhosController;
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
Route::get('/gservicos', [GuestController::class,'servicos'])->name('gservicos');
Route::get('/gportfolio', [GuestController::class,'portfolio'])->name('gportfolio');
Route::get('/contactos', [GuestController::class,'contactos'])->name('contactos');
Route::post('/newsletter',[NewslettersController::class,'store'])->name('newsletter.store');
Route::post('/fcontactos',[ContactosController::class,'store'])->name('fcontactos.store');

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

    Route::get('firma/contactos',[FirmaController::class,'contactos'])->name('firma.contactos');
    Route::put('entidade/{id}',[FirmaController::class,'entidadeupdate'])->name('entidade.update');
    Route::put('morada/{id}',[FirmaController::class,'moradaupdate'])->name('morada.update');
    Route::put('emailphone/{id}',[FirmaController::class,'emailphoneupdate'])->name('emailphone.update');

    Route::get('firma/socials',[FirmaController::class,'socials'])->name('firma.socials');
    Route::put('socials/{id}',[FirmaController::class,'socialsupdate'])->name('socials.update');

    Route::get('firma/chamadah',[FirmaController::class,'chamadah'])->name('firma.chamadah');
    Route::put('chamadah/{id}',[FirmaController::class,'chamadahupdate'])->name('chamadah.update');

    Route::put('titservicos/{id}',[FirmaController::class,'servicosupdate'])->name('titservicos.update');
    Route::put('titportefolio/{id}',[FirmaController::class,'portefolioupdate'])->name('titportefolio.update');
    Route::put('titclientes/{id}',[FirmaController::class,'clientesupdate'])->name('titclientes.update');
    Route::put('titteams/{id}',[FirmaController::class,'teamsupdate'])->name('titteams.update');
    Route::put('tittestemunhos/{id}',[FirmaController::class,'testemunhosupdate'])->name('tittestemunhos.update');

    Route::resource('destaques',HerosCotroller::class);
    Route::resource('servicos',ServicosController::class);
    Route::resource('portefolios',PortefoliosController::class);
    Route::resource('categorias',CategoriasController::class);
    Route::resource('clientes',ClientesController::class);
    Route::resource('teams',TeamsController::class);
    Route::resource('testemunhos',TestemunhosController::class);

});
