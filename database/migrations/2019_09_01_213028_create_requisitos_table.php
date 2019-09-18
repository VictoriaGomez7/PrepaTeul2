<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequisitosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisitos', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('Clave_A')->unique();
          $table->string('Requisito_A');
          $table->string('Requisito_B');
          $table->string('Requisito_C');
          $table->string('Requisito_D');
          $table->string('Requisito_E');
          $table->string('Requisito_F');
          $table->string('Requisito_G');
          $table->string('Requisito_H');
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
        Schema::dropIfExists('requisitos');
    }
}
