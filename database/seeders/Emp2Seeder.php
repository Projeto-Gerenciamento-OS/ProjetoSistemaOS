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
            'razao'=>'teste',
            'fantasia'=>'teste',
            'cnpj'=>'teste',
            'endereco'=>'teste',
            'numero'=>'teste',
            'bairro'=>'teste',
            'cidade'=>'teste',
            'cep'=>'teste',
            'uf'=>'teste',
            'fone1'=>'teste',
            'fone2'=>'teste',
            'plano'=>'teste',
            'qtdeadm'=>1,
            'qtdeoper'=>1,
            'id_emp1'=>1,         
        ]);
    }
}
