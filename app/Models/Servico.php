<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;

    protected $table ='servico';

    protected $fillable=['nome', 
                        'tempo', 
                        'valor', 
                        'obs', 
                        'intervalo', 
                        'recorrente',
                        'custo',
                        'intervalo','id_emp2','id_os3','id_users_servico'];
}
