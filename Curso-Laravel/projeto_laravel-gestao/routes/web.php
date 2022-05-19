<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\FornecedoresController;
use App\Http\Controllers\ProdutosController;

use App\Http\Controllers\TesteController;

Route::get('/', [PrincipalController::class, 'principal'])->name('web.index');
Route::get('/contato', [ContatoController::class, 'contato'])->name('web.contato');
Route::get('/sobre', [SobreController::class, 'sobre'])->name('web.sobre');
/* Route::get('/sobre/{nome}/{idade}/{sexo}', [SobreController::class, 'sobre_info'])->name('route.sobre'); */
Route::get('/login', [LoginController::class, 'login'])->name('web.login');


/* ========= AGRUPAMENTO DE ROTAS ======= */
Route::prefix('/private')->group(function(){
    Route::get('/clientes', [ClientesController::class, 'clientes'])->name('private.clientes');
    Route::get('/fornecedores', [FornecedoresController::class, 'fornecedores'])->name('private.fornecedores');
    Route::get('/produtos', [ProdutosController::class, 'produtos'])->name('private.produtos');
});

/* ========== REDIRECIONAMENTO DE ROTAS ============== */
Route::get('/rota1', function(){
    echo 'Essa é a rota 1';
})->name('web.rota1');

Route::get('/rota2', function(){
    return redirect()->route('web.rota1');
})->name('web.rota2');
/* Route::redirect('/rota2', '/rota1'); */

/* ========== ROTA DE FALLBACK / CONTIGÊNCIA ============== */
Route::fallback(function(){
    echo 'A rota acessada não existe. <a href="'.route('web.index').'">Clique aqui</a> para voltar a página principal.';
});

/* =========== ENVIAR PARÂMETROS DA ROTA PARA CONTROLADOR ============ */
Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('web.teste');



/*
    Principais métodos Route HTTP: get / post / put / patch / delete / options

     Route::get($uri = caminho rota, $callback = ação tomada);   
 */