<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadisticaSemestresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estadistica_semestres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Aprobados');
            $table->string('Reprobados');
            $table->string('Semestre');
            $table->string('Materia');
            $table->string('Periodo');
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
        Schema::dropIfExists('estadistica_semestres');
    }
}
