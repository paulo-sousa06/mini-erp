@extends('layouts.app')


@section('title', 'Editar Produto')


@section('content')


<h1>
Editar Produto
</h1>



<form action="{{ route('produtos.update',$produto->id) }}" method="POST">


    @csrf

    @method('PUT')


    <label>
    Nome
    </label>

    <br>

    <input
    type="text"
    name="nome"
    value="{{ $produto->nome }}"
    >


    <br><br>


    <label>
    Descrição
    </label>

    <br>

    <textarea name="descricao">{{ $produto->descricao }}</textarea>


    <br><br>


    <label>
    Preço
    </label>

    <br>

    <input
    type="number"
    step="0.01"
    name="preco"
    value="{{ $produto->preco }}"
    >


    <br><br>


    <label>
    Estoque
    </label>

    <br>

    <input
    type="number"
    name="estoque"
    value="{{ $produto->estoque }}"
    >


    <br><br>


    <button type="submit">
    Atualizar
    </button>


</form>


@endsection
