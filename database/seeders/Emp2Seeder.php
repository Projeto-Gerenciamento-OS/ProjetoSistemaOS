<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Emp2;

class Emp2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Emp2::create([
            'razao'=>'Cidade',
            'fantasia'=>'Cidade',
            'cnpj'=> 12345678910,
            'endereco'=>'Ru ali',
            'numero'=>66,
            'bairro'=>'Cidade',
            'cidade'=>'Cidade',
            'cep'=>123456789,
            'uf'=>'SP',
            'fone1'=> 11111111,
            'fone2'=> 11111111,
            'plano'=> 1,
            'qtdeadm'=>1,
            'qtdeoper'=>1,
            'id_emp1'=>1,         
        ]);
    }
}
