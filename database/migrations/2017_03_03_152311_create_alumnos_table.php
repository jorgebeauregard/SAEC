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
            $table->integer('campus_id')->unsigned();
            $table->tinyInteger('genero');
            $table->integer('plan_id')->unsigned();
            $table->string('contrasena', 30);
            $table->timestamps();
            
            $table->foreign('campus_id')->references('id')->on('campuses')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('plan_id')->references('id')->on('plans')->onUpdate('cascade')->onDelete('cascade');
        });
    }
<<<<<<< HEAD

=======
>>>>>>> 86a6f6d0c6d2653021b1511ee96162a318a71242
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
