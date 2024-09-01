<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Os1 extends Model
{
    use HasFactory;

    protected $table ='os1';

    protected $fillable=[  
        'id_emp2',
        'id_status',
        'id_users',
        'datacad', 
        'dhi', 
        'dhf', 
        'obs',
        'vtotal', 
        'ctotal',
        'cindireto',
        'vresultado',
        ];
}
