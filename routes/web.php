<?php

use App\Http\Controllers\ProdutosController;
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
    });

    #Rotas para produtos 
    Route::get('/produto/novo', [ProdutosController::class, 'cadastro_novo']);
    Route::post('/produto/novo', [ProdutosController::class, 'novo'])->name('produto_novo');
});

require __DIR__ . '/auth.php';
