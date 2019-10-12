<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadisticaGenerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estadistica_generos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Hombres');
            $table->string('Mujeres');
            $table->string('Grupo');
            $table->string('Semestre');
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
        Schema::dropIfExists('estadistica_generos');
    }
}
