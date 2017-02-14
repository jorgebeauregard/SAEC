<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComportamientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comportamiento', function (Blueprint $table) {
            $table->increments('id');
            $table->String('pregunta',250);
            $table->String('descripcion',250);
            $table->timestamps();
        });

        Schema::create('competencia_comportamiento', function (Blueprint $table) {
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
        Schema::dropIfExists('comportamiento');
        Schema::dropIfExists('competencia_comportamiento');
    }
}
