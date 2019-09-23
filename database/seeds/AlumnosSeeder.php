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
            'Clave_A'=>'1900110001',
            'Nombre_A'=>'Mario Gutíerrez Macías',
            'Nombre_P'=>'Jose Gutíerrez Mendoza',
            'Nombre_M'=>'Maria Macías Solis',
            'Domicilio'=>'Hidalgo #16',
            'Telefono_T'=>'4371022479',
            'Telefono_A'=>'3315128011',
            'Poblacion'=>'Chimal',
            'Municipio'=>'Chimaltitan',
            'Fecha_Nac'=>'2002/01/31',
            'Edad'=>'17',
            'Email'=>'mario819@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Hombre',
            'Semestre'=>'PRIMER SEMESTRE',
            'Grado'=>'PRIMER',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110002',
            'Nombre_A'=>'Maria Fernanda Gómez Pérez',
            'Nombre_P'=>'Jose Gómez Ayala',
            'Nombre_M'=>'Maria Pérez Reyna',
            'Domicilio'=>'Iturbide #37',
            'Telefono_T'=>'4371022456',
            'Telefono_A'=>'3315128012',
            'Poblacion'=>'Agua Caliente',
            'Municipio'=>'Chimaltitan',
            'Fecha_Nac'=>'2002/05/23',
            'Edad'=>'17',
            'Email'=>'maria819@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Mujer',
            'Semestre'=>'PRIMER SEMESTRE',
            'Grado'=>'PRIMER',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110003',
            'Nombre_A'=>'Jorge Gómez Escobedo',
            'Nombre_P'=>'Jorge Luis Gómez Valdéz',
            'Nombre_M'=>'Guadalupe Escobedo Villegaz',
            'Domicilio'=>'Obelisco #520',
            'Telefono_T'=>'4371022056',
            'Telefono_A'=>'3315128712',
            'Poblacion'=>'Agua Caliente',
            'Municipio'=>'Chimaltitan',
            'Fecha_Nac'=>'2005/01/15',
            'Edad'=>'21',
            'Email'=>'jorgito19@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Hombre',
            'Semestre'=>'PRIMER SEMESTRE',
            'Grado'=>'PRIMER',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110004',
            'Nombre_A'=>'Felipe Guzman López',
            'Nombre_P'=>'Salvador Guzman Salas',
            'Nombre_M'=>'Maria Guadalupe López Luevano',
            'Domicilio'=>'Sabiduria #20',
            'Telefono_T'=>'3333022056',
            'Telefono_A'=>'3315128852',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2003/06/22',
            'Edad'=>'16',
            'Email'=>'fely19@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Hombre',
            'Semestre'=>'PRIMER SEMESTRE',
            'Grado'=>'PRIMER',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110005',
            'Nombre_A'=>'Archivaldo Guzman Salazar',
            'Nombre_P'=>'Joaquin Guzman Loera',
            'Nombre_M'=>'Scarlethe Salazar Leyva',
            'Domicilio'=>'Constitución #95',
            'Telefono_T'=>'4371042457',
            'Telefono_A'=>'3315128858',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2003/09/06',
            'Edad'=>'16',
            'Email'=>'archivaldo19@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Hombre',
            'Semestre'=>'PRIMER SEMESTRE',
            'Grado'=>'PRIMER',
            'Estado'=>'Regular'
        ]);


        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110006',
            'Nombre_A'=>'Edgar Guzman Salazar',
            'Nombre_P'=>'Joaquin Guzman Loera',
            'Nombre_M'=>'Scarlethe Salazar Leyva',
            'Domicilio'=>'Constitución #95',
            'Telefono_T'=>'4371042487',
            'Telefono_A'=>'3315128885',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2003/09/06',
            'Edad'=>'16',
            'Email'=>'edgar19@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Hombre',
            'Semestre'=>'PRIMER SEMESTRE',
            'Grado'=>'PRIMER',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110007',
            'Nombre_A'=>'Edgar Guzman Salazar',
            'Nombre_P'=>'Pedro Guzman Pérez',
            'Nombre_M'=>'Josefina Salazar García',
            'Domicilio'=>'Morelos #10',
            'Telefono_T'=>'4371042477',
            'Telefono_A'=>'3315128985',
            'Poblacion'=>'Teul',
            'Municipio'=>'Teul',
            'Fecha_Nac'=>'2003/05/04',
            'Edad'=>'16',
            'Email'=>'edgar119@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Hombre',
            'Semestre'=>'PRIMER SEMESTRE',
            'Grado'=>'PRIMER',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110008',
            'Nombre_A'=>'Pedro Ureña Martínez',
            'Nombre_P'=>'Pedro Ureña Pérez',
            'Nombre_M'=>'Josefa Martínez García',
            'Domicilio'=>'Morelos #15',
            'Telefono_T'=>'4371042492',
            'Telefono_A'=>'3315123545',
            'Poblacion'=>'Teul',
            'Municipio'=>'Teul',
            'Fecha_Nac'=>'2003/03/01',
            'Edad'=>'16',
            'Email'=>'pedro19@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Hombre',
            'Semestre'=>'PRIMER SEMESTRE',
            'Grado'=>'PRIMER',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110009',
            'Nombre_A'=>'Paola Huerta Martínez',
            'Nombre_P'=>'Pedro Huerta Pérez',
            'Nombre_M'=>'Jazmín Martínez García',
            'Domicilio'=>'Niños Heroes #1',
            'Telefono_T'=>'4371042494',
            'Telefono_A'=>'3315123575',
            'Poblacion'=>'Teul',
            'Municipio'=>'Teul',
            'Fecha_Nac'=>'2003/02/17',
            'Edad'=>'16',
            'Email'=>'pao19@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Mujer',
            'Semestre'=>'PRIMER SEMESTRE',
            'Grado'=>'PRIMER',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110010',
            'Nombre_A'=>'Francisca Haro Macias',
            'Nombre_P'=>'Pedro Haro Raygoza',
            'Nombre_M'=>'Jazmín Macias Gutiérrez',
            'Domicilio'=>'Niños Heroes #7',
            'Telefono_T'=>'4371042794',
            'Telefono_A'=>'3315123075',
            'Poblacion'=>'Teul',
            'Municipio'=>'Teul',
            'Fecha_Nac'=>'2003/07/07',
            'Edad'=>'16',
            'Email'=>'francis19@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Mujer',
            'Semestre'=>'PRIMER SEMESTRE',
            'Grado'=>'PRIMER',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110011',
            'Nombre_A'=>'Fernanda Gutiérrez Escobedo',
            'Nombre_P'=>'Javier Gutiérrez Ramírez',
            'Nombre_M'=>'Manuela Escobedo Garza',
            'Domicilio'=>'Esperanza #73',
            'Telefono_T'=>'4371042799',
            'Telefono_A'=>'3315123077',
            'Poblacion'=>'Teul',
            'Municipio'=>'Teul',
            'Fecha_Nac'=>'2002/07/27',
            'Edad'=>'17',
            'Email'=>'fer19@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Mujer',
            'Semestre'=>'PRIMER SEMESTRE',
            'Grado'=>'PRIMER',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110012',
            'Nombre_A'=>'Alma Escobedo Gamboa',
            'Nombre_P'=>'Javier Escobedo Romo',
            'Nombre_M'=>'Leticia Gamboa Gutiérrez',
            'Domicilio'=>'Esperanza #23',
            'Telefono_T'=>'4371042798',
            'Telefono_A'=>'3315123076',
            'Poblacion'=>'Teul',
            'Municipio'=>'Teul',
            'Fecha_Nac'=>'2003/07/27',
            'Edad'=>'16',
            'Email'=>'alma19@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Mujer',
            'Semestre'=>'TERCER SEMESTRE',
            'Grado'=>'SEGUNDO',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110013',
            'Nombre_A'=>'Itzel Pérez Gamboa',
            'Nombre_P'=>'Julian Pérez Romo',
            'Nombre_M'=>'Laura Gamboa Gutiérrez',
            'Domicilio'=>'Abasolo #5',
            'Telefono_T'=>'4371042778',
            'Telefono_A'=>'3315123176',
            'Poblacion'=>'Teul',
            'Municipio'=>'Teul',
            'Fecha_Nac'=>'2002/07/10',
            'Edad'=>'17',
            'Email'=>'itz19@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Mujer',
            'Semestre'=>'TERCER SEMESTRE',
            'Grado'=>'SEGUNDO',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110014',
            'Nombre_A'=>'Karen Michelle García Valdivia',
            'Nombre_P'=>'Luis García Robledo',
            'Nombre_M'=>'Ofelia Valdivia Gutiérrez',
            'Domicilio'=>'Abasolo #10',
            'Telefono_T'=>'4371042772',
            'Telefono_A'=>'3315123171',
            'Poblacion'=>'Teul',
            'Municipio'=>'Teul',
            'Fecha_Nac'=>'2002/03/11',
            'Edad'=>'17',
            'Email'=>'karen19@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Mujer',
            'Semestre'=>'TERCER SEMESTRE',
            'Grado'=>'SEGUNDO',
            'Estado'=>'Regular'
        ]);


        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110015',
            'Nombre_A'=>'Karen Michelle García Valdivia',
            'Nombre_P'=>'Fernando García Ramos',
            'Nombre_M'=>'Oralia Valdivia Gómez',
            'Domicilio'=>'Abasolo #17',
            'Telefono_T'=>'4371042745',
            'Telefono_A'=>'3315123101',
            'Poblacion'=>'Teul',
            'Municipio'=>'Teul',
            'Fecha_Nac'=>'2002/03/19',
            'Edad'=>'17',
            'Email'=>'karen129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Mujer',
            'Semestre'=>'TERCER SEMESTRE',
            'Grado'=>'SEGUNDO',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110016',
            'Nombre_A'=>'Kimberly Robledo Ramos',
            'Nombre_P'=>'Brayan Robledo Lamas',
            'Nombre_M'=>'Norma Ramos Gómez',
            'Domicilio'=>'Abasolo #452',
            'Telefono_T'=>'4371047845',
            'Telefono_A'=>'3315124001',
            'Poblacion'=>'Teul',
            'Municipio'=>'Teul',
            'Fecha_Nac'=>'2002/10/29',
            'Edad'=>'17',
            'Email'=>'kim129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Mujer',
            'Semestre'=>'TERCER SEMESTRE',
            'Grado'=>'SEGUNDO',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110017',
            'Nombre_A'=>'Karin Velazquez Contreras',
            'Nombre_P'=>'Broly Velazquez Partida',
            'Nombre_M'=>'Nely Contreras Lizarraga',
            'Domicilio'=>'Abasolo #42',
            'Telefono_T'=>'4371041845',
            'Telefono_A'=>'3315123001',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2002/10/09',
            'Edad'=>'17',
            'Email'=>'karin129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Hombre',
            'Semestre'=>'TERCER SEMESTRE',
            'Grado'=>'SEGUNDO',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110018',
            'Nombre_A'=>'Fernando Hernández Contreras',
            'Nombre_P'=>'Brandon Hernández Lomas',
            'Nombre_M'=>'Nayeli Contreras Lizarraga',
            'Domicilio'=>'Centro #2',
            'Telefono_T'=>'4371042845',
            'Telefono_A'=>'3315123011',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2002/11/09',
            'Edad'=>'17',
            'Email'=>'fernan129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Hombre',
            'Semestre'=>'TERCER SEMESTRE',
            'Grado'=>'SEGUNDO',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110019',
            'Nombre_A'=>'Francisco López Fernandez',
            'Nombre_P'=>'Braulio López Salazar',
            'Nombre_M'=>'Veronica Fernandez Franco',
            'Domicilio'=>'Centro #21',
            'Telefono_T'=>'4371042846',
            'Telefono_A'=>'3315123012',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2002/10/19',
            'Edad'=>'17',
            'Email'=>'fran129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Hombre',
            'Semestre'=>'TERCER SEMESTRE',
            'Grado'=>'SEGUNDO',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110020',
            'Nombre_A'=>'Francis Lamas Fernandez',
            'Nombre_P'=>'Andres Lamas Salazar',
            'Nombre_M'=>'Veronica Fernandez Franco',
            'Domicilio'=>'Centro #26',
            'Telefono_T'=>'4371042847',
            'Telefono_A'=>'3315123013',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2002/10/20',
            'Edad'=>'17',
            'Email'=>'francis129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Hombre',
            'Semestre'=>'TERCER SEMESTRE',
            'Grado'=>'SEGUNDO',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110021',
            'Nombre_A'=>'Goku Camacho Cortez',
            'Nombre_P'=>'Andres Lamas Salazar',
            'Nombre_M'=>'Veronica Fernandez Franco',
            'Domicilio'=>'Centro #26',
            'Telefono_T'=>'4371042847',
            'Telefono_A'=>'3315123013',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2002/10/20',
            'Edad'=>'17',
            'Email'=>'francis129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Hombre',
            'Semestre'=>'TERCER SEMESTRE',
            'Grado'=>'SEGUNDO',
            'Estado'=>'Regular'
        ]);
        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110022',
            'Nombre_A'=>'Jose Luis Ruiz Diaz',
            'Nombre_P'=>'Jesus Ruiz Serrano',
            'Nombre_M'=>'Federica Serrano Dominguez',
            'Domicilio'=>'Revolucion #26',
            'Telefono_T'=>'4371042857',
            'Telefono_A'=>'3315123313',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2002/12/20',
            'Edad'=>'17',
            'Email'=>'jose129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Hombre',
            'Semestre'=>'TERCER SEMESTRE',
            'Grado'=>'SEGUNDO',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110023',
            'Nombre_A'=>'Susana Rubio Molina',
            'Nombre_P'=>'Jose Manuel Rubio Saez',
            'Nombre_M'=>'Lucia Molina Cano',
            'Domicilio'=>'Revolucion #56',
            'Telefono_T'=>'4371041857',
            'Telefono_A'=>'3315103313',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2002/02/20',
            'Edad'=>'17',
            'Email'=>'susan129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Mujer',
            'Semestre'=>'TERCER SEMESTRE',
            'Grado'=>'SEGUNDO',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110024',
            'Nombre_A'=>'Rosa Maria Torres Ortiz',
            'Nombre_P'=>'Alvaro Torres Rubio',
            'Nombre_M'=>'Lucy Ortiz Alarcon',
            'Domicilio'=>'Revolucion #6',
            'Telefono_T'=>'4371041859',
            'Telefono_A'=>'3315103314',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2002/02/22',
            'Edad'=>'17',
            'Email'=>'rous129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Mujer',
            'Semestre'=>'TERCER SEMESTRE',
            'Grado'=>'SEGUNDO',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110025',
            'Nombre_A'=>'Julia Martinez Lopez',
            'Nombre_P'=>'Angel Martinez Frausto',
            'Nombre_M'=>'Pilar Lopez Alaniz',
            'Domicilio'=>'Revolucion #65',
            'Telefono_T'=>'4371041860',
            'Telefono_A'=>'3315103315',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2002/02/29',
            'Edad'=>'17',
            'Email'=>'jul129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Mujer',
            'Semestre'=>'TERCER SEMESTRE',
            'Grado'=>'SEGUNDO',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110026',
            'Nombre_A'=>'Julian Martinez Lopez',
            'Nombre_P'=>'Angel Martinez Frausto',
            'Nombre_M'=>'Pilar Lopez Alaniz',
            'Domicilio'=>'Revolucion #65',
            'Telefono_T'=>'4371041861',
            'Telefono_A'=>'3315103316',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2002/02/29',
            'Edad'=>'17',
            'Email'=>'juli129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Mujer',
            'Semestre'=>'TERCER SEMESTRE',
            'Grado'=>'SEGUNDO',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110027',
            'Nombre_A'=>'Jaime Francisco Aguayo González',
            'Nombre_P'=>'Angel Aguayo Lopez',
            'Nombre_M'=>'Perla González Flores',
            'Domicilio'=>'Revolucion #66',
            'Telefono_T'=>'4371041862',
            'Telefono_A'=>'3315103317',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2002/02/30',
            'Edad'=>'17',
            'Email'=>'jfr129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Hombre',
            'Semestre'=>'TERCER SEMESTRE',
            'Grado'=>'SEGUNDO',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110028',
            'Nombre_A'=>'Miguel Alejandro Guerrero Paredes',
            'Nombre_P'=>'Avelardo Guerrero Ortiz',
            'Nombre_M'=>'Gabriela Paredes Fernandez',
            'Domicilio'=>'Revolucion #67',
            'Telefono_T'=>'4371041863',
            'Telefono_A'=>'3315103318',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2002/03/30',
            'Edad'=>'17',
            'Email'=>'mial129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Hombre',
            'Semestre'=>'TERCER SEMESTRE',
            'Grado'=>'SEGUNDO',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110029',
            'Nombre_A'=>'Jessica Moreno Rebeles',
            'Nombre_P'=>'Alejandro Moreno Reyes',
            'Nombre_M'=>'Flor Rebeles Vega',
            'Domicilio'=>'Revolucion #68',
            'Telefono_T'=>'4371041864',
            'Telefono_A'=>'3315103319',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2002/03/01',
            'Edad'=>'17',
            'Email'=>'jess129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Mujer',
            'Semestre'=>'TERCER SEMESTRE',
            'Grado'=>'SEGUNDO',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110030',
            'Nombre_A'=>'Itzel Nuñes García',
            'Nombre_P'=>'Pablo Nuñes Gutiérrez',
            'Nombre_M'=>'Itzamara García Sánchez',
            'Domicilio'=>'Revolucion #69',
            'Telefono_T'=>'4371041865',
            'Telefono_A'=>'3315103320',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2002/03/02',
            'Edad'=>'17',
            'Email'=>'itzi129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Mujer',
            'Semestre'=>'TERCER SEMESTRE',
            'Grado'=>'SEGUNDO',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110031',
            'Nombre_A'=>'Eduardo Parga Fuentes',
            'Nombre_P'=>'Lucio Parga Pérez',
            'Nombre_M'=>'Abigail Fuentes Jiménez',
            'Domicilio'=>'Revolucion #70',
            'Telefono_T'=>'4371041866',
            'Telefono_A'=>'3315103321',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2002/03/03',
            'Edad'=>'17',
            'Email'=>'edu129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Hombre',
            'Semestre'=>'TERCER SEMESTRE',
            'Grado'=>'SEGUNDO',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110032',
            'Nombre_A'=>'Enrique Acevedo Mejía',
            'Nombre_P'=>'Salomon Acevedo Pinedo',
            'Nombre_M'=>'Marcela Mejía Jiménez',
            'Domicilio'=>'Revolucion #71',
            'Telefono_T'=>'4371041867',
            'Telefono_A'=>'3315103322',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2002/03/04',
            'Edad'=>'17',
            'Email'=>'enria129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Hombre',
            'Semestre'=>'TERCER SEMESTRE',
            'Grado'=>'SEGUNDO',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110033',
            'Nombre_A'=>'Adolfo Vargas Aldrete',
            'Nombre_P'=>'Sual Vargas Franco',
            'Nombre_M'=>'Rocio Aldrete Figueroa',
            'Domicilio'=>'Revolucion #72',
            'Telefono_T'=>'4371041868',
            'Telefono_A'=>'3315103323',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2002/03/05',
            'Edad'=>'17',
            'Email'=>'bof129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Hombre',
            'Semestre'=>'QUINTO SEMESTRE',
            'Grado'=>'TERCER',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110034',
            'Nombre_A'=>'Alfredo Bautista Encina',
            'Nombre_P'=>'Sual Bautista Obrador',
            'Nombre_M'=>'Rosa Encina Calderon',
            'Domicilio'=>'Revolucion #73',
            'Telefono_T'=>'4371041869',
            'Telefono_A'=>'3315103324',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2002/03/06',
            'Edad'=>'17',
            'Email'=>'alfb129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Hombre',
            'Semestre'=>'QUINTO SEMESTRE',
            'Grado'=>'TERCER',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110035',
            'Nombre_A'=>'Karol Juliana Acuña Lopez',
            'Nombre_P'=>'Salvador Acuña Delgado',
            'Nombre_M'=>'Aurora Lopez Obregon',
            'Domicilio'=>'Revolucion #75',
            'Telefono_T'=>'4371041870',
            'Telefono_A'=>'3315103325',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2002/03/04',
            'Edad'=>'17',
            'Email'=>'kj129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Mujer',
            'Semestre'=>'QUINTO SEMESTRE',
            'Grado'=>'TERCER',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110036',
            'Nombre_A'=>'Yohana Delgado Contreras',
            'Nombre_P'=>'Raul Delgado Villa',
            'Nombre_M'=>'Alondra Contreras Chavez',
            'Domicilio'=>'Revolucion #76',
            'Telefono_T'=>'4371041871',
            'Telefono_A'=>'3315103326',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2002/03/05',
            'Edad'=>'17',
            'Email'=>'yoh129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Mujer',
            'Semestre'=>'QUINTO SEMESTRE',
            'Grado'=>'TERCER',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110037',
            'Nombre_A'=>'Gabriela Fernanda Gutiérrez Rodriguez',
            'Nombre_P'=>'Roman Gutiérrez Pineda',
            'Nombre_M'=>'Violeta Rodriguez Valdéz',
            'Domicilio'=>'Revolucion #77',
            'Telefono_T'=>'4371041872',
            'Telefono_A'=>'3315103327',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2002/03/06',
            'Edad'=>'17',
            'Email'=>'gfgr129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Mujer',
            'Semestre'=>'QUINTO SEMESTRE',
            'Grado'=>'TERCER',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110038',
            'Nombre_A'=>'Carol Dayana García Caballero',
            'Nombre_P'=>'Rodrigo García Garza',
            'Nombre_M'=>'Veronica Caballero Partida',
            'Domicilio'=>'Revolucion #78',
            'Telefono_T'=>'4371041873',
            'Telefono_A'=>'3315103328',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2002/03/07',
            'Edad'=>'17',
            'Email'=>'carolday129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Mujer',
            'Semestre'=>'QUINTO SEMESTRE',
            'Grado'=>'TERCER',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110039',
            'Nombre_A'=>'Sofia Jaramillo Figueroa',
            'Nombre_P'=>'Socrates Jaramillo Ramos',
            'Nombre_M'=>'Luna Figueroa Alvarez',
            'Domicilio'=>'Revolucion #79',
            'Telefono_T'=>'4371041874',
            'Telefono_A'=>'3315103329',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2002/03/08',
            'Edad'=>'17',
            'Email'=>'sofj129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Mujer',
            'Semestre'=>'QUINTO SEMESTRE',
            'Grado'=>'TERCER',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110040',
            'Nombre_A'=>'Natalia Ramirez Melgarejo',
            'Nombre_P'=>'Jose Ramirez Pinto',
            'Nombre_M'=>'Luz Melgarejo Soto',
            'Domicilio'=>'Revolucion #80',
            'Telefono_T'=>'4371041875',
            'Telefono_A'=>'3315103330',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2002/03/09',
            'Edad'=>'17',
            'Email'=>'nat129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Mujer',
            'Semestre'=>'QUINTO SEMESTRE',
            'Grado'=>'TERCER',
            'Estado'=>'Regular'
        ]);


        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110041',
            'Nombre_A'=>'Javier Rojas Salazar',
            'Nombre_P'=>'Jaime Rojas Rojas',
            'Nombre_M'=>'Monica Salazar Beltran',
            'Domicilio'=>'Revolucion #81',
            'Telefono_T'=>'4371041876',
            'Telefono_A'=>'3315103331',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2002/03/10',
            'Edad'=>'17',
            'Email'=>'javr129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Hombre',
            'Semestre'=>'QUINTO SEMESTRE',
            'Grado'=>'TERCER',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110042',
            'Nombre_A'=>'Omar David Avila Diaz',
            'Nombre_P'=>'Leonardo Avila Camacho',
            'Nombre_M'=>'Monica Maria Diaz Salinas',
            'Domicilio'=>'Revolucion #82',
            'Telefono_T'=>'4371041877',
            'Telefono_A'=>'3315103332',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2002/03/11',
            'Edad'=>'17',
            'Email'=>'omdv129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Hombre',
            'Semestre'=>'QUINTO SEMESTRE',
            'Grado'=>'TERCER',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110043',
            'Nombre_A'=>'Alexander Alvarado Angulo',
            'Nombre_P'=>'Leonel Alvarado Romo',
            'Nombre_M'=>'Maria del Socorro Angulo Sotelo',
            'Domicilio'=>'Revolucion #83',
            'Telefono_T'=>'4371041878',
            'Telefono_A'=>'3315103333',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2002/03/12',
            'Edad'=>'17',
            'Email'=>'aaa129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Hombre',
            'Semestre'=>'QUINTO SEMESTRE',
            'Grado'=>'TERCER',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110044',
            'Nombre_A'=>'Kevin Blanco Anaya',
            'Nombre_P'=>'Macario Blanco Pineda',
            'Nombre_M'=>'Maria Auxilio Pineda Salas',
            'Domicilio'=>'Revolucion #84',
            'Telefono_T'=>'4371041879',
            'Telefono_A'=>'3315103334',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2002/03/13',
            'Edad'=>'17',
            'Email'=>'kevb129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Hombre',
            'Semestre'=>'QUINTO SEMESTRE',
            'Grado'=>'TERCER',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110045',
            'Nombre_A'=>'Gustavo Castillo Vega',
            'Nombre_P'=>'Mariano Castillo González',
            'Nombre_M'=>'Engracias Vega Fuentes',
            'Domicilio'=>'Revolucion #85',
            'Telefono_T'=>'4371041880',
            'Telefono_A'=>'3315103335',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2002/03/14',
            'Edad'=>'17',
            'Email'=>'guscast129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Hombre',
            'Semestre'=>'QUINTO SEMESTRE',
            'Grado'=>'TERCER',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110046',
            'Nombre_A'=>'Gustavo Castillo Vega',
            'Nombre_P'=>'Mariano Castillo González',
            'Nombre_M'=>'Engracia Vega Fuentes',
            'Domicilio'=>'Revolucion #85',
            'Telefono_T'=>'4371041880',
            'Telefono_A'=>'3315103335',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2002/03/14',
            'Edad'=>'17',
            'Email'=>'guscast129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Hombre',
            'Semestre'=>'QUINTO SEMESTRE',
            'Grado'=>'TERCER',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110047',
            'Nombre_A'=>'Valentin Chacon Barrera',
            'Nombre_P'=>'Martin Cachon Herrera',
            'Nombre_M'=>'Enriqueta Barrera Gómez',
            'Domicilio'=>'Revolucion #86',
            'Telefono_T'=>'4371041881',
            'Telefono_A'=>'3315103324',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2002/03/14',
            'Edad'=>'17',
            'Email'=>'vc129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Hombre',
            'Semestre'=>'QUINTO SEMESTRE',
            'Grado'=>'TERCER',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110048',
            'Nombre_A'=>'Gabino Barrera Vazquez',
            'Nombre_P'=>'Lucio Barrera Hernández',
            'Nombre_M'=>'Emma Vazquez Aguilar',
            'Domicilio'=>'Revolucion #87',
            'Telefono_T'=>'4371041882',
            'Telefono_A'=>'3315103325',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2002/03/15',
            'Edad'=>'17',
            'Email'=>'gabba129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Hombre',
            'Semestre'=>'QUINTO SEMESTRE',
            'Grado'=>'TERCER',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110049',
            'Nombre_A'=>'Petronilo Bonilla Verdaguer',
            'Nombre_P'=>'Lamberto Bonilla Cardona',
            'Nombre_M'=>'Mayra Verdaguer Elizalde',
            'Domicilio'=>'Revolucion #88',
            'Telefono_T'=>'4371041883',
            'Telefono_A'=>'3315103326',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2002/03/16',
            'Edad'=>'17',
            'Email'=>'petbo129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Hombre',
            'Semestre'=>'QUINTO SEMESTRE',
            'Grado'=>'TERCER',
            'Estado'=>'Regular'
        ]);

        DB::table('alumnos')->insert([
            'Clave_A'=>'1900110050',
            'Nombre_A'=>'Petronilo Bonilla Verdaguer',
            'Nombre_P'=>'Lamberto Bonilla Carmin',
            'Nombre_M'=>'Mayra Verdaguer Sanchez',
            'Domicilio'=>'Revolucion #89',
            'Telefono_T'=>'4371041884',
            'Telefono_A'=>'3315103327',
            'Poblacion'=>'Tlaltenango',
            'Municipio'=>'Tlaltenango',
            'Fecha_Nac'=>'2002/03/17',
            'Edad'=>'17',
            'Email'=>'petboni129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Hombre',
            'Semestre'=>'QUINTO SEMESTRE',
            'Grado'=>'TERCER',
            'Estado'=>'Regular'
        ]);


    }
}
