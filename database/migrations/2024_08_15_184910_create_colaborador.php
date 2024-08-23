<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('colaborador', function (Blueprint $table) {

            $table->id();
            $table->integer('empresa1_id');
            $table->integer('empresa2_id');
            $table->integer('setor_id');    
            $table->integer('turno_id');
            $table->integer('login_id');
            $table->string('nome');
            $table->string('telefone');
            $table->timestamps();

        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('colaborador');
    }
};
