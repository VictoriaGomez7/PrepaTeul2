<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIrregularesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('irregulares', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Clave_A');
            $table->string('Clave_M');
            $table->float('Calificacion1');
            $table->float('Calificacio2');
            $table->float('Calificacion3');
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
        Schema::dropIfExists('irregulares');
    }
}
