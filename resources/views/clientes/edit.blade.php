@extends('layouts.app')

@section('title', 'Editar Cliente')

@section('content')

<h1>Editar Cliente</h1>

<form action="{{ route('clientes.update', $cliente->id) }}" method="POST">

    @method('PUT')

    @include('clientes._form')

</form>

@endsection
