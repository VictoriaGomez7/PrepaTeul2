<?php

use Illuminate\Database\Seeder;

class UsuarisMaestrossSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuariomaestros')->insert([
            'Usuario' => '1234',
            'Password'=>'12345'
        ]);

        DB::table('usuariomaestros')->insert([
            'Usuario' => '1235',
            'Password'=>'12345'
        ]);

        DB::table('usuariomaestros')->insert([
            'Usuario' => '1236',
            'Password'=>'12345'
        ]);

        DB::table('usuariomaestros')->insert([
            'Usuario' => '1237',
            'Password'=>'12345'
        ]);


        DB::table('usuariomaestros')->insert([
            'Usuario' => '1238',
            'Password'=>'12345'
        ]);


        DB::table('usuariomaestros')->insert([
            'Usuario' => '1239',
            'Password'=>'12345'
        ]);


        DB::table('usuariomaestros')->insert([
            'Usuario' => '12341',
            'Password'=>'12345'
        ]);

        DB::table('usuariomaestros')->insert([
            'Usuario' => '12342',
            'Password'=>'12345'
        ]);

        DB::table('usuariomaestros')->insert([
            'Usuario' => '12343',
            'Password'=>'12345'
        ]);

        DB::table('usuariomaestros')->insert([
            'Usuario' => '12344',
            'Password'=>'12345'
        ]);
    }
}
