<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Disciplina;
use Illuminate\Http\Request;

class DisciplinasController extends Controller
{
    public function index(Curso $curso)
    {
        $disciplinas = Disciplina::catquestoes();

        return view("disciplinas.index", ['disciplinas' => $disciplinas]);

    }


}
