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
            'Clave_A'=>'19008002',
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
            'Clave_A'=>'19008003',
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
            'Clave_A'=>'19008004',
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
            'Clave_A'=>'19008005',
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
            'Clave_A'=>'19008006',
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
            'Clave_A'=>'19008007',
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
            'Clave_A'=>'19008008',
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
            'Clave_A'=>'19008009',
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
            'Clave_A'=>'19008010',
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
            'Clave_A'=>'19008011',
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
            'Clave_A'=>'19008012',
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
            'Clave_A'=>'19008013',
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
            'Clave_A'=>'19008014',
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
            'Clave_A'=>'19008015',
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
            'Clave_A'=>'19008016',
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
            'Clave_A'=>'19008017',
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
            'Clave_A'=>'19008018',
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
            'Clave_A'=>'19008019',
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
            'Clave_A'=>'19008020',
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
            'Clave_A'=>'19008021',
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
            'Clave_A'=>'19008022',
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
            'Clave_A'=>'19008023',
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
            'Clave_A'=>'19008024',
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
            'Clave_A'=>'19008025',
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
            'Clave_A'=>'19008026',
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
            'Clave_A'=>'19008027',
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
            'Clave_A'=>'19008028',
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
            'Clave_A'=>'19008029',
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
            'Clave_A'=>'19008030',
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
            'Clave_A'=>'19008031',
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
            'Clave_A'=>'19008032',
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
            'Clave_A'=>'19008033',
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
            'Email'=>'enria129@gmail.com',
            'Curp'=>'HOTJ980131NCYRN07',
            'NSS'=>'null',
            'Sexo'=>'Hombre',
            'Semestre'=>'QUINTO SEMESTRE',
            'Grado'=>'TERCER',
            'Estado'=>'Regular'
        ]);


    }
}
