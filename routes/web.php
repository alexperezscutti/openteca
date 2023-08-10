<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/', [UsuarioController::class, 'loginView']);

Route::get('/home', [UsuarioController::class, 'homeView']);

Route::get('/cadastro', [UsuarioController::class, 'cadastroView']);

Route::post('/login', [UsuarioController::class, 'login']);

Route::get('/meuslivros', [UsuarioController::class, 'meuslivrosView']);


Route::get('/minhaconta', [UsuarioController::class, 'minhacontaView']);


Route::get('/resultadoslivros', [UsuarioController::class, 'resultadoslivrosView']);


Route::get('/cadastrodelivro', [UsuarioController::class, 'cadastrodelivroView']);

Route::get('/exclusaodelivro', [UsuarioController::class, 'exclusaodelivroView']);





// As views ficam na pasta resourcer/views
// Todas as views vão ter a extenção .blade.php
