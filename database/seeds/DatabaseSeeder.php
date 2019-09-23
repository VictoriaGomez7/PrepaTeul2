<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        $this->call(PoblarUsuarioCE::class); //Esta es la línea que añadimos
        $this->call(AlumnosSeeder::class);
        $this->call(UsuarioAlumnoSeeder::class);
        $this->call(ftbachesSeeder::class);
        $this->call(RequisitoSeeder::class);
    }
}
