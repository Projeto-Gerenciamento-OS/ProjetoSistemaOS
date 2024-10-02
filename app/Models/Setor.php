<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    use HasFactory;

    protected $table = 'setor';

    protected $fillable = [
        'descricao',
        'id_emp2',
        'id_users',
    
        ];
    
}
