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
        Schema::create('os2', function (Blueprint $table) {
            $table->id(); 
            $table->float('qtde');
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
        Schema::dropIfExists('os2');
    }
};
