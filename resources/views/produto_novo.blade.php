@extends('dashboard')


@section('formulario')
<div class="container-fluid">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <h1 class="h-10 w-30 font-weight-bold">Novo Produto</h1>
            <form action="*#" method="POST" enctype="multipart/form-data">
                @csrf
                    <label for="nome" class="d-flex">Nome do produto</label>
                    <input type="text" name="nome" id="nome" class="d-flex w-100"><br>

                    <label for="descricao" class="d-flex">Descrição</label>
                    <input type="text" name="nome" id="descricao" class="d-flex w-100"><br>

                    <label for="preco" class="d-flex">Preço</label>
                    <input type="text" name="nome" id="preco" class="d-flex w-100"><br>

                    <label for="dataLancamento" class="d-flex">Data de lançamento</label>
                    <input type="text" name="nome" id="dataLancamento" class="d-flex w-100"><br>

                    <label for="arquivo" class="d-flex">Arquivo</label>
                    <input type="file" name="arquivo" id="arquivo" class="d-flex">

                    <input type="submit" value="Enviar">
            </form>
        </div>
        <div class="col-2"></div>
 
@endsection

