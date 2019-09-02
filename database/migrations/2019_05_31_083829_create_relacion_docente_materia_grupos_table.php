<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelacionDocenteMateriaGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacion_docente_materia_grupos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ClaveMateria')->nullable();
            $table->string('Clave_D');
            $table->string('Materia');
            $table->string('Grupo');
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
        Schema::dropIfExists('relacion_docente_materia_grupos');
    }
}
