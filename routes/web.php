<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdutoController;

Route::get('/', [DashboardController::class, 'index']);

Route::resource(
    'produtos',
    ProdutoController::class
);
