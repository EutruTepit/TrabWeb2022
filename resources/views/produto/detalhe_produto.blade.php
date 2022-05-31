@extends('dashboard')

@section('formulario')
@routes

<h1>Produto: {{ $produto->nome }}</h1>
<img src="{{$produto->caminho_imagem}}" alt="">
{{ $produto->descricao }} <br>
{{ $produto->preco }} <br>
{{ $produto->dataLancamento }}<br>
{{ $produto->Fornecedor->nome }}<br>
<a href="{{ route('update_produto', ['id' => $produto->id]) }}" class="btn btn-warning">Alterar</a><br>
<a href="#" onclick="excluir({{ $produto->id }})" class="btn btn-danger">Excluir</a>


<script>
    function excluir(id){
        if(confirm(`Desaja realmente excluir o produto  ${id}? Essa ação é irreversivel!`)){
            location.href = route('delete_Produto', {'id':id});
        }
    }
</script>

@endsection
