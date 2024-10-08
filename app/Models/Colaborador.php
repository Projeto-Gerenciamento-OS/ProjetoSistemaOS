<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    use HasFactory;


     //proteger a tabela para não deixar no plural
    protected $table = 'colaborador';

    protected $fillable = [
        'nome',
        'fone',
        'id_emp2',
        'id_users',
        'id_turno',
        'id_setor'
    ];

    //um pai pode ter varios filhos
    public function empresa()
    {
        //cardinalidades
        return $this->hasMany(Empresa::class);
    }
}
