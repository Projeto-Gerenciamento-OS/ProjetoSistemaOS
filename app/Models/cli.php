<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cli extends Model
{
    use HasFactory;


    //proteger a tabela para não deixar no plural
    protected $table = 'cli';

    protected $fillable=[
        'tipo',
        'cpf_cnpj',
        'razao',
        'fantasia',
        'endereco',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'uf',
        'email',
        'cep',
        'fone1',
        'fone2',
        'obs',
        'id_emp2',
        'id_users',
    ];
}


        


