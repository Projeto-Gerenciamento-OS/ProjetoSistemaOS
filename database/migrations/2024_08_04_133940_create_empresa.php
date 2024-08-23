<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up(): void
    {
        Schema::create('empresa', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('empresa1_id')->constrained('empresa1');
            $table->integer('empresa1_id');
            $table->string('cnpj');
            $table->string('razao');
            $table->string('fantasia');
            $table->string('cep');
            $table->string('logradouro');
            $table->string('numero');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('uf');       
            $table->string('fone1');
            $table->string('fone2');
            $table->string('plano');
            $table->integer('qtdadm');
            $table->integer('qtdoper');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('empresa');
    }
};
