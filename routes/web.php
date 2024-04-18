<?php

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [ PrincipalController::class, 'index'])->name('site.index');
Route::get('/contato',[ContatoController::Class, 'index'])->name('site.contato');
Route::post('/contato',[ContatoController::Class, 'index'])->name('site.contato');
Route::get('/sobre-nos',[SobreNosController::Class, 'index'])->name('site.sobrenos');


