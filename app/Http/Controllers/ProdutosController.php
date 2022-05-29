<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;


class ProdutosController extends Controller
{

    function cadastro_novo()
    {
        return view('produto_novo');
    }


    function novo(Request $req)
    {
        //dd($req);
        $nome = $req->input('nome');
        $preco = $req->input('preco');
        $descricao = $req->input('descricao');
        $idFornecedor = $req->input("idFornecedor");


        $produto = new Produto();
        $produto->nomeProduto = $nome;
        $produto->preco       = $preco;
        $produto->descricao   = $descricao;
        $produto->idFornecedor = $idFornecedor;

        $produto->save();
        #return redirect()->route('produto_listar');
    }
    /*
    function listar()
    {

        $produto = produto::all();
        return  view('lista_produto', ['produto' => $produto]);
    }


    function alterar($id)
    {
        $produto = produto::findOrFail($id);

        return view('altera_produto', ['produto' => $produto]);
    }

    function salvar(Request $req)
    {
        $id = $req->input('id');
        $nomeProduto = $req->input('nomeProduto');
        $preco = $req->input('preco');
        $peso = $req->input('peso');


        $produto = produto::findOrFail($id);
        $produto->nomeProduto = $nomeProduto;
        $produto->preco = $preco;
        $produto->peso = $peso;


        $produto->save();

        return redirect()->route('produtos_listar');
    }

    function excluir($id)
    {
        $produto = produto::findOrFail($id);
        $produto->delete();

        return redirect()->route('produtos_listar');
    }
    */
}
