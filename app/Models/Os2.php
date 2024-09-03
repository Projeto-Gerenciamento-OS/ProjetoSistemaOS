<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Os2 extends Model
{
    use HasFactory;

    protected $table ='os2';

    protected $fillable=[ 
        'qtde',
        'vunit',
        'vtotal',
        'cunit',
        'ctotal',
        'id_emp2', 
        'id_os1', 
        'id_servico', 
        'id_colaborador', 
        ];
}
