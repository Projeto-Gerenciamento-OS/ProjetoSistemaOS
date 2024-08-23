<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Empresa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class Empresa extends Model

{
    use HasFactory, Notifiable;

    protected $table ='empresa';

    protected $fillable=['empresa1_id','cnpj','razao','fantasia','cep','logradouro','numero','bairro','cidade','uf','fone1','fone2','plano','qtdadm','qtdoper'];


    // o filho pode acessar o pai
    public function empresa1()
        {
            return $this ->belongsTo(Empresa1::class);
        }


}


