<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/login', [UsuarioController::class, 'loginView']);

Route::get('/home', [UsuarioController::class, 'homeView']);

Route::get('/cadastro', [UsuarioController::class, 'cadastroView']);

Route::get('/meuslivros', [UsuarioController::class, 'meuslivrosView']);


Route::get('/minhaconta', [UsuarioController::class, 'minhacontaView']);


Route::get('/resultadoslivros', [UsuarioController::class, 'resultadoslivrosView']);


Route::get('/inflivro', [UsuarioController::class, 'inflivroView']);




// As views ficam na pasta resourcer/views
// Todas as views vão ter a extenção .blade.php


