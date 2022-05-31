@extends('dashboard')

@section('formulario')

<h1>Novo Fornecedor</h1>
<form action="{{ route('add_fornecedor') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" required><br>

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" required><br>

        <label for="cnpj">CNPJ</label>
        <input type="text" name="cnpj" id="cnpj" required><br>

        <label for="email">E-mail</label>
        <input type="text" name="email" id="email" required><br>

        <!--<label for="arquivo">Arquivo</label>
        <input type="file" name="arquivo" id="arquivo">
        -->
        <input type="submit" value="Enviar">
</form>

@endsection

