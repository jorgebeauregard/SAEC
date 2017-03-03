<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_equipo');
            $table->integer('actividad_id');
            $table->timestamps();
            $table->foreign('actividad_id')->references('id')->on('actividades')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    Schema::create('alumnos_equipos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('equipo_id');
            $table->integer('alumno_id');
            $table->timestamps();

            $table->foreign('equipo_id')->references('id')->on('equipos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('alumno_id')->references('id')->on('alumnos')->onUpdate('cascade')->onDelete('cascade');
        });

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipos');
    }
}
