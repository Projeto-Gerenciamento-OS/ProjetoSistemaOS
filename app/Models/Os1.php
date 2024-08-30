<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Os1 extends Model
{
    use HasFactory;

    protected $table ='os1';

    protected $fillable=[ 'id_users','id_status','id_emp1','id_emp2', 'datacad', 'dhi', 'dhf','obs', 'vtotal', 'ctotal','cindireto','vresultado'];
}
