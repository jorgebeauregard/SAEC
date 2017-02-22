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
            $table->string('matricula',10);
            $table->string('nombre',60);
            $table->string('apellido',60);
            $table->decimal('prom_anterior',5,2);
            $table->integer('campus_id')->unsigned();
            $table->integer('plan_id')->unsigned();
            $table->tinyInteger('genero'); 
            
            $table->foreign('campus_id')->references('id')->on('campi')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('plan_id')->references('id')->on('campi')->onDelete('cascade')->onUpdate('cascade');     
            $table->string('contrasena',30); 
            $table->string('codigo_alta',16)->nullable(); 
            $table->timestamps();                        
        });

        Schema::create('crns_alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alumno_id');
            $table->integer('crn_id');
            $table->integer('faltas');
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
        Schema::dropIfExists('alumnos');
        Schema::dropIfExists('crns_alumnos');
        
    }
}
