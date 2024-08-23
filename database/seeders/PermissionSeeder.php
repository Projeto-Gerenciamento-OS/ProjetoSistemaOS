<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    
    public function run(): void
    {
        //
        $permissoes =[

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

         
        ];


        foreach($permissoes as $permission)
        {
          $existePermissao = Permission::where('name', $permission)->first();

          if(!$existePermissao)
          {
            Permission::create([
                'name'=>$permission,
                'guard_name'=>'web',
            
            ]);
          }

        }
    }
}
