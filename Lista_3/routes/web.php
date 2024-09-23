<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ListaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', [FormController::class, 'mostrarForm']);

Route::post('/processarForm', [FormController::class, 
                'receberValor']);

Route::get('/exer1', [ListaController::class, 'mostrarExer1']);
Route::post('/respostaexer1', [ListaController::class, 'calcularExer1']);

Route::get('/exer2', [ListaController::class, 'mostrarExer2']);
Route::post('/respostaexer2', [ListaController::class, 'calcularExer2']);

Route::get('/exer3', [ListaController::class, 'mostrarExer3']);
Route::post('/respostaexer3', [ListaController::class, 'calcularExer3']);

Route::get('/exer4', [ListaController::class, 'mostrarExer4']);
Route::post('/respostaexer4', [ListaController::class, 'calcularExer4']);

Route::get('/exer5', [ListaController::class, 'mostrarExer5']);
Route::post('/respostaexer5', [ListaController::class, 'calcularExer5']);

Route::get('/exer6', [ListaController::class, 'mostrarExer6']);
Route::post('/respostaexer6', [ListaController::class, 'calcularExer6']);

Route::get('/exer7', [ListaController::class, 'mostrarExer7']);
Route::post('/respostaexer7', [ListaController::class, 'calcularExer7']);
