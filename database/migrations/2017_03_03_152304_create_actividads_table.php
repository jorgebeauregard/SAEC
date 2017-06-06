<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 60);
            $table->string('descripcion', 255);
            $table->dateTime('fecha_limite');
            $table->boolean('vista')->default(false);
            $table->integer('profesor_id')->unsigned();
            $table->integer('periodo_id')->unsigned();
            $table->integer('crn_id')->unsigned();
            $table->timestamps();
            
            $table->foreign('periodo_id')->references('id')->on('periodos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('profesor_id')->references('id')->on('profesors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('crn_id')->references('id')->on('crns')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('actividad_competencia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('actividad_id')->unsigned();
            $table->integer('competencia_id')->unsigned();
            $table->timestamps();

            $table->foreign('actividad_id')->references('id')->on('actividads')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('competencia_id')->references('id')->on('competencias')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('actividad_profesor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('actividad_id')->unsigned();
            $table->integer('profesor_id')->unsigned();
            $table->boolean('completada')->default(FALSE);
            $table->timestamps();

            $table->foreign('actividad_id')->references('id')->on('actividads')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('profesor_id')->references('id')->on('profesors')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividad_profesor');
        Schema::dropIfExists('actividad_competencia');
        Schema::dropIfExists('actividads');
    }
}
