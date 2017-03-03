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
            $table->integer('profesor_id')->unsigned();
            $table->dateTime('fecha_limite');
            $table->timestamps();
            
            $table->foreign('profesor_id')->references('id')->on('profesores')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('actividades_competencias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('actividad_id')->unsigned();
            $table->integer('competencia_id')->unsigned();
            $table->timestamps();

            $table->foreign('actividad_id')->references('id')->on('actividades')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('actividades');
        Schema::dropIfExists('actividades_competencias');

    }
}
