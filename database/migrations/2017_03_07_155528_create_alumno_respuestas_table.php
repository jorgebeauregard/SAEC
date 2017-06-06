<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnoRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno_respuestas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('actividad_id')->unsigned();
            $table->integer('alumno_id')->unsigned();
            $table->integer('evaluado_id')->unsigned();
            $table->integer('comportamiento_id')->unsigned();
            $table->tinyInteger('nota_calidad');
            $table->tinyInteger('nota_frecuencia');

            $table->foreign('actividad_id')->references('id')->on('actividads')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('alumno_id')->references('id')->on('alumnos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('evaluado_id')->references('id')->on('alumnos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('comportamiento_id')->references('id')->on('comportamientos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumno_respuestas');
    }
}
