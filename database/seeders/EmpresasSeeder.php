<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empresas;

class EmpresasSeeder extends Seeder
{

    public function run(): void
    {
        Empresas::create([
            'descricao'=>'teste',
    
        ]);
    }
}
