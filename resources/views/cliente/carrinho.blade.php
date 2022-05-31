@extends('dashboard')

@section('formulario')
@routes

@foreach ($produtos as $p)
    <div class="card" style="width: 18rem;">
        <img src="{{ $p->caminho_imagem }}" class="card-img-top" alt="">
        <div class="card-body">
        <h5 class="card-title">{{ $p->nome }}</h5>
        <p class="card-text">{{ $p->descricao }}</p>
        <p class="card-text">Quantidade: {{ Session::get('carrinho', [$p->id]) }}</p>
        <a href="{{ route('view_detalhe_produto', ['id' => $p->id]) }}" class="btn btn-primary">Detalhes</a>
        <a href="#" onclick="excluir({{ $p->id }})" class="btn btn-danger">Excluir</a>
        </div>
    </div>
@endforeach

<script>
    function excluir(id){
        if(confirm(`Desaja realmente excluir o produto  ${id} do carrinho? Essa ação é irreversivel!`)){
            location.href = route('delete_produto_carrinho', {'id_produto':id});
        }
    }
</script>

@endsection
