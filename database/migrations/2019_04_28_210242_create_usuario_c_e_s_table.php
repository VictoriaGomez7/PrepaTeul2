<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioCESTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_c_e_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Usuario')->unique();
             $table->string('Correo')->unique()->nullable();
            $table->string('Password');
            $table->timestamps();
        });
    }

    /**s
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_c_e_s');
    }
}
