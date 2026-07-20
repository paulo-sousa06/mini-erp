<?php

namespace App\Http\Controllers;

use App\Models\Produto;

class DashboardController extends Controller
{
    public function index()
    {

        $dados = [

            'produtos' => Produto::count(),

            'clientes' => 0,

            'pedidos' => 0,

            'faturamento' => 0

        ];


        $pedidos = [

            [
                'cliente' => 'João Silva',
                'produto' => 'Notebook Dell',
                'valor' => 3500
            ],

            [
                'cliente' => 'Maria Souza',
                'produto' => 'Monitor LG',
                'valor' => 900
            ],

            [
                'cliente' => 'Carlos Santos',
                'produto' => 'Teclado Mecânico',
                'valor' => 250
            ]

        ];


        $estoque = [

            [
                'produto' => 'Mouse Gamer',
                'quantidade' => 3
            ],

            [
                'produto' => 'Headset',
                'quantidade' => 5
            ],

            [
                'produto' => 'Webcam',
                'quantidade' => 2
            ]

        ];


        return view('dashboard', compact(
            'dados',
            'pedidos',
            'estoque'
        ));

    }
}
