<?php

use App\Http\Controllers\ClientesContoller;
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
        Route::get('/clientes/perfil/delete/', 'deleteCliente')->name('delete_Cliente');
    });

    # Agrupamento de rotas referentes ao admin
    Route::middleware('verifica.admin')->group(function () {
    });
});

require __DIR__ . '/auth.php';
