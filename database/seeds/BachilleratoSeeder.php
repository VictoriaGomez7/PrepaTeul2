<?php

use Illuminate\Database\Seeder;

class BachilleratoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('bachilleratos')->insert([
            'id'=>'1',
            'Nombre_B'=>'Químico-Biológica'
        ]);

         DB::table('bachilleratos')->insert([
            'id'=>'2',
            'Nombre_B'=>'Físico-Matemática'
        ]);

         DB::table('bachilleratos')->insert([
            'id'=>'3',
            'Nombre_B'=>'Humanidades y Ciencias Sociales'
        ]);

         DB::table('bachilleratos')->insert([
            'id'=>'4',
            'Nombre_B'=>'Económica-Administrativa'
        ]);
    }
}
