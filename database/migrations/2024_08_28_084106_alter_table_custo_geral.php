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
         // Alterando a tabela do Custo Geral.
        Schema::table("custos", function (Blueprint $table) {
            $table->unique('id_emp1','id_emp2');
            $table->foreignId('id_emp2')->constrained('emp2');
            $table->foreignId('id_users')->constrained('users');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
