<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_equipo')->unsigned();
            $table->integer('id_actividad')->unsigned();
            $table->foreign('id_actividad')->references('id')->on('actividad')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });

        Schema::create('equipo_alumno', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('equipo_id')->unsigned();
            $table->integer('alumno_id')->unsigned();
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
        Schema::dropIfExists('equipo');
        Schema::dropIfExists('equipo_alumno');
    }
}
