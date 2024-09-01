<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void {

        if (!User::where('email', 'welltecnic@gmail.com')->first()) {
            $superAdmin= User::create([
                'nome' => 'Wellington',
                'email' => 'welltecnic@gmail.com',
                'password' => Hash::make('123456', ['rounds' => 12]),
                'tipo' => 1,  
                'nivel' =>1,
                'id_emp2' =>1,
                
            ]);

             //Atribuir o papel para o usuario
            $superAdmin->assignRole('Super Admin');
        }

        if (!User::where('email', 'gustavo@gmail.com')->first()) {
            $superAdmin= User::create([
                'nome' => 'guss',
                'email' => 'gustavo@gmail.com',
                'password' => Hash::make('gustavo@gmail.com', ['rounds' => 12]),
                'tipo' => 1,  
                'nivel' =>1,
                'id_emp2' =>1,
                
            ]);

             //Atribuir o papel para o usuario
            $superAdmin->assignRole('Super Admin');
        }

        
    }
}
