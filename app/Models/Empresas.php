<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    use HasFactory;

    //proteger a tabela para não deixar no plural
    protected $table = 'empresas';

    protected $fillable = ['descricao'];

    //um pai pode ter varios filhos
    public function empresa()
    {
        //cardinalidades
        return $this->hasMany(Empresa::class);
    }

}
