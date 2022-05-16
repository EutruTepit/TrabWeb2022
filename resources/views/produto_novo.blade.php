@extends('template')


@section('categoria')

    <div class="categoria">
        Test
    </div>


@endsection
@section('conteudo')
    <div class="borda_superior">
        <h1>Hello</h1>
    </div>

<h1>Novo cliente</h1>
<form action="{{route('produtos_salvar')}}" method="POST" enctype="multipart/form-data">
    <h1>Novo produto</h1>
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome"><br>

        <label for="descricao">Descrição</label>
        <input type="text" name="nome" id="descricao"><br>

        <label for="preco">Preço</label>
        <input type="text" name="nome" id="preco"><br>

        <label for="dataLancamento">Data de lançamento</label>
        <input type="text" name="nome" id="dataLancamento"><br>

        <label for="arquivo">Arquivo</label>
        <input type="file" name="arquivo" id="arquivo">

        <input type="submit" value="Enviar">
</form>

@endsection

