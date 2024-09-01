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
        'id_emp1',
        'nome',
        'fone',
    ];

    //um pai pode ter varios filhos
    public function empresa()
    {
        //cardinalidades
        return $this->hasMany(Empresa::class);
    }
}
