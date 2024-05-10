<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\welcomeController;
use App\Http\Controllers\SaludoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [welcomeController::class, 'index']);

Route::resource('/cursos', CursoController::class);

Route::resource('/estudiantes', EstudianteController::class);

Route::get('/saludo', [SaludoController::class, 'saludito']);
