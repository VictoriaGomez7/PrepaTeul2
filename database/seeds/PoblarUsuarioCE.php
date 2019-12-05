<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;

class PoblarUsuarioCE extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario_c_e_s')->insert([
            'Usuario' => 'controlescolar',
            'Password'=>Crypt::encrypt('ServiciosEscolares')
        ]);
    }
}
