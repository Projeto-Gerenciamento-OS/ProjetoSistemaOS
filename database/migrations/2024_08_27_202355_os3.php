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
        Schema::create('os3', function (Blueprint $table) {
            $table->bigIncrements('id_os3'); 
			$table->integer('qtde');
            $table->float('vunit');
            $table->float('vtotal');
            $table->float('cunit');
            $table->float('ctotal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('os3');
    }
};
