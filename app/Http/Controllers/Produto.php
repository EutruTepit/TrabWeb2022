<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Produto extends Controller
{
    function viewAddProduto(){
        return view('produto_novo');
    }

    function addProduto(Request $req){
        $produto = new Produto();
        $produto->nome = $req->input('nome');
        $produto->descricao = $req->input('descricao');;
        $produto->preco = $req->input('preco');;
        $produto->dataLancamento = $req->input('dataLancamento');;
        $produto->idFornecedor = $req->input('idFornecedor');;

        $produto->save();

        return to_route('dashboard');
    }

    function searchProduto($id){

    }

    function updateProduto(Request $req){

    }

    function delateProduto($id){
        
    }
}
