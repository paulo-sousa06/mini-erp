@extends('layouts.app')

@section('title', 'Cadastrar Cliente')

@section('content')

<h1>Cadastrar Cliente</h1>

<form action="{{ route('clientes.store') }}" method="POST">

    @include('clientes._form')

</form>

@endsection
