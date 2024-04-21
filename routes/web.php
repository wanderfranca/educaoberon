<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\DisciplinasController;


// Route::get('/', function () {
//     return view('home.index');
// });

Route::get('/',[ CategoriasController::class, 'index'])->name('home.index');
Route::get('home',[ CategoriasController::class, 'index'])->name('home.index');
Route::get('/categoria/{categoria}/cursos',[ CursosController::class, 'index'])->name('cursos.index');


Route::get('/cursos/{curso}/disciplinas',[ DisciplinasController::class, 'index'])->name('disciplinas.index');
