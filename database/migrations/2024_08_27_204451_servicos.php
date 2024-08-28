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
        Schema::create('servicos', function (Blueprint $table) {
            $table->id();
			$table->integer('id_emp1');
            $table->string('nome');
			$table->integer('tempo');
			$table->float('valor');
			$table->string('obs');
            $table->integer('recorente');
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
        Schema::dropIfExists('servicos');
    }
};
