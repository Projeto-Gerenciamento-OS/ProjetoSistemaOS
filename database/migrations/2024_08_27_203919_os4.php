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
        Schema::create('os4', function (Blueprint $table) {
            $table->bigIncrements('id_os4'); 
            $table->string('descricao');
			$table->float('percentual');
            $table->float('valor');
            $table->integer('ativo');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('os4');
    }
};
