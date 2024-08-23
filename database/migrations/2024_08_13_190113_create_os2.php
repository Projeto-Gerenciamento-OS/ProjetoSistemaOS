<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('os2', function (Blueprint $table) {
            $table->id();
            $table->float('id_servico');
            $table->float('id_emp1_os2');
            $table->float('id_emp2_os2');
            $table->float('id_colaborador');
            $table->float('quantidade_os2');
            $table->float('valorUnitario_os2');
            $table->float('valorTotal_os2');
            $table->float('custoTotal_os2');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('os2');
    }
};
