<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Os2 extends Model
{
    use HasFactory;

    protected $table ='os2';

    protected $fillable=[ 'id_servico','id_emp1_os2','id_emp2_os2', 'id_colaborador', 'quantidade_os2', 
                        'valorUnitario_os2', 'valorTotal_os2', 'custoTotal_os2'];
}
