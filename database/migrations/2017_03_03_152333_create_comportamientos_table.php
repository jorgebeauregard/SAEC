<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComportamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comportamientos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pregunta', 250);
            $table->string('descripcion', 250);
            $table->integer('competencia_id')->unsigned();
            $table->timestamps();

            $table->foreign('competencia_id')->references('id')->on('competencias')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('alumnos_respuestas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('actividad_id')->unsigned();
            $table->integer('evaluador_id')->unsigned();
            $table->integer('evaluado_id')->unsigned();
            $table->integer('comportamiento_id')->unsigned();
            $table->tinyInteger('nota');
            $table->text('comentario');

            $table->foreign('actividad_id')->references('id')->on('actividades')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('evaluador_id')->references('id')->on('alumnos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('evaluado_id')->references('id')->on('alumnos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('comportamiento_id')->references('id')->on('comportamientos')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('profesores_respuestas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('actividad_id')->unsigned();
            $table->integer('profesor_id')->unsigned();
            $table->integer('evaluado_id')->unsigned();
            $table->integer('comportamiento_id')->unsigned();
            $table->tinyInteger('nota');
            $table->text('comentario');

            $table->foreign('actividad_id')->references('id')->on('actividades')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('profesor_id')->references('id')->on('profesores')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('profesores_respuestas');
        Schema::dropIfExists('alumnos_respuestas');
        Schema::dropIfExists('comportamientos');

    }
}


/*
alumno_respuesta
porofesores_respusta
*/