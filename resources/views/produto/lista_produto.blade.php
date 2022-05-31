@extends('dashboard')

@section('formulario')

@foreach ($produtos as $p)
    <div class="card" style="width: 18rem;">
        <img src="" class="card-img-top" alt="">
        <div class="card-body">
        
        <h5 class="card-title">{{ $p->nome }}</h5>
        <p class="card-text">{{ $p->descricao }}</p>
        <a href="{{ route('view_detalhe_produto', ['id' => $p->id]) }}" class="btn btn-primary">Detalhes</a>
        </div>
    </div>
@endforeach

@endsection
