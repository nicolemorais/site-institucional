<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


//ACESSO PRIVADO



//ACESSO PÚBLICO

Route::get('/login', [UserController::class, 'login'])->name('user.login');

Route::get('/loginCreate', [UserController::class, 'loginCreate'])->name('user.loginCreate');

Route::post('/login-create', [UserController::class, 'create'])->name('user.create');


Route::get('/',function () {
    return view('welcome');
});

Route::get('/sobre-nos', function () {
    return view('sites.agencia');
});

// FORMULÁRIO - ENTRAR EM CONTATO VIA EMAIL //
Route::get('/entrar-em-contato', function () {
    return view('sites.contato');
});

// CASTING //
Route::get('/modelo-feminino', function () {
    return view('sites.feminino');
});

Route::get('/modelo-masculino', function () {
    return view('sites.masculino');
});

Route::get('/modelos-criancas', function () {
    return view('sites.criancas');
});

