<?php

use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;

// Route::get('/', function () {
//     // return view('welcome');
//     return "Hello World";
// });

//rota principal
Route::get('/', [PrincipalController::class, 'principal']);

//rota sobre-nos
Route::get('/sobre', [SobreNosController::class, 'sobre']);

//rota contato
Route::get('/contato', [ContatoController::class, 'contato']);