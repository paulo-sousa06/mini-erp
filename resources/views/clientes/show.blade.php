@extends('layouts.app')

@section('title', 'Detalhes do Cliente')

@section('content')

<h1>Detalhes do Cliente</h1>

<p><strong>Nome:</strong> {{ $cliente->nome }}</p>

<p><strong>CPF:</strong> {{ $cliente->cpf }}</p>

<p><strong>E-mail:</strong> {{ $cliente->email }}</p>

<p><strong>Telefone:</strong> {{ $cliente->telefone }}</p>

<p><strong>Endereço:</strong> {{ $cliente->endereco }}</p>

<br>

<a href="{{ route('clientes.index') }}">
    Voltar
</a>

@endsection
