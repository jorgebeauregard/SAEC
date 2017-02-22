<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 60);
            $table->string('descripcion', 255);
            $table->integer('crn_id')->unsigned();
            $table->foreign('crn_id')->references('id')->on('crns')->onDelete('cascade')->onUpdate('cascade');
            $table->datetime('limite');
            $table->timestamps();
        });

        Schema::create('respuestas_profesores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('actividad_id');
            $table->integer('profesor_id');
            $table->integer('alumno_id');
            $table->integer('comportamiento_id');
            $table->tinyInteger('nota');
            $table->string('comentario', 255)->nullable();
            $table->timestamps();
        });

        Schema::create('respuestas_alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('actividad_id');
            $table->integer('evaluador_id');
            $table->integer('evaluado_id');
            $table->integer('comportamiento_id');
            $table->tinyInteger('nota');
            $table->string('comentario', 255)->nullable();
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
        Schema::dropIfExists('actividades');
        Schema::dropIfExists('respuestas_profesores');
        Schema::dropIfExists('respuestas_alumnos');
    }
}
