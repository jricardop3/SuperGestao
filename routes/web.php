<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PedidoProdutoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ProdutoDetalheController;
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
    Route::get('/home', [HomeController::class, 'index'])->name('app.home');
    Route::get('/sair',[LoginController::class, 'Sair'])->name('app.sair');
    //fornecedor get
    Route::get('/fornecedor', [FornecedorController::class, 'index'])->name('app.fornecedor');
    Route::get('/fornecedor/editar/{id}/{msg?}', [FornecedorController::class, 'editar'])->name('app.fornecedor.editar');
    Route::get('/fornecedor/excluir/{id}', [FornecedorController::class, 'excluir'])->name('app.fornecedor.excluir');
    Route::get('/fornecedor/adicionar', [FornecedorController::class, 'adicionar'])->name('app.fornecedor.adicionar');
    Route::get('/fornecedor/listar', [FornecedorController::class, 'listar'])->name('app.fornecedor.listar');
    //fornecedor post
    Route::post('/fornecedor/listar', [FornecedorController::class, 'listar'])->name('app.fornecedor.listar');
    Route::post('/fornecedor/adicionar', [FornecedorController::class, 'adicionar'])->name('app.fornecedor.adicionar');
    //produtos
    Route::resource('produto', ProdutoController::class);
    //produto detalhes
    Route::resource('produto-detalhe', ProdutoDetalheController::class);
    //cliente
    Route::resource('cliente', ClienteController::class);
    //produto
    Route::resource('produto', ProdutoController::class);
    //pedido-produto
    //Route::resource('pedido-produto', PedidoProdutoController::class);
    //pedido
    Route::resource('pedido', PedidoController::class);
    //pedido produto
    Route::get('pedido-produto/create/{pedido}',[PedidoProdutoController::class, 'create'])->name('pedido-produto.create');
    Route::post('pedido-produto/store/{pedido}',[PedidoProdutoController::class, 'store'])->name('pedido-produto.store');
    Route::delete('pedido-produto/destroy/{pedidoProduto}/{pedido_id}',[PedidoProdutoController::class, 'destroy'])->name('pedido-produto.destroy');
});
