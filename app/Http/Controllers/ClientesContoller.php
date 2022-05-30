<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisteredUserController;

class ClientesContoller extends RegisteredUserController
{
    function cadastrarCliente(Request $request){
        
        parent::store($request);
        $cliente = new Cliente();
        $cliente->nome = $request->input('name');
        $cliente->cpf = $request->input('cpf');
        $cliente->rg = $request->input('rg');
        $cliente->data_nasc = $request->input('data_nasc');
        $cliente->telefone = $request->input('telefone');
        $cliente->cep = $request->input("cep");
        $cliente->logradouro = $request->input("logradouro");
        $cliente->complemento = $request->input("complemento");
        $cliente->numero = $request->input("numero");
        $cliente->bairro = $request->input("bairro");
        $cliente->localidade = $request->input("localidade"); #cidade
        $cliente->uf = $request->input("uf");

        $cliente->user_id = Auth::id();

        $cliente->save();

        return to_route('dashboard');

    }

    function updateCliente(Request $request){
        $user = Auth::user();
        
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        $cliente = Cliente::where('user_id', '=', Auth::id())->first();

        $cliente->telefone = $request->input('telefone');
        $cliente->cep = $request->input("cep");
        $cliente->logradouro = $request->input("logradouro");
        $cliente->complemento = $request->input("complemento");
        $cliente->numero = $request->input("numero");
        $cliente->bairro = $request->input("bairro");
        $cliente->localidade = $request->input("localidade"); #cidade
        $cliente->uf = $request->input("uf");
        return to_route('dashboard');
    }

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
