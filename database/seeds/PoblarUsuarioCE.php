<?php

use Illuminate\Database\Seeder;

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
            'Password'=>'12345'
        ]);
    }
}
