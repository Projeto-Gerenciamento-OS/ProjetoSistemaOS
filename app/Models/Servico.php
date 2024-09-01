<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicos extends Model
{
    use HasFactory;

    protected $table ='servico';

    protected $fillable=[
        'id_emp2',
        'id_users',
        'nome', 
        'tempo', 
        'valor', 
        'custo',
        'obs', 
        'recorrente',
        'intervalo',     
        ];
}
