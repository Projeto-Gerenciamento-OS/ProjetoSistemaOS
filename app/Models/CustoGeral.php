<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustoGeral extends Model
{
    use HasFactory;

    protected $table = 'setor';

    protected $fillable = [
        'id_users',
        'id_emp2',
        'descricao',
        'percentual',
       
        ];
}
