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
        Schema::create('emp2', function (Blueprint $table) {
            $table->id();        
            $table->string('razao');
            $table->string('fantasia');
            $table->string('cnpj');
            $table->string('endereco');
            $table->string('numero');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('uf');
            $table->string('cep');      
            $table->string('fone1');
            $table->string('fone2');
            $table->string('plano');
            $table->integer('qtdeadm');
            $table->integer('qtdeoper');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emp2');
    }
};
