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
            $table->tinyInteger('genero');
            $table->integer('campus_id')->unsigned();
            $table->integer('plan_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();
            
            $table->foreign('campus_id')->references('id')->on('campuses')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('plan_id')->references('id')->on('plans')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');

        });

        Schema::create('alumno_crn', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('crn_id')->unsigned();
            $table->integer('alumno_id')->unsigned();
            $table->timestamps();

            $table->foreign('crn_id')->references('id')->on('crns')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('alumno_crn');
        Schema::dropIfExists('alumnos');   
    }
}
