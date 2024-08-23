<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('status', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('emp1');
            $table->integer('emp2');
            $table->string('cor');
            $table->text('descricao');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('status');
    }
};
