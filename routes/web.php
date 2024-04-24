<?php

use App\Http\Controllers\LoginController;
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
//Route::get('/', [ PrincipalController::class, 'index'])->name('site.index')->middleware(LogAcessoMiddleware::class);
//Route::middleware(LogAcessoMiddleware::class)->get('/', [ PrincipalController::class, 'index'])->name('site.index');// middleware -> get -> controller -> route.
Route::get('/', [ PrincipalController::class, 'index'])->name('site.index');
Route::get('/contato',[ContatoController::class, 'index'])->name('site.contato');
Route::post('/contato',[ContatoController::class, 'create'])->name('site.contato');
Route::get('/sobre-nos',[SobreNosController::class, 'index'])->name('site.sobrenos');
Route::get('/login/{erro?}',[LoginController::class, 'index'])->name('site.login');
Route::post('/login',[LoginController::class, 'autenticar'])->name('site.login');

Route::middleware('autenticacao:padrao,visitante')->prefix('/app')->group(function () {
    Route::get('/clientes', function () {return 'Clientes'; })->name('aap.cliente');
    Route::get('/fornecedores', function () {return 'Fornececedores'; })->name('aap.fornecedores');
    Route::get('/produtos', function () {return 'Produtos'; })->name('aap.produtos');
});
