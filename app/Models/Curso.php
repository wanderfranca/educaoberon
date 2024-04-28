<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $fillable = ['nome_curso', 'categoria_id'];
    public $timestamps = true;

    public function disciplinas()
    {
        return $this->hasMany(Disciplina::class, 'curso_id', 'id');
    }

}
