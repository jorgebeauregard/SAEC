<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComportamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comportamientos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pregunta',250);
            $table->string('descripcion',250);
            $table->timestamps();
        });

        Schema::create('competencias_comportamientos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('competencia_id');
            $table->integer('comportamiento_id');
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
        Schema::dropIfExists('comportamientos');
        Schema::dropIfExists('competencias_comportamientos');
    }
}
