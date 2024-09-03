<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custos extends Model
{
    use HasFactory;

    protected $table = 'custo_geral';

    protected $fillable = [
        'descricao',
        'percentual',
        'id_emp2',
        'id_users',
        ];
}
