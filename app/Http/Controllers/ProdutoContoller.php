<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoContoller extends Controller
{
    function viewListProdutos(){
        $produtos = Produto::all();

        return view('produto.lista_produto', ['produtos' => $produtos]);
    }

    function viewAddProduto(){
        return view('produto.novo_produto');
    }

    function viewUpdateProduto(){
        return view('produto.update_produto');
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

    function detalheProduto($id){
        $produto = Produto::findOrFail($id);

        return view('produto.detalhe_produto', ['produto' => $produto]);
    }

    function updateProduto(Request $req){
        $id = $req->input('id');

        $produto = Produto::findOrFail($id);
        $produto->nome = $req->input('nome');
        $produto->descricao = $req->input('descricao');;
        $produto->preco = $req->input('preco');;
        $produto->dataLancamento = $req->input('dataLancamento');;
        $produto->idFornecedor = $req->input('idFornecedor');;

        $produto->save();

        return to_route('dashboard');
    }

    function deleteProduto($id){
        Produto::findOrFail($id)->delete();;

        return to_route('dashboard');
    }
}
