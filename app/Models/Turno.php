<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    use HasFactory;

    //proteger a tabela para não deixar no plural
    protected $table = 'turno';

    protected $fillable = [
        'id_emp2',
        'id_users',
        'nome',
        'inicio',
        'pausa',
        'retorno',
        'termino',
        
        ];
}

