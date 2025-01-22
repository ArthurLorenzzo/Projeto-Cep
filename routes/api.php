<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CepController;

Route::get('/cep/{cep}', [CepController::class, 'buscarCep']);
Route::get('/cep/{estado}/{cidade}/{logradouro}', [CepController::class, 'descobrirCep']);