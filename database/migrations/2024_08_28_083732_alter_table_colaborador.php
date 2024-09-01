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
       // Alterando a tabela do colaborador.
       Schema::table("colaborador", function (Blueprint $table) {
        $table->foreignId('id_emp2')->constrained('emp2','id_emp2');
        $table->foreignId('id_users')->constrained('users');
        $table->foreignId('id_turno')->constrained('turno','id_turno');
        $table->foreignId('id_setor')->constrained('setor','id_setor');
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
