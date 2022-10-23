<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\UserController;


//ACESSO PRIVADO

Route::get('/private-login', [UserController::class, 'index'])->name('home.login');

Route::post('/login', [UserController::class, 'auth'])->name('login');




//ACESSO PÚBLICO

Route::get('/',function () {
    return view('home');
});

Route::get('/sobre-nos', function () {
    return view('sites.agencia');
});

// FORMULÁRIO - ENTRAR EM CONTATO VIA EMAIL //
Route::resource('/entrar-em-contato', ContatoController::class);

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

