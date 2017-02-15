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
            $table->integer('id_crn')->unsigned();
            $table->foreign('id_crn')->references('id')->on('crn')->onDelete('cascade')->onUpdate('cascade');
            $table->datetime('limite');
            $table->timestamps();
        });

        Schema::create('respuestas_profesor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_actividad');
            $table->integer('id_profesor');
            $table->integer('id_evaluado');
            $table->integer('id_comportamiento');
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
