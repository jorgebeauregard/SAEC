<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno', function (Blueprint $table) {
            $table->increments('id');
            $table->String('matricula',10);
            $table->String('nombre',60);
            $table->String('apellido',60);
            $table->float('prom_anterior',2,2);
            $table->integer('id_campus')->unsigned();
            $table->integer('id_plan')->unsigned();
            $table->foreign('id_campus')->references('id')->on('campus')->onDelete('cascade')->onUpdate('cascade');
            $table->tinyInteger('genero'); 
            $table->foreign('id_plan')->references('id')->on('campus')->onDelete('cascade')->onUpdate('cascade');     
            $table->String('contraseña',30);  
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
        Schema::dropIfExists('alumno');
    }
}
