<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMesesPlantasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meses_plantas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mes_id')->unsigned();
            $table->foreignId('planta_id')->unsigned();
            
            $table->foreign('mes_id')->references('id')->on('meses');
            $table->foreign('planta_id')->references('id')->on('plantas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meses_plantas');
    }
}
