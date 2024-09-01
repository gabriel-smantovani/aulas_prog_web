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


//navegacao
Route::get('/navegacao', [ListaController::class, 'mostrarNavegacao']);


//ex1
Route::get('/exer1', [ListaController::class, 'mostrarExer1']);


Route::post('/respostaExer1', [ListaController::class,
                'somar']);


//ex2
Route::get('/exer2', [ListaController::class, 'mostrarExer2']);


Route::post('/respostaExer2', [ListaController::class,
                'subtrair']);


//ex3
Route::get('/exer3', [ListaController::class, 'mostrarExer3']);


Route::post('/respostaExer3', [ListaController::class,
                'multiplicar']);


//ex4
Route::get('/exer4', [ListaController::class, 'mostrarExer4']);


Route::post('/respostaExer4', [ListaController::class,
                'dividir']);


//ex5
Route::get('/exer5', [ListaController::class, 'mostrarExer5']);


Route::post('/respostaExer5', [ListaController::class,
                'calcularMediaAritimetica']);


//ex6
Route::get('/exer6', [ListaController::class, 'mostrarExer6']);


Route::post('/respostaExer6', [ListaController::class,
                'converterCelsiusPFahrenheit']);


//ex7
Route::get('/exer7', [ListaController::class, 'mostrarExer7']);


Route::post('/respostaExer7', [ListaController::class,
                'converterFahrenheitPCelsius']);


//ex8
Route::get('/exer8', [ListaController::class, 'mostrarExer8']);


Route::post('/respostaExer8', [ListaController::class,
                'calcularAreaRetangulo']);


//ex9
Route::get('/exer9', [ListaController::class, 'mostrarExer9']);


Route::post('/respostaExer9', [ListaController::class,
                'calcularAreaCirculo']);


//ex10
Route::get('/exer10', [ListaController::class, 'mostrarExer10']);


Route::post('/respostaExer10', [ListaController::class,
                'calcularPerimetroRetangulo']);


//ex11
Route::get('/exer11', [ListaController::class, 'mostrarExer11']);


Route::post('/respostaExer11', [ListaController::class,
                'calcularPerimetroCirculo']);


//ex12
Route::get('/exer12', [ListaController::class, 'mostrarExer12']);


Route::post('/respostaExer12', [ListaController::class,
                'potencializar']);


//ex13
Route::get('/exer13', [ListaController::class, 'mostrarExer13']);


Route::post('/respostaExer13', [ListaController::class,
                'converterMetrosPCentimetros']);


//ex14
Route::get('/exer14', [ListaController::class, 'mostrarExer14']);


Route::post('/respostaExer14', [ListaController::class,
                'converterKmPMilha']);


//ex15
Route::get('/exer15', [ListaController::class, 'mostrarExer15']);


Route::post('/respostaExer15', [ListaController::class,
                'calcularIMC']);


//ex16
Route::get('/exer16', [ListaController::class, 'mostrarExer16']);


Route::post('/respostaExer16', [ListaController::class,
                'calcularPrecoCDesconto']);


//ex17
Route::get('/exer17', [ListaController::class, 'mostrarExer17']);


Route::post('/respostaExer17', [ListaController::class,
                'calcularJurosSimples']);


//ex18
Route::get('/exer18', [ListaController::class, 'mostrarExer18']);


Route::post('/respostaExer18', [ListaController::class,
                'calcularJurosComposto']);


//ex19
Route::get('/exer19', [ListaController::class, 'mostrarExer19']);


Route::post('/respostaExer19', [ListaController::class,
                'converterDiasHoraMinutoSegundo']);


//ex20
Route::get('/exer20', [ListaController::class, 'mostrarExer20']);


Route::post('/respostaExer20', [ListaController::class,
                'calcularVelocidade']);