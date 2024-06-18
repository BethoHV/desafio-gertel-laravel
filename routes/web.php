<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
     return view('welcome');
});

Route::get('/form', [ClienteController::class, 'showForm']);
Route::get('/listagem', [ClienteController::class, 'showListagem']);
Route::post('/cliente', [ClienteController::class, 'store']);
Route::delete('/cliente/{id}',[ClienteController::class, 'destroy'])->middleware('auth');
Route::get('/edit/{id}',[ClienteController::class, 'edit'])->middleware('auth');
Route::put('/update/{id}',[ClienteController::class, 'update'])->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/listagem', [ClienteController::class, 'showListagem']);
});
