<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cli extends Model
{
    use HasFactory;


    //proteger a tabela para não deixar no plural
    protected $table = 'cli';

    protected $fillable = ['tipo','cpf_cnpj','razao','fantasia','cep','endereco','numero','complemento','bairro','cidade','uf','fone1','fone2','obs'];
}




