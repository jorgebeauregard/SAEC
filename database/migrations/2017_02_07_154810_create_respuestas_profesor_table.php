<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasProfesorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas_profesor', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('id_actividad')->references('id')->on('actividad')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_profesor')->references('id')->on('profesor')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_evaluado')->references('id')->on('alumno')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_comportamiento')->references('id')->on('comportamiento')->onDelete('cascade')->onUpdate('cascade');
            $table->tinyInteger('nota');
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
        Schema::dropIfExists('respuestas_profesor');
    }
}
