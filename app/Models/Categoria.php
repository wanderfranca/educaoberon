<?php

namespace App\Models;

use App\Models\Materia;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = ["nome_categoria"];
    public $timestamps = true;

    public function cursos()
    {
        return $this->hasMany(Curso::class, 'categoria_id', 'id');
    }

    protected static function catcursos()
    {
         return DB::table('cursos')
        ->SELECT(DB::raw('count(*) as qtd_cursos, nome_categoria, categoria_id'))
        ->join('categorias', 'categorias.id', '=', 'cursos.categoria_id')
        ->groupBy('nome_categoria', 'categoria_id')
        ->paginate(15);
    }


}
