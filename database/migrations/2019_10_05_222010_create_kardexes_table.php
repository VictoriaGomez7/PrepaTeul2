<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKardexesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kardexes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Clave_A');
            $table->string('Clave_M');
            $table->string('NombreM');
            $table->string('Fecha')->nullable();
            $table->float('Oportunidades')->nullable();
            $table->float('Calificacion');
            $table->string('Faltas');
            $table->string('Grupo');
            $table->string('Semestre');
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
        Schema::dropIfExists('kardexes');
    }
}
