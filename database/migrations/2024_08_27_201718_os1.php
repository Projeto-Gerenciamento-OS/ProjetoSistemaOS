
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
        Schema::create('os1', function (Blueprint $table) {
            $table->id(); 
            $table->string('datacad');
            $table->string('dhi');
			$table->string('dhf');
            $table->string('obs');
            $table->float('vtotal');
			$table->float('ctotal');
			$table->float('cindireto');
			$table->float('vresultado');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('os1');
    }
};
