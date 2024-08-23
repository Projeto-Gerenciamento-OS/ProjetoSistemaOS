<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicos extends Model
{
    use HasFactory;

    protected $table ='servicos';

    protected $fillable=['nome', 'tempo', 'custo_recorente', 'valor', 'intervalo', 'descricao'];
}
