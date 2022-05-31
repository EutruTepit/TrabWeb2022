<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ClientesContoller;
use App\Http\Controllers\ProdutoContoller;
use App\Http\Controllers\VendasController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

# Rotas que precisam de autenticação para entrar
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::controller(ClientesContoller::class)->group(function () {
        Route::post('/clientes', 'cadastrarCliente')->name('cadastrar_cliente');
        Route::get('/clientes/perfil/', 'viewPerfilCliente')->name('view_perfil_cliente');
        Route::get('/clientes/perfil/update/', 'viewUpdateCliente')->name('view_update_cliente');
        Route::post('/clientes/perfil/update/', 'updateCliente')->name('update_Cliente');
        Route::get('/clientes/perfil/delete/', 'deleteCliente')->name('delete_Cliente');
    });

    //Controlle sobre venda
    Route::controller(VendasController::class)->group(function(){
        Route::get('/carrinho', 'viewListCarrinho')->name('view_list_carrinho');
        Route::get('/carrinho/add/{$id_produto}/{$qtd}', 'addCarrinho')->name('add_produto_carrinho');
        Route::get('/carrinho/delete/{$id_produto}', 'deleteProduto')->name('delete_produto_carrinho');
        Route::get('/carrinho/finalizarCompra', 'finalizarCompra')->name('finalizer_Compra');
        Route::get('/carrinho/efetivarCompra', 'efetivarCompra')->name('efetivar_Compra');
    });

    # Agrupamento de rotas referentes ao admin
    Route::middleware('verifica.admin')->group(function () {
        Route::get('/register/admin', [RegisteredUserController::class, 'createAdmin'])->name('view_registrar_admin');
        Route::post('/register/admin', [RegisteredUserController::class, 'store'])->name('registar_admin');

        // Agrupamento por controller
        Route::controller(ProdutoContoller::class)->group(function () {
            Route::get('/produtos/lista', 'viewListaProdutos')->name('lita_produtos');
            Route::get('/produtos/detalhe/{id}', 'viewDetalheProduto')->name('view_detalhe_produto');
            Route::get('/produtos/novo', 'viewAddProduto')->name('view_add_produto');
            Route::post('/produtos/novo', 'addProduto')->name('add_produto');
            Route::get('/produtos/update/{id}', 'viewUpdateProduto')->name('view_update_produto');
            Route::post('/produtos/update', 'updateProduto')->name('update_produto');
            Route::get('/produtos/delete/{id}', 'deleteProduto')->name('delete_Produto');
        });
        
    });

});

require __DIR__ . '/auth.php';
