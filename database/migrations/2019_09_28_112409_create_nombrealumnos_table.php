<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNombrealumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nombrealumnos', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('Clave_A')->unique();
          $table->string('Nombre');
          $table->string('ApellidoP');
          $table->string('ApellidoM');
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
        Schema::dropIfExists('nombrealumnos');
    }
}
