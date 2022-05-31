<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FornecedorController extends Controller
{
    function viewListFornecedores()
    {
        $fornecedor = Fornecedor::all();

        return view('fornecedores.lista_fornecedores', ['fornecedor' => $fornecedor]);
    }

    function viewAddFornecedor()
    {
        return view('fornecedores.novo_fornecedor');

        //return view('produto.novo_produto', ['fornecedores' => $fornecedores]);
    }

    /*function viewUpdateProduto($id)
    {
        $produto = Produto::findOrFail($id);
        $fornecedores = Fornecedor::all();

        return view('produto.update_produto', ['produto' => $produto, 'fornecedores' => $fornecedores]);
    }
*/
    function addFornecedor(Request $req)
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome = $req->input('nome');
        $fornecedor->telefone = $req->input('telefone');
        $fornecedor->cnpj = $req->input('cnpj');
        $fornecedor->email = $req->input('email');


        $fornecedor->save();
        /*
        $produto->slug = Str::slug("{$produto->nome}{$produto->id}");
        $imagem = $req->file('arquivo');
        $caminho_arquivo = $imagem->storeAs('produtos', "{$produto->id}.{$imagem->extension()}");
        $produto->caminho_imagem = "/storage/$caminho_arquivo";

        $produto->save();
*/
        return to_route('dashboard');
    }

    /*function viewDetalheProduto($id)
    {
        $produto = Produto::findOrFail($id);

        return view('produto.detalhe_produto', ['produto' => $produto]);
    }
*/
    /*function updateProduto(Request $req)
    {
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
*/
    /*function deleteProduto($id)
    {
        Produto::findOrFail($id)->delete();;

        return to_route('dashboard');
    }
    */
}
