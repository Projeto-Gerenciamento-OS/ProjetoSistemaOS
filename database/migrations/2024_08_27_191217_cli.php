<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cli', function (Blueprint $table) {
            $table->bigIncrements('id_cli');        
			$table->integer('tipo');		
            $table->string('cpf_cnpj');
            $table->string('razao');
            $table->string('fantasia');
            $table->string('cep');
            $table->string('endereco');
            $table->string('numero');
			$table->string('complemento');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('uf');       
            $table->string('fone1');
            $table->string('fone2');
            $table->string('obs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cli');
    }
};
