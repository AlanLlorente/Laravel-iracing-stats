<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultados', function (Blueprint $table) {
            $table->id();
            $table->string('car');
            $table->string('circuit');
            $table->string('series');
            $table->boolean('DNF');
            $table->smallInteger('incidents');
            $table->integer('laps');
            $table->boolean('x4tome');
            $table->boolean('x4toothers');
            $table->boolean('did_qualy');
            $table->smallInteger('start_position');
            $table->smallInteger('finish_position');
            $table->smallInteger('irating');
            $table->float('safety_rating');
            $table->float('seconds_to_pole');
            $table->float('seconds_end_race');
            $table->integer('SOF');
            $table->smallInteger('training');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resultados');
    }
}
