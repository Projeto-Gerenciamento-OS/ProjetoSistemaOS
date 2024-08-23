<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Os3 extends Model
{
    use HasFactory;

    protected $table ='os3';

    protected $fillable=[ 'id_os1_os3','id_emp1_os3' ,'id_emp2_os3', 'id_material','valorUnitario_os3', 
                        'valorTotal_os3', 'custoTotal_os3'];
}
