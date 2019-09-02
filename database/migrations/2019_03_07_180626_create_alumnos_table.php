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
            $table->bigIncrements('Numero');
            $table->string('Clave_A')->unique();
            $table->string('Nombre_A');
            $table->string('Nombre_P');
            $table->string('Nombre_M');
            $table->string('Domicilio');
            $table->string('Telefono_T');
            $table->string('Telefono_A')->nullable();
            $table->string('Poblacion');
            $table->string('Municipio');
            $table->string('Fecha_Nac');
            $table->integer('Edad');
            $table->string('Email')->nullable();
            $table->string('Curp');
            $table->string('NSS')->nullable();
            $table->string('Sexo');
            $table->string('Semestre');
            $table->string('Grado');
            $table->string('Estado');
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
    }
}
