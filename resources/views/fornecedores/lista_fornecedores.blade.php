@extends('dashboard')

@section('formulario')
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Fornecedor</th>
            <th>Telefone</th>
            <th>CNPJ</th>
            <th>E=mail</th>
            <th>Produtos</th>    
            <th>Operações</th>
        </tr>
    </thead>
    <tbody>

    @foreach($fornecedor as $f)
    <tr>
        <td>{{ $f->id }}</td>
        <td>{{ $f->nome }}</td>
        <td>{{ $f->telefone }}</td>
        <td>{{ $f->cnpj }}</td>
        <td>{{ $f->email}}</td>
       
    </tr>
    @endforeach
    </tbody>
</table>
