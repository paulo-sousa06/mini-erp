@extends('layouts.app')


@section('title', 'Cadastrar Produto')


@section('content')


<h1>
Cadastrar Produto
</h1>



<form action="{{ route('produtos.store') }}" method="POST">

    @csrf


    <label>
    Nome
    </label>

    <br>

    <input type="text" name="nome">


    <br><br>


    <label>
    Descrição
    </label>

    <br>

    <textarea name="descricao"></textarea>


    <br><br>


    <label>
    Preço
    </label>

    <br>

    <input type="number" step="0.01" name="preco">


    <br><br>


    <label>
    Estoque
    </label>

    <br>

    <input type="number" name="estoque">


    <br><br>


    <button type="submit">
    Salvar
    </button>


</form>


@endsection
