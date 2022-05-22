<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientesContoller extends Controller
{
    function viewUpdateCliente(){
        $cliente = Cliente::where('user_id', '=', Auth::id())->first();

        return view('cliente.editar_cliente', ['cliente' => $cliente]);
    }

    function viewPerfilCliente(){
        $cliente = Cliente::where('user_id', '=', Auth::id())->first();

        return view('Cliente.perfil_cliente', ['cliente' => $cliente]);
    }
    
    function deleteCliente(){
        Cliente::where('user_id', '=', Auth::id())->first()->delete();

        Auth::logout();
        
        return to_route('home');
    }
}
