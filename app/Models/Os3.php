<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Os3 extends Model
{
    use HasFactory;

    protected $table ='os3';

    protected $fillable=[ 'qtde' ,'id_emp2_os3', 'vunit','vtotal', 
                        'ctotal', 'id_emp2','id_os3','id_materiais'];
}
