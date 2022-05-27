@extends('template')

@section('conteudo')

<h1>Atualizar Produto {{ $produto->nome }}</h1>
<form action="{{ route('add_produto') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $cliente->id }}">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" required value="{{ $produto->nome }}"><br>

        <label for="descricao">Descrição</label>
        <input type="text" name="nome" id="descricao" required value="{{ $produto->descrocao }}"><br>

        <label for="preco">Preço (R$)</label>
        <input type="text" name="nome" id="preco" required value="{{ $produto->preco }}"><br>

        <label for="dataLancamento">Data de lançamento</label>
        <input type="text" name="nome" id="dataLancamento" required value="{{ $produto->dataLancamento }}"><br>

        <label for="fornecedor_id" class="form-label">Fornecedor</label>
        <select class="form-select" name="fornecedor_id" id="fornecedor_id" required>
            @foreach ($fornecedores as $f)
                <option value="{{ $f->id }}" {{ $produto->fornecedor_id == $f->id ? 'selected' : '' }}>{{ $f->nome }}</option>
            @endforeach
        </select><br>

        <!--<label for="arquivo">Arquivo</label>
        <input type="file" name="arquivo" id="arquivo">
        -->
        <input type="submit" value="Enviar">
</form>

@endsection

