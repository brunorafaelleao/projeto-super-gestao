<?php

use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;

// Route::get('/', function () {
//     // return view('welcome');
//     return "Hello World";
// });

//rota principal nomeada seguindo um padrão
Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');

//rota sobre-nos
Route::get('/sobre', [SobreNosController::class, 'sobre'])->name('site.sobre');

//rota contato
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');

//agrupamento de rotas restritas
Route::prefix('/app')->group(function () {
  Route::get('/clientes', function () {
    return 'Clientes';
  })->name('app.clientes');
  Route::get('/fornecedores', function () {
    return 'Fornecedores';
  })->name('app.fornecedores');
  Route::get('/produtos', function () {
    return 'Produtos';
  })->name('app.produtos');
});


//rota de fallback para quando a rota não existir
Route::fallback(function () {
  echo 'A rota acessada não existe. <a href="' . route('site.index') . '">Clique aqui</a> para ir para a página inicial';
});