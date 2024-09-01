<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    //chamando as notificações e as regras de permissões
    use HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'nome',
        'email',
        'password',
        'tipo',
        'nivel',
        'id_emp2'        
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed', // hashed - é um tipo de criptografia
        ];
    }
}
