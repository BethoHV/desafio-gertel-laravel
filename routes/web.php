<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ListagemController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', [FormController::class, 'showForm']);
Route::get('/listagem', [ListagemController::class, 'showListagem']);
Route::post('/cliente', [ClienteController::class, 'store']);

