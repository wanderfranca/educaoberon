<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class DisciplinasController extends Controller
{
    public function index(Curso $curso)
    {
        $disciplinas = $curso->disciplinas()->paginate(15);

        return view("disciplinas.index")->with('disciplinas', $disciplinas);

    }


}
