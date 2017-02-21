<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nombre', 60);
            $table->String('descripcion', 255);
            $table->integer('crn_id')->unsigned();
            $table->foreign('id_crn')->references('id')->on('crn')->onDelete('cascade')->onUpdate('cascade');
            $table->datetime('limite');
            $table->timestamps();
        });

        Schema::create('respuestas_profesor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('actividad_id');
            $table->integer('profesor_id');
            $table->integer('alumno_id');
            $table->integer('comportamiento_id');
            $table->tinyInteger('nota');
            $table->String('comentario', 255)->nullable();
            $table->timestamps();
        });

        Schema::create('respuestas_alumno', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('actividad_id');
            $table->integer('evaluador_id');
            $table->integer('evaluado_id');
            $table->integer('comportamiento_id');
            $table->tinyInteger('nota');
            $table->String('comentario', 255)->nullable();
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
        Schema::dropIfExists('actividad');
    }
}
