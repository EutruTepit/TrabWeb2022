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
}
