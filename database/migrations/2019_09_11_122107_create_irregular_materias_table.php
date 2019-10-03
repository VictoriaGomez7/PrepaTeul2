<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIrregularMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('irregular_materias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Clave_A');
            $table->string('Clave_M');
            $table->float('Calificacion1');
            $table->string('Fecha');
            $table->float('Oportunidades');
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
        Schema::dropIfExists('irregular_materias');
    }
}
