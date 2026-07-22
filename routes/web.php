<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ClienteController;

Route::get('/', [DashboardController::class, 'index']);

Route::resource('produtos',ProdutoController::class);

Route::resource('clientes', ClienteController::class);
