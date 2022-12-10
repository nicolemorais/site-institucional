<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\UserController;


Route::get('/users/{id}/contact/create', [ContactController::class, 'create'])->name('contacts.create');
Route::get('/users/{user}/contact/{id}', [ContactController::class, 'edit'])->name('contacts.edit');
Route::put('/contact/{id}', [ContactController::class, 'update'])->name('contacts.update');
Route::post('/users/{id}/contact', [ContactController::class, 'store'])->name('contacts.store');
Route::get('/users/{id}/contact', [ContactController::class, 'index'])->name('contacts.index');




Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');



Route::get('/', function () {
    return view('welcome');
});
Route::get('/sobre-nos', function () {
    return view('parts.agencia');
});
Route::get('/modelos-criancas', function () {
    return view('parts.criancas');
});

Route::get('/modelo-feminino', function () {
    return view('parts.feminino');
});

Route::get('/modelo-masculino', function () {
    return view('parts.masculino');
});






