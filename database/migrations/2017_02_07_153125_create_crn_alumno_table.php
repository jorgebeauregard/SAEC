<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrnAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crn_alumno', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_alumno')->unsigned();
            $table->integer('id_crn')->unsigned();
            $table->integer('faltas');
            $table->foreign('id_alumno')->references('id')->on('alumno')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_crn')->references('id')->on('crn')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('crn_alumno');
    }
}
