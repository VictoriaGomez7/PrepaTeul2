<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencias', function (Blueprint $table) {
            $table->string('Clave_A');
            $table->integer('Asistencias');
            $table->integer('Faltas');
            $table->string('Periodo');
            $table->string('Materia');
            $table->string('Semestre');
            $table->string('Grupo')->null();
            $table->integer('PorcentajeAsistencias');
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
        Schema::dropIfExists('asistencias');
    }
}
