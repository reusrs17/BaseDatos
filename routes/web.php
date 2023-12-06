<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('cursos', App\Http\Controllers\CursoController::class);
Route::resource('estudiantes', App\Http\Controllers\EstudianteController::class);
Route::resource('grados', App\Http\Controllers\GradoController::class);
Route::resource('grupos', App\Http\Controllers\GrupoController::class);
Route::resource('profesores', App\Http\Controllers\ProfesoreController::class);
Route::resource('usuarios', App\Http\Controllers\UsuariossController::class);