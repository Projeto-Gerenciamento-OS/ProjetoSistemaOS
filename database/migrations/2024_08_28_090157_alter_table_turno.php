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
       // Alterando a tabela do turno.
       Schema::table("turno", function (Blueprint $table) {
        $table->unique('id_emp1','id_emp2');
        $table->foreignId('id_emp2')->constrained('emp2');
        $table->foreignId('id_users_turno')->constrained('turno');        
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
