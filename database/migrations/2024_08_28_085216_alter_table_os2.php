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
        // Alterando a tabela do Os2.
        Schema::table("os2", function (Blueprint $table) {
        $table->foreignId('id_emp2')->constrained('emp2');
        $table->foreignId('id_os1')->constrained('os1');
        $table->foreignId('id_servico')->constrained('servico');
        $table->foreignId('id_colaborador')->constrained('colaborador');
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
