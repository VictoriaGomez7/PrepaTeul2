<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariomaestrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuariomaestros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Usuario')->unique();
<<<<<<< HEAD
            $table->string('Password',3500)->nullable();
=======
            $table->string('Password',250)->nullable();
>>>>>>> 5f110c311656931255b7f6afb5327904684f5221
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
        Schema::dropIfExists('usuariomaestros');
    }
}
