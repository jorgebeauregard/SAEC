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
            $table->integer('profesor_id');
            $table->dateTime('fecha_limite');
            $table->timestamps();
            $table->foreign('profesor_id')->references('id')->on('profesores')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('actividades_competencias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('actividad_id');
            $table->integer('competencias_id');
            $table->timestamps();

            $table->foreign('actividad_id')->references('id')->on('actividades')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('competencias_id')->references('id')->on('competencias')->onUpdate('cascade')->onDelete('cascade');
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
    }
}
