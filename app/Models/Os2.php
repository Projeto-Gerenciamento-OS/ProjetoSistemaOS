<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Os2 extends Model
{
    use HasFactory;

    protected $table ='os2';

    protected $fillable=[ 'id_servico','id_emp1','qtde', 'vunit', 'vtotal', 
                        'cunit', 'ctotal', 'id_emp2','id_os2', 'id_servico', 'id_colaborador'];
}
