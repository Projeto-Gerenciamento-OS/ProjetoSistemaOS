os3

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 
    public function up(): void
    {
        Schema::create('os3', function (Blueprint $table) {
            $table->id();
            $table->float('id_os1_os3');
            $table->float('id_emp1_os3');
            $table->float('id_emp2_os3');
            $table->float('id_material');
            $table->float('valorUnitario_os3');
            $table->float('valorTotal_os3');
            $table->float('custoTotal_os3');
            $table->timestamps();
        });
    }

  
    public function down(): void
    {
        Schema::dropIfExists('os3');
    }
};
