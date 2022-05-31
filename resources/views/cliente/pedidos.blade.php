@extends('dashboard')

@section('formulario')
@routes

@foreach ($produtos as $p)
    <div class="card" style="width: 18rem;">
        <img src="" class="card-img-top" alt="">
        <div class="card-body">
        <h5 class="card-title">{{ $p->nome }}</h5>
        <p class="card-text">{{ $p->descricao }}</p>
        <p class="card-text">Quantidade: {{ Session::get('carrinho', [$p->id]) }}</p>
        <a href="{{ route('view_detalhe_produto', ['id' => $p->id]) }}" class="btn btn-primary">Detalhes</a>
        <a href="#" onclick="excluir({{ $p->id }})" class="btn btn-danger">Excluir</a>
        </div>
    </div>
@endforeach

@endsection