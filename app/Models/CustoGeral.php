<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustoGeral extends Model
{
    use HasFactory;

    protected $table = 'setor';

    protected $fillable = ['descricao','percentual','id_emp2','id_users'];
}
