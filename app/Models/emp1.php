<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emp1 extends Model
{

    use HasFactory;

    //proteger a tabela para não deixar no plural
    protected $table = 'emp1';

    protected $primarykey ='id_emp1';

    protected $fillable = ['descricao'];

    // //um pai pode ter varios filhos
    // public function emp2()
    // {
    //     //cardinalidades
    //     return $this->hasMany(emp2::class);
    // }

}
