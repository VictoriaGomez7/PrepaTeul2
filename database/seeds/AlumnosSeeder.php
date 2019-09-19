<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AlumnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumnos')->insert([
            'Clave_A'=>'19008001',
            'Nombre_A'=>'Mario',
            'Nombre_P'=>'Jose',
            'Nombre_M'=>'Maria',
            'Domicilio'=>'Hidalgo #16',
            'Telefono_T'=>'4371022479',
            'Telefono_A'=>'3315128011',
            'Poblacion'=>'Chimal',
            'Municipio'=>'Chimaltitan',
            'Fecha_Nac'=>'1998/01/31',
            'Edad'=>'21',
            'Email'=>'roquetorres819@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Hombre',
            'Semestre'=>'PRIMER',
            'Grado'=>'PRIMER',
            'Estado'=>'Regular'
        ]);
    }
}
