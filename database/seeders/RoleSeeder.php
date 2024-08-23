<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        //
        if(!Role::where('name', 'Super Admin')->first()){
            Role::create([
            'name'=>'Super Admin',
          ]);
        }


        if (!Role::where('name', 'Admin')->first()) {
            $admin = Role::create([
                'name' => 'Admin',
            ]);
        } else {
            
            $admin = Role::where('name', 'Admin')->first();
        }
         //Cadastraa permisão para  o usuario
         $admin->givePermissionTo([

            'index-user',
            'view-user',
            'create-user',
            'edit-user',
            'delete-user',
            
            'empresa',
            'view-empresa',
            'create-empresa',
            'edit-empresa',
            'delete-empresa',
  
            'empresas',
            'view-empresas',
            'create-empresas',
            'edit-empresas',
            'delete-empresas',
              
            'colaborador',
            'view-colaborador',
            'create-colaborador',
            'edit-colaborador',
            'delete-colaborador',
               
            'servicos',
            'view-servicos',
            'create-servicos',
            'edit-servicos',
            'delete-servicos',
             
            'materiais',
            'view-materiais',
            'create-materiais',
            'edit-materiais',
            'delete-materiais',
  
            'custos',
            'view-custos',
            'create-custos',
            'edit-custos',
            'delete-custos',
  
            'status',
            'view-status',
            'create-status',
            'edit-status',
            'delete-status',

        ]);


        if(!Role::where('name', 'Colaborador')->first())
        {
                $colaborador =Role::create([
                    'name'=>'Colaborador',
                ]);

                  //Dar permissão para o papel de acessar todas as paginas
                  $colaborador->givePermissionTo([
                    
                    'colaborador',
                    'view-colaborador',
                      
                  
                ]);
        }
    }
}
