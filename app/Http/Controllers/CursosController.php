<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index(Categoria $categoria)
    {
        $cursos = $categoria->cursos()->paginate(15);

        return view("cursos.index")->with('cursos', $cursos)
                                            ->with('categoria', $categoria);
    }
}
