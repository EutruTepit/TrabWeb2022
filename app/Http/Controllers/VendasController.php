<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Produto;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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

    function finalizarCompra(){
        $carrinho = Session::get('carrinho');
        $valor_total = 0.0;
        foreach ($carrinho as $id_produto => $qtd){
            $produto = Produto::find($id_produto);
            $valor_total += $produto->valor * $qtd;
        }
        
        $cliente = Cliente::where('user_id', '=', Auth::id())->first();
        $cpf = Str::substr($cliente->cpf, 0, 3).".".Str::substr($cliente->cpf, 3, 3).".".Str::substr($cliente->cpf, 6, 3)."-".Str::substr($cliente->cpf, 9);

        $response = Http::post('http://10.41.1.4/api/pagamentos', [
            "token" => '$2y$10$4hPGX6se8ihN.TaGYdk.Guwtpf7i1cw5rKImX36buEUPLrrnX1Un2',
            "CpfCliente" => $cpf,
            "valor" => $valor_total
        ]);

        if($response->status() == 201){
            return to_route('efetivar_Compra');
        }
        return view('cliente.carrinho', ['compra_problema' => 'Desculpa probrema no pagamento']);
    }

    function efetivarCompra(){
        $carrinho = Session::get('carrinho');
        $valor_total = 0.0;
        foreach ($carrinho as $id_produto => $qtd){
            $produto = Produto::find($id_produto);
            $valor_total += $produto->valor * $qtd;
        }
        
        Session::remove('carrinho');

        return view('cliente.pedidos', ['compra_finalizada' => 'Obrigado, por comprar conosco']);
    }

}
