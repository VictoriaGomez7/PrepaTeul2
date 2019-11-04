<?php

use Illuminate\Database\Seeder;

class FormacionesPTSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formaciones')->insert([
            'id'=>'1',
            'Nombre_FT'=>'Higiene y Salud Comunitaria'
        ]);

         DB::table('formaciones')->insert([
            'id'=>'2',
            'Nombre_FT'=>'Turismo'
        ]);

         DB::table('formaciones')->insert([
            'id'=>'3',
            'Nombre_FT'=>'Informatica'
        ]);
    }
}
