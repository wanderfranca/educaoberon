<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Categoria;
use App\Models\Disciplina;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index(Categoria $categoria)
    {
        $cursos = $categoria->cursos()->paginate(15);

        return view("cursos.index")->with('cursos', $cursos)
                                            ->with('categoria', $categoria);
    }

    public function showDisciplinas($id)
    {
        $curso = Curso::findOrFail($id);

        $disciplinas = Disciplina::where('curso_id', $id)->withCount('questoes')->paginate(15);

        return view('cursos.disciplinas', compact('curso', 'disciplinas'));
    }
}
