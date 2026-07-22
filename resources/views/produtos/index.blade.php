@extends('layouts.app')


@section('title', 'Produtos')


@section('content')


<h1>
    Produtos
</h1>


<table>

    <thead>

        <th>Ações</th>

        <tr>

            <th>
            Nome
            </th>

            <th>
            Preço
            </th>

            <th>
            Estoque
            </th>

        </tr>

    </thead>


    <tbody>


        @foreach($produtos as $produto)

        <td>
            <a href="{{ route('produtos.edit', $produto->id) }}">
            Editar
            </a>

            <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST";">
                @csrf
                @method('DELETE')

            <button type="submit" onclick="return confirm('Deseja realmente excluir este produto?')">
                Excluir
            </button>
            </form>
        </td>

        <tr>

            <td>
            {{ $produto->nome }}
            </td>


            <td>
            R$ {{ number_format($produto->preco,2,',','.') }}
            </td>


            <td>
            {{ $produto->estoque }}
            </td>


        </tr>


        @endforeach


    </tbody>

</table>


@endsection
