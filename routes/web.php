<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\QuestoesController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\DisciplinasController;


// Route::get('/', function () {
//     return view('home.index');
// });

Route::get('/',[ CategoriasController::class, 'index'])->name('home.index');
Route::get('home',[ CategoriasController::class, 'index'])->name('home.index');
Route::get('/categoria/{categoria}/cursos',[ CursosController::class, 'index'])->name('cursos.index');


Route::get('/cursos/{id}/disciplinas', [CursosController::class, 'showDisciplinas'])->name('cursos.disciplinas');
Route::get('/cursos/{curso}/disciplinas',[ DisciplinasController::class, 'index'])->name('disciplinas.index');
Route::get('/disciplinas/{id}/questoes', [DisciplinasController::class, 'showQuestoes'])->name('disciplinas.questoes');
