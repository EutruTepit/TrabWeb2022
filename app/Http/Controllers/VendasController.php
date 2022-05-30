<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Support\Facades\Session;

class VendasController extends Controller
{
    function viewPedidos(){
        # Fazer a tabela de pedidos
        return view('cliente.pedidos');
    }

    function viewListCarrinho(){
        if(!Session::exists('carrinho')){
            Session::put('carrinho', []);
            return view('cliente.carrinho', ['produtos' => []]);
        }

        $produtos = [];
        $lista_id = Session::get('carrinho');
        foreach ($lista_id as $id_produto => $qtd){
            $produtos[] = Produto::find($id_produto);
        }

        return view('cliente.carrinho', ['produtos' => $produtos]);
    }

    function addCarrinho($id_produto, $qtd){
        if(!Session::exists('carrinho')){
            Session::put('carrinho', []);
        }
        Session::push('carrinho', [$id_produto=>$qtd]);

        return to_route('view_list_carrinho');
    }

    function deleteProduto($id_produto){
        Session::pull('carrinho', [$id_produto]);

        return to_route('view_list_carrinho');
    }

    function efetivarCompra(){
        $carrinho = Session::get('carrinho');
        $valor_total = 0.0;
        foreach ($carrinho as $id_produto => $qtd){
            $produto = Produto::find($id_produto);
            $valor_total += $produto->valor * $qtd;
        }

        return view('cliente.pedidos', ['compra_finalizada' => 'Obrigado, por comprar conosco']);
    }

}
