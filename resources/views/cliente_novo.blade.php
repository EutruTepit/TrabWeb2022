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
<form method="post" action="{{ route('clientes_novo') }}">
    @csrf
    <label>Nome</label>
    <input type="text" name="nome"><br>
    <label>CPF</label>
    <input type="text" name="cpf"><br>
    <label>RG</label>
    <input type="text" name="rg"><br>
    <label>Data de Nascimento</label>
    <input type="date" name="data_nasc"><br>
    <label>Telefone</label>
    <input type="text" name="telefone"><br>
    <label>ENDEREÇO</label>
    <input type="text" name="endereco"><br>

    <input type="submit" value="Enviar">
</form>

    @endsection
</body>


