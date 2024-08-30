<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Empresa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class emp2 extends Model

{
    use HasFactory, Notifiable;

    protected $table ='emp2';

    protected $fillable=[
        'razao',
        'fantasia',
        'cnpj',
        'endereco',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'cep',
        'uf',
        'fone1',
        'fone2',
        'plano',
        'qtdeadm',
        'qtdeoper',
        'id_emp1',
    ];


    // // o filho pode acessar o pai
    // public function emp1()
    //     {
    //         return $this ->belongsTo(emp1::class);
    //     }


}


