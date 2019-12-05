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
          'Password'=>Crypt::encrypt('12345')
        ]);

        DB::table('usuariomaestros')->insert([
            'Usuario' => '1235',
          'Password'=>Crypt::encrypt('12345')
        ]);

        DB::table('usuariomaestros')->insert([
            'Usuario' => '1236',
          'Password'=>Crypt::encrypt('12345')
        ]);

        DB::table('usuariomaestros')->insert([
            'Usuario' => '1237',
          'Password'=>Crypt::encrypt('12345')
        ]);


        DB::table('usuariomaestros')->insert([
            'Usuario' => '1238',
          'Password'=>Crypt::encrypt('12345')
        ]);


        DB::table('usuariomaestros')->insert([
            'Usuario' => '1239',
          'Password'=>Crypt::encrypt('12345')
        ]);


        DB::table('usuariomaestros')->insert([
            'Usuario' => '12341',
          'Password'=>Crypt::encrypt('12345')
        ]);

        DB::table('usuariomaestros')->insert([
            'Usuario' => '12342',
          'Password'=>Crypt::encrypt('12345')
        ]);

        DB::table('usuariomaestros')->insert([
            'Usuario' => '12343',
          'Password'=>Crypt::encrypt('12345')
        ]);

        DB::table('usuariomaestros')->insert([
            'Usuario' => '12344',
          'Password'=>Crypt::encrypt('12345')
        ]);
    }
}
