<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('custos', function (Blueprint $table) {
            $table->id();
            $table->float('id_emp1');
            $table->float('id_emp2');
            $table->float('percentual');
            $table->text('descricao');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('custos');
    }
};
