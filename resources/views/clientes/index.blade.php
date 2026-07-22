@extends('layouts.app')

@section('title', 'Clientes')

@section('content')

<div class="page-header">

    <div>

        <h1>👥 Clientes</h1>

    <span class="page-subtitle">
        Gerencie todos os clientes cadastrados.
    </span>

    </div>

    <a href="{{ route('clientes.create') }}" class="btn btn-primary">
        ➕ Novo Cliente
    </a>

</div>

@if(session('success'))

    <div class="alert alert-success">

        {{ session('success') }}

    </div>

@endif

<br><br>

<table class="table">

    <thead>

        <tr>

            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Ações</th>

        </tr>

    </thead>

    <tbody>

        @forelse($clientes as $cliente)

            <tr>

                <td>{{ $cliente->id }}</td>

                <td>{{ $cliente->nome }}</td>

                <td>{{ $cliente->cpf }}</td>

                <td>{{ $cliente->email }}</td>

                <td>{{ $cliente->telefone }}</td>

                <td>

                    <div class="actions">

                        <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-secondary">
                            👁 Visualizar
                        </a>

                        <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning">
                            ✏ Editar
                        </a>

                        <form
                            action="{{ route('clientes.destroy', $cliente->id) }}"
                            method="POST"
                            class="inline-form"
                        >

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="btn btn-danger"
                                onclick="return confirm('Deseja excluir este cliente?')"
                            >
                                🗑 Excluir
                            </button>

                        </form>

                    </div>

                </td>

            </tr>

        @empty

            <tr>

                <td colspan="6">

                    Nenhum cliente cadastrado.

                </td>

            </tr>

        @endforelse

    </tbody>

</table>

@endsection
