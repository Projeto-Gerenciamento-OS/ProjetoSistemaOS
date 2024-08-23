<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Os1 extends Model
{
    use HasFactory;

    protected $table ='os1';

    protected $fillable=[ 'id_status', 'dataCadastrada', 'dhi', 'dhf', 'valorTotal', 'custoTotal'];
}
