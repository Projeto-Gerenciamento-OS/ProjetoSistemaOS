<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Os4 extends Model
{
    use HasFactory;

    protected $table ='os4';

    protected $fillable=[
        'descricao',
        'percentual', 
        'valor', 
        'ativo', 
        'id_emp2',
    ];

    public function os1()
    {
        return $this->belongsTo(Os1::class, 'id_os1');
    }
}
