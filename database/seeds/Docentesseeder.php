<?php

use Illuminate\Database\Seeder;

class Docentesseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //#1
        DB::table('docentes')->insert([
            'Clave_D'=>'1234',
            'Nombre'=>'Ruben Delgado López',
            'Domicilio'=>'Abasolo #78',
            'Telefono'=>'4925448144',
            'Email'=>'ruben.dc@gmail.com',
            'Curp'=>'DELR900517HZTYRN21'
        ]);
        //#2
        DB::table('docentes')->insert([
            'Clave_D'=>'1235',
            'Nombre'=>'Lupita Curiel Alegria',
            'Domicilio'=>'Niños Heroes #07',
            'Telefono'=>'3315128011',
            'Email'=>'Lalegriac.dc@gmail.com',
            'Curp'=>'CUAL8602257MJTYLN07'
        ]);

        //#3
        DB::table('docentes')->insert([
            'Clave_D'=>'1236',
            'Nombre'=>'Raquel Gabriela Soliz Vermejo',
            'Domicilio'=>'Miguel Hidalgo #01',
            'Telefono'=>'3318345690',
            'Email'=>'raquelsoliz@gmail.com',
            'Curp'=>'SOVR870501MJTYRN07'
        ]);

        //#4
        DB::table('docentes')->insert([
            'Clave_D'=>'1237',
            'Nombre'=>'Hernesto Casas Robles',
            'Domicilio'=>'Naional #78',
            'Telefono'=>'3331025788',
            'Email'=>'hernesto_78.dc@gmail.com',
            'Curp'=>'CARH790117HJTYHN07'
        ]);

        //#5
        DB::table('docentes')->insert([
            'Clave_D'=>'1238',
            'Nombre'=>'Lazaro Limon Casillas',
            'Domicilio'=>'Augusto',
            'Telefono'=>'3391023471',
            'Email'=>'charo23.L@gmail.com',
            'Curp'=>'LILL890508HJTYLN07'
        ]);

        //#6
        DB::table('docentes')->insert([
            'Clave_D'=>'1239',
            'Nombre'=>'Luz Elvira Luna Ayala',
            'Domicilio'=>'Moreno #67',
            'Telefono'=>'4371020223',
            'Email'=>'leyvaaldair@gmail.com',
            'Curp'=>'LUAL800607MZTYLN21'
        ]);

        //#7
        DB::table('docentes')->insert([
            'Clave_D'=>'12341',
            'Nombre'=>'Estrella Gonzáles Radilla',
            'Domicilio'=>'Nacional #34',
            'Telefono'=>'4371002105',
            'Email'=>'estrella@gmail.com',
            'Curp'=>'GORE910918MZTYEN21'
        ]);

        //#8
        DB::table('docentes')->insert([
            'Clave_D'=>'12342',
            'Nombre'=>'Isabel Correa Gordillo',
            'Domicilio'=>'Independencia #03',
            'Telefono'=>'4371051950',
            'Email'=>'isatec_class@gmail.com',
            'Curp'=>'COGI940413MZTYIN21'
        ]);
        //#9
        DB::table('docentes')->insert([
            'Clave_D'=>'12343',
            'Nombre'=>'Noel Garcia Argena',
            'Domicilio'=>'Matamoros #115',
            'Telefono'=>'4371049629',
            'Email'=>'noel184@hotmail.com',
            'Curp'=>'GAAN900517HZTYNN21'
        ]);
        //#10
        DB::table('docentes')->insert([
            'Clave_D'=>'12344',
            'Nombre'=>'Rafael Campa García',
            'Domicilio'=>'Alvaro Obregon #355',
            'Telefono'=>'4374798553',
            'Email'=>'rcampagarcia@gmail.com',
            'Curp'=>'CAGR900206HZTYRN21'
        ]);
    }
}
