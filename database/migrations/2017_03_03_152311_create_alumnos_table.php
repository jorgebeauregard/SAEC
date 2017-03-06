<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matricula', 10);
            $table->string('nombre', 60);
            $table->string('apellido', 60);
            $table->decimal('prom_anterior', 5,2);
            $table->integer('campus_id')->unsigned();
            $table->tinyInteger('genero');
            $table->integer('plan_id')->unsigned();
            $table->string('contrasena', 30);
            $table->timestamps();
            
            $table->foreign('campus_id')->references('id')->on('campi')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('plan_id')->references('id')->on('planes')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('actividades_alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('actividad_id')->unsigned();
            $table->integer('alumno_id')->unsigned();
            $table->boolean('completada');
            $table->timestamps();

            $table->foreign('actividad_id')->references('id')->on('actividades')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('alumno_id')->references('id')->on('alumnos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividades_alumnos');
        Schema::dropIfExists('alumnos');
    }
}
