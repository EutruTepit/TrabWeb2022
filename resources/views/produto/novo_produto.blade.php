@extends('dashboard')

@section('formulario')

<h1>Novo Produto</h1>
<form action="{{ route('add_produto') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" required><br>

        <label for="descricao">Descrição</label>
        <input type="text" name="descricao" id="descricao" required><br>

        <label for="preco">Preço (R$)</label>
        <input type="text" name="preco" id="preco" required><br>

        <label for="dataLancamento">Data de lançamento</label>
        <input type="date" name="dataLancamento" id="dataLancamento" required><br>

        <label for="fornecedor_id" class="form-label">Fornecedor</label>
        <select class="form-select" name="idFornecedor" id="idFornecedor" required>
            @foreach ($fornecedores as $f)
                <option value="{{ $f->id }}">{{ $f->nome }}</option>
            @endforeach
        </select><br>

        <label for="arquivo">Arquivo</label>
        <input type="file" name="arquivo" id="arquivo">
        <input type="submit" value="Enviar">
</form>

@endsection

