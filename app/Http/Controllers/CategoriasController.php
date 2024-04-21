<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriasController extends Controller
{
    public function index(Request $request)
    {
         $cursos = Categoria::catcursos();
        // dd($cursos);
        return view('home.index',[
                'cursos' => $cursos,
        ]);
    }
}
