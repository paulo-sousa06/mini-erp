@extends('layouts.app')


@section('title', 'Dashboard')


@section('content')


<h1>
    Dashboard
</h1>


<div class="cards">


    <div class="card">

        <h3>
            Produtos
        </h3>

        <p>
            {{ $dados['produtos'] }}
        </p>

    </div>



    <div class="card">

        <h3>
            Clientes
        </h3>

        <p>
            {{ $dados['clientes'] }}
        </p>

    </div>




    <div class="card">

        <h3>
            Pedidos
        </h3>

        <p>
            {{ $dados['pedidos'] }}
        </p>

    </div>




    <div class="card">

        <h3>
            Faturamento
        </h3>

        <p>
            R$ {{ number_format($dados['faturamento'], 2, ',', '.') }}
        </p>

    </div>


</div>

<div class="dashboard-grid">


    <div class="box">


        <h2>
            Últimos pedidos
        </h2>


        <table>

            <thead>

                <tr>

                    <th>Cliente</th>

                    <th>Produto</th>

                    <th>Valor</th>

                </tr>

            </thead>


            <tbody>


                @foreach($pedidos as $pedido)


                <tr>

                    <td>
                    {{ $pedido['cliente'] }}
                    </td>


                    <td>
                    {{ $pedido['produto'] }}
                    </td>


                    <td>
                    R$ {{ number_format($pedido['valor'],2,',','.') }}
                    </td>


                </tr>


                @endforeach


            </tbody>


        </table>

        <div class="box">


            <h2>
            Estoque baixo
            </h2>


            <table>


                <thead>

                    <tr>

                        <th>Produto</th>

                        <th>Quantidade</th>

                    </tr>

                </thead>


                <tbody>


                    @foreach($estoque as $item)


                    <tr>

                        <td>
                        {{ $item['produto'] }}
                        </td>


                        <td>
                        {{ $item['quantidade'] }}
                        </td>


                    </tr>


                    @endforeach


                </tbody>


            </table>


        </div>


    </div>


</div>


@endsection
