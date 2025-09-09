<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
});

use App\Http\Controllers\SaludoController;

Route::get('/saludo', [SaludoController::class, 'index']);

use App\Http\Controllers\SaludoJuanController;

Route::get('/saludo-juan', [SaludoJuanController::class, 'index']);

