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
            $table->foreign('id_actividad')->references('id')->on('actividad')->onDelete('Cascade');
            $table->foreign('id_evaluador')->references('id')->on('alumno')->onDelete('Cascade');
            $table->foreign('id_evaluado')->references('id')->on('alumno')->onDelete('Cascade');
            $table->foreign('id_comportamiento')->references('id')->on('comportamiento')->onDelete('Cascade');
            $table->tinyint('nota');
            $table->String('comentario', 255)->nullable();
        }
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
