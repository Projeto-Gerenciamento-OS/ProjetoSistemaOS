<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empresa;

class EmpresaSeeder extends Seeder
{
    public function run(): void
    {
        
            Empresa::create([
                'empresa1_id'=>2,
                'cnpj'=>1111111111111,
                'razao'=>"teste",
                'fantasia'=> 'Teste',            
                'cep'=> 123456,
                'Logradouro'=> 'Teste',
                'numero'=> 12,
                'Bairro'=> 'Teste',
                'Cidade'=> 'Teste',
                'uf'=> 'Teste',
                'fone1'=> 'Teste',
                'fone2'=> 'Teste',
                'plano'=> 1,
                'qtdadm'=> 10,
                'qtdoper'=> 5,
            ]);
    
}
}
