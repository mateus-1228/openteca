<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/login', [UsuarioController::class, 'loginView']);
Route::get('/admin', [UsuarioController::class, 'adminView']);
Route::get('/home', [UsuarioController::class, 'homeView']);
Route::get('/cadastro', [UsuarioController::class, 'cadastroView']);
Route::get('/meuslivros', [UsuarioController::class, 'meuslivrosView']);
Route::get('/minhaconta', [UsuarioController::class, 'minhacontaView']);
Route::get('/resultadoslivros', [UsuarioController::class, 'resultadoslivrosView']);
Route::get('/inflivros', [UsuarioController::class, 'inflivrosView']);


Route::get('/admin', function () {
    return view('admin');
});


Route::get('/home', function () {
    return view('home');
});


Route::get('/login', function () {
    return view('login');
});


Route::get('/cadastro', function () {
    return view('cadastro');
});


Route::get('/meuslivros', function () {
    return view('meuslivros');
});

Route::get('/minhaconta', function () {
    return view('minhaconta');
});


Route::get('/resultadoslivros', function () {
    return view('resultadoslivros');
});


Route::get('/inflivros', function () {
    return view('inflivros');
});
