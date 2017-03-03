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
            $table->string('apellidos', 60);
            $table->decimal('prom_anterior', 5,2);
            $table->integer('campus_id');
            $table->tinyInteger('genero');
            $table->integer('plan_id');
            $table->string('contraseña', 30);
            $table->timestamps();
            
            $table->foreign('campus_id')->references('id')->on('campi')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('plan_id')->references('id')->on('planes')->onUpdate('cascade')->onDelete('cascade');
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
    }
}
