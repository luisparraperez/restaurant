<?php

use Illuminate\Support\Facades\Config;
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

Route::get('/', [App\Http\Controllers\publico\inicio::class,'index']);

Route::middleware(['auth:sanctum', 'verified','validaPermisoModulo'])->get('menu', [App\Http\Controllers\modulo\menu\principal::class,'index'])->name('menu');

Route::middleware(['auth:sanctum', 'verified','validaPermisoModulo'])->get('gestion',[App\Http\Controllers\modulo\gestion\principal::class,'index'])->name('gestion');


Route::middleware(['auth:sanctum', 'verified'])->get('/cliente', function () {
    dd( auth()->user()->modulos);
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified','validaTipoUsuario'])
->get('/dashboard',[App\Http\Controllers\administracion\modulo::class,'seleccionar'] )->name('dashboard');
