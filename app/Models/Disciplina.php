<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Disciplina extends Model
{
    use HasFactory;
    public $timestamps = true;

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    protected static function catquestoes()
    {
         return DB::table('questoes')
        ->SELECT(DB::raw('count(*) as qtd_questoes, nome_disciplina, disciplina_id'))
        ->join('disciplinas', 'disciplinas.id', '=', 'questoes.disciplina_id')
        ->groupBy('nome_disciplina', 'disciplina_id')
        ->paginate(15);
    }
}
