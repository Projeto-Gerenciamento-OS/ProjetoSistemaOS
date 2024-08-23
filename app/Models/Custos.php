<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custos extends Model
{
    use HasFactory;

    protected $table ='custos';

    protected $fillable=['id_emp1', 'id_emp2', 'percentual', 'descricao'];
}
