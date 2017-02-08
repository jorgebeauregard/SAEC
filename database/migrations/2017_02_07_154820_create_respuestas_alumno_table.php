<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas_alumno', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_actividad')->unsigned();
            $table->integer('id_evaluador')->unsigned();
            $table->integer('id_evaluado')->unsigned();
            $table->integer('id_comportamiento')->unsigned();
            $table->foreign('id_actividad')->references('id')->on('actividad')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_evaluador')->references('id')->on('alumno')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_evaluado')->references('id')->on('alumno')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_comportamiento')->references('id')->on('comportamiento')->onDelete('cascade')->onUpdate('cascade');
            $table->tinyInteger('nota');
            $table->String('comentario', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respuestas_alumno');
    }
}
