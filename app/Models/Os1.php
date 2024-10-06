<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Os1 extends Model
{
    use HasFactory;

    protected $table = 'os1';

    protected $fillable = [
        'id_emp2',
        'id_status',
        'id_users',
        'datacad',
        'vtotal',
        'ctotal',
        'cindireto',
        'vresultado',
    ];

    public function os2()
    {
        return $this->hasMany(Os2::class, 'id_os1');
    }

    public function os3()
    {
        return $this->hasMany(Os3::class, 'id_os1');
    }

    public function os4()
    {
        return $this->hasMany(Os4::class, 'id_emp2');
    }
}