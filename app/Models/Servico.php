<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;

    protected $table ='servico';

    protected $fillable=[
        'nome',
        'tempo',
        'valor', 
        'custo', 
        'obs', 
        'recorrente',
        'intervalo', 
        'id_emp2',
        'id_os1',     
        'id_users',     
        ];
}
