<?php

use App\Http\Controllers\ProdutoContoller;
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
});

# Rotas que precisam de autenticação para entrar
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    # Agrupamento de rotas referentes ao admin
    Route::middleware('verifica.admin')->group(function () {

        // Agrupamento por controller
        Route::controller(ProdutoContoller::class)->group(function () {
            Route::get('/produtos/lista', 'viewListaProdutos')->name('lita_produtos');
            Route::get('/produtos/detalhe/{id}', 'viewDetalheProduto')->name('view_detalhe_produto');
            Route::get('/produtos/novo', 'viewAddProduto')->name('view_produto');
            Route::post('/produtos/novo', 'addProduto')->name('add_produto');
            Route::get('/produtos/update', 'viewUpdateProduto')->name('view_update_produto');
            Route::post('/produtos/update', 'updateProduto')->name('update_produto');
            Route::get('/produtos/delete/{id}', 'deleteProduto')->name('deleteProduto');
        });

    });
});

require __DIR__ . '/auth.php';
