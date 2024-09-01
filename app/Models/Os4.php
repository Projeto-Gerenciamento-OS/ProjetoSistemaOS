<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Os4 extends Model
{
    use HasFactory;

    protected $table ='os4';

    protected $fillable=[
        'id_emp2',
        'descricao', 
        'percentual', 
        'valor', 
        'ativo',
        ];
}
