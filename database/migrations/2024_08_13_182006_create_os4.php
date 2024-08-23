<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 
    public function up(): void
    {
        Schema::create('os4', function (Blueprint $table) {
            $table->id();
            $table->float('id_emp1_os4');
            $table->float('percentual_os4');
            $table->float('valor_os4');
            $table->float('ativo_os4');
            $table->text('descricao_os4');
            $table->timestamps();
        });
    }

  
    public function down(): void
    {
        Schema::dropIfExists('os4');
    }
};
