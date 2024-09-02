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
                'id_emp2' =>1,
                
            ]);

             //Atribuir o papel para o usuario
             $superAdmin->assignRole('Super Admin');
        }

        
        if (!User::where('email', 'admin@gmail.com')->first()) {
            $admin=User::create([
                'nome' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456', ['rounds' => 12]),
                'tipo' => 1,
                'id_emp2'=>1,  
               
            ]);
                //Atribuir o papel para o usuario
                $admin->assignRole('Admin');
        }

        
        if (!User::where('email', 'colaborador@gmail.com')->first()) {
            $colaborador =User::create([
                'nome' => 'Colaborador',
                'email' => 'colaborador@gmail.com',
                'password' => Hash::make('123456', ['rounds' => 12]),
                'tipo' => 1,
                'id_emp2'=>1,  
               
            ]);
            //Atribuir o papel para o usuario
            $colaborador->assignRole('Colaborador');
        } 
        
    }
}
