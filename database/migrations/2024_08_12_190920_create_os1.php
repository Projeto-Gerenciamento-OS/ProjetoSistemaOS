<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('os1', function (Blueprint $table) {
            $table->id();
            $table->float('id_status');
            $table->float('dataCadastrada');
            $table->float('dhi');
            $table->float('dhf');
            $table->float('valorTotal');
            $table->float('custoTotal');
            $table->timestamps();
        });
    }

    public function down():void
    {
        Schema::dropIfExists('os1');
    }
};
