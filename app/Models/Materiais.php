<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiais extends Model
{
    use HasFactory;

    protected $table ='materiais';

    protected $fillable=[ 
        'id_emp2',
        'id_users',
        'descricao', 
        'unidade', 
        'custo', 
        'valor',
        
        ];
}
