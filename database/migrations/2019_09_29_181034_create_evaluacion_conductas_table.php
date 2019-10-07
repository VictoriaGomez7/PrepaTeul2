<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluacionConductasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacion_conductas', function (Blueprint $table) {
            $table->bigIncrements('id');
              $table->string('Clave_A');
               $table->string('Clave_M');
               $table->string('Clave_D');
                $table->string('evaluacion');
                  $table->string('grupo');  


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
        Schema::dropIfExists('evaluacion_conductas');
    }
}
