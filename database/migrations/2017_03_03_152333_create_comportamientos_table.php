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
            $table->integer('peso')->unsigned()->default(100);
            $table->timestamps();

            $table->foreign('competencia_id')->references('id')->on('competencias')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comportamientos');
    }
}


/*
alumno_respuesta
porofesores_respusta
*/