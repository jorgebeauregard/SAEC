<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompetenciaComportamientos extends Migration
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
            $table->foreign('id_competencia')->references('id')->on('competencia')->onDelete('Cascade');
            $table->foreign('id_comportamiento')->references('id')->on('comportamiento')->onDelete('Cascade');
        }
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
