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
        Schema::create('servico', function (Blueprint $table) {
            $table->bigIncrements('id_servico'); 
            $table->string('nome');
			$table->integer('tempo');
			$table->float('valor');
			$table->string('obs');
            $table->integer('recorrente');
			$table->float('custo');       
            $table->float('intervalo');      
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servico');
    }
};
