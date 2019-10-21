<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeriodoAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodo_alumnos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Clave_A');
            $table->string('PRIMERO')->nullable();
            //$table->string('PRIMERO2')->nullable();
            $table->string('SEGUNDO')->nullable();
            //$table->string('SEGUNDO2')->nullable();
            $table->string('TERCERO')->nullable();
            //$table->string('TERCERO2')->nullable();
            $table->string('CUARTO')->nullable();
            //$table->string('CUARTO2')->nullable();
            $table->string('QUINTO')->nullable();
            //$table->string('QUINTO2')->nullable();
            $table->string('SEXTO')->nullable();
            //$table->string('SEXTO2')->nullable();
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
        Schema::dropIfExists('periodo_alumnos');
    }
}
