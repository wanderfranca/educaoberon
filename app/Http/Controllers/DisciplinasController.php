<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Disciplina;
use Illuminate\Http\Request;

class DisciplinasController extends Controller
{
    public function index(Request $request)
    {
        $disciplinas = Disciplina::catquestoes();

        return view("disciplinas.index", [
                        'disciplinas' => $disciplinas
                    ]);
    }

    public function showQuestoes($id)
    {
        $disciplina = Disciplina::findOrFail($id);
        $questoes = $disciplina->questoes()->paginate(15);

        return view('disciplinas.questoes', compact('disciplina', 'questoes'));
    }


}
