<?php

use App\Http\Controllers\ComunaController;
use Illuminate\Database\Query\IndexHint;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/comuna', [ComunaController::class, 'index']);

