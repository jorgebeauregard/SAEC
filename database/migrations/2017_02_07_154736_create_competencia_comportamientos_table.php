<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetenciaComportamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competencia_comportamientos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_competencia')->unsigned();
            $table->integer('id_comportamiento')->unsigned();
            $table->foreign('id_competencia')->references('id')->on('competencia')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_comportamiento')->references('id')->on('comportamiento')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfEsxists('competencia_comportamiento');
    }
}
