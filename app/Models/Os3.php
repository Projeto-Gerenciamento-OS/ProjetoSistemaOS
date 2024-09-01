<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Os3 extends Model
{
    use HasFactory;

    protected $table ='os3';

    protected $fillable=[ 
      
        'id_emp2',
        'id_os1',
        'id_materiais',
        'qtde',
        'vunit',
        'vtotal', 
        'cunit',
        'ctotal', 

        ];
}
