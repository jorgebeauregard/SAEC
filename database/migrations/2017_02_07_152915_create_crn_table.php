<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crn', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_materia')->unsigned();
            $table->integer('id_periodo')->unsigned();
            $table->integer('id_profesor')->unsigned();
            $table->foreign('id_materia')->references('id')->on('materia')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_periodo')->references('id')->on('periodo')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_profesor')->references('id')->on('profesor')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('grupo');
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
        Schema::dropIfExists('crn');
    }
}
