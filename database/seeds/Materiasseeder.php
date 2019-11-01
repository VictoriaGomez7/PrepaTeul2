<?php

use Illuminate\Database\Seeder;

class Materiasseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materias')->insert([
	            'Clave_M'=>'FB-MAT1',
	            'Tipo'=>'Formación Básica',
	            'Bachillerato'=>null,
	            'Nombre'=>'Matematícas I',
	            'Semestre'=>'PRIMER SEMESTRE',
	            'Horas'=>5
        ]);


        DB::table('materias')->insert([
	            'Clave_M'=>'FB-QUI1',
	            'Tipo'=>'Formación Básica',
	            'Bachillerato'=>null,
	            'Nombre'=>'Química I',
	            'Semestre'=>'PRIMER SEMESTRE',
	            'Horas'=>5
        ]);

        DB::table('materias')->insert([
	            'Clave_M'=>'FB-ETI1',
	            'Tipo'=>'Formación Básica',
	            'Bachillerato'=>null,
	            'Nombre'=>'Ética I',
	            'Semestre'=>'PRIMER SEMESTRE',
	            'Horas'=>3
        ]);

        DB::table('materias')->insert([
	           'Clave_M'=>'FB-MEI',
	           'Tipo'=>'Formación Básica',
	           'Bachillerato'=>null,
	           'Nombre'=>'Metodologia de la Investigacón',
	           'Semestre'=>'PRIMER SEMESTRE',
	           'Horas'=>3
        ]);

        DB::table('materias')->insert([
            'Clave_M'=>'FB-TLR1',
            'Tipo'=>'Formación Básica',
            'Bachillerato'=>null,
            'Nombre'=>'Taller de Lectura y Redacción I',
            'Semestre'=>'PRIMER SEMESTRE',
            'Horas'=>4
        ]);

        DB::table('materias')->insert([
            'Clave_M'=>'FB-ING1',
            'Tipo'=>'Formación Básica',
            'Bachillerato'=>null,
            'Nombre'=>'Ingles I',
            'Semestre'=>'PRIMER SEMESTRE',
            'Horas'=>3
        ]);


        DB::table('materias')->insert([
            'Clave_M'=>'FB-INF1',
            'Tipo'=>'Formación Básica',
            'Bachillerato'=>null,
            'Nombre'=>'Informatíca I',
            'Semestre'=>'PRIMER SEMESTRE',
            'Horas'=>3
        ]);

        DB::table('materias')->insert([
            'Clave_M'=>'AP-ORE1',
            'Tipo'=>'Actividades Paraescolares',
            'Bachillerato'=>null,
            'Nombre'=>'Orientación Educativa I',
            'Semestre'=>'PRIMER SEMESTRE',
            'Horas'=>2
        ]);

        DB::table('materias')->insert([
            'Clave_M'=>'AP-ADR1',
            'Tipo'=>'Actividades Paraescolares',
            'Bachillerato'=>null,
            'Nombre'=>'Actividades Deportivas y Recreativas I',
            'Semestre'=>'PRIMER SEMESTRE',
            'Horas'=>1
        ]);

        DB::table('materias')->insert([
            'Clave_M'=>'AP-AAC1',
            'Tipo'=>'Actividades Paraescolares',
            'Bachillerato'=>null,
            'Nombre'=>'Actividades Artisticas y Culturales I',
            'Semestre'=>'PRIMER SEMESTRE',
            'Horas'=>1
        ]);
        //Segundo semestre
        DB::table('materias')->insert([
	        'Clave_M'=>'FB-MAT2',
	        'Tipo'=>'Formación Básica',
	        'Bachillerato'=>null,
	        'Nombre'=>'Matemáticas II',
	        'Semestre'=>'SEGUNDO SEMESTRE',
	        'Horas'=>5
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'FB-QUI2',
	        'Tipo'=>'Formación Básica',
	        'Bachillerato'=>null,
	        'Nombre'=>'Química II',
	        'Semestre'=>'SEGUNDO SEMESTRE',
	        'Horas'=>5
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'FB-ETI2',
	        'Tipo'=>'Formación Básica',
	        'Bachillerato'=>null,
	        'Nombre'=>'Ética II',
	        'Semestre'=>'SEGUNDO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'FB-ILCS',
	        'Tipo'=>'Formación Básica',
	        'Bachillerato'=>null,
	        'Nombre'=>'Introducción a las Ciencias Sociales',
	        'Semestre'=>'SEGUNDO SEMESTRE',
	        'Horas'=>3
	     ]);

        DB::table('materias')->insert([
	        'Clave_M'=>'FB-TLR2',
	        'Tipo'=>'Formación Básica',
	        'Bachillerato'=>null,
	        'Nombre'=>'Taller de Lectura y Redacción II',
	        'Semestre'=>'SEGUNDO SEMESTRE',
	        'Horas'=>4
        ]);

	  	DB::table('materias')->insert([
	        'Clave_M'=>'FB-ING2',
	        'Tipo'=>'Formación Básica',
	        'Bachillerato'=>null,
	        'Nombre'=>'Ingles II',
	        'Semestre'=>'SEGUNDO SEMESTRE',
	        'Horas'=>3
        ]);

        DB::table('materias')->insert([
	        'Clave_M'=>'FB-INF2',
	        'Tipo'=>'Formación Básica',
	        'Bachillerato'=>null,
	        'Nombre'=>'Informatíca II',
	        'Semestre'=>'SEGUNDO SEMESTRE',
	        'Horas'=>3
        ]);

        DB::table('materias')->insert([
        	'Clave_M'=>'AP-ORE2',
	        'Tipo'=>'Actividades Paraescolares',
	        'Bachillerato'=>null,
	        'Nombre'=>'Orientación Educativa II',
	        'Semestre'=>'SEGUNDO SEMESTRE',
	        'Horas'=>2
        ]);

        DB::table('materias')->insert([
        	'Clave_M'=>'AP-ADR2',
	        'Tipo'=>'Actividades Paraescolares',
	        'Bachillerato'=>null,
	        'Nombre'=>'Actividades Deportivas y Recreativas II',
	        'Semestre'=>'SEGUNDO SEMESTRE',
	        'Horas'=>1
        ]);

        DB::table('materias')->insert([
        	'Clave_M'=>'AP-AAC2',
	        'Tipo'=>'Actividades Paraescolares',
	        'Bachillerato'=>null,
	        'Nombre'=>'Actividades Artísticas y Culturales II',
	        'Semestre'=>'SEGUNDO SEMESTRE',
	        'Horas'=>1
        ]);
        //Tercer semestre
        DB::table('materias')->insert([
        	'Clave_M'=>'FB-MAT3',
	        'Tipo'=>'Formación Básica',
	        'Bachillerato'=>null,
	        'Nombre'=>'Matemáticas III',
	        'Semestre'=>'TERCER SEMESTRE',
	        'Horas'=>5
        ]);
        DB::table('materias')->insert([
        	'Clave_M'=>'FB-BIO1',
	        'Tipo'=>'Formación Básica',
	        'Bachillerato'=>null,
	        'Nombre'=>'Biología I',
	        'Semestre'=>'TERCER SEMESTRE',
	        'Horas'=>4
        ]);
        DB::table('materias')->insert([
        	'Clave_M'=>'FB-FIS1',
	        'Tipo'=>'Formación Básica',
	        'Bachillerato'=>null,
	        'Nombre'=>'Física I',
	        'Semestre'=>'TERCER SEMESTRE',
	        'Horas'=>5
        ]);
        DB::table('materias')->insert([
        	'Clave_M'=>'FB-HIM1',
	        'Tipo'=>'Formación Básica',
	        'Bachillerato'=>null,
	        'Nombre'=>'Historia de México I',
	        'Semestre'=>'TERCER SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
        	'Clave_M'=>'FB-LIT1',
	        'Tipo'=>'Formación Básica',
	        'Bachillerato'=>null,
	        'Nombre'=>'Literatura I',
	        'Semestre'=>'TERCER SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
        	'Clave_M'=>'FB-ING3',
	        'Tipo'=>'Formación Básica',
	        'Bachillerato'=>null,
	        'Nombre'=>'Ingles III',
	        'Semestre'=>'TERCER SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
        	'Clave_M'=>'FT-TUR_3',
	        'Tipo'=>'Formación Para El Trabajo',
	        'Bachillerato'=>null,
	        'Nombre'=>'Turismo',
	        'Semestre'=>'TERCER SEMESTRE',
	        'Horas'=>7
        ]);
        DB::table('materias')->insert([
        	'Clave_M'=>'AP-ORE3',
	        'Tipo'=>'Actividades Paraescolares',
	        'Bachillerato'=>null,
	        'Nombre'=>'Orientación Educativa III',
	        'Semestre'=>'TERCER SEMESTRE',
	        'Horas'=>1
        ]);
        DB::table('materias')->insert([
        	'Clave_M'=>'AP-ADR3',
	        'Tipo'=>'Actividades Paraescolares',
	        'Bachillerato'=>null,
	        'Nombre'=>'Actividades Deportivas y Recreativas III',
	        'Semestre'=>'TERCER SEMESTRE',
	        'Horas'=>1
        ]);
        DB::table('materias')->insert([
        	'Clave_M'=>'AP-AAC3',
	        'Tipo'=>'Actividades Paraescolares',
	        'Bachillerato'=>null,
	        'Nombre'=>'Actividades Artísticas y Culturales III',
	        'Semestre'=>'TERCER SEMESTRE',
	        'Horas'=>1
        ]);
        //Cuarto semestre
        DB::table('materias')->insert([
        	'Clave_M'=>'FB-MAT4',
	        'Tipo'=>'Formación Básica',
	        'Bachillerato'=>null,
	        'Nombre'=>'Matemáticas IV',
	        'Semestre'=>'CUARTO SEMESTRE',
	        'Horas'=>5
        ]);
        DB::table('materias')->insert([
        	'Clave_M'=>'FB-BIO2',
	        'Tipo'=>'Formación Básica',
	        'Bachillerato'=>null,
	        'Nombre'=>'Biología II',
	        'Semestre'=>'CUARTO SEMESTRE',
	        'Horas'=>4
        ]);
        DB::table('materias')->insert([
        	'Clave_M'=>'FB-FIS2',
	        'Tipo'=>'Formación Básica',
	        'Bachillerato'=>null,
	        'Nombre'=>'Física II',
	        'Semestre'=>'CUARTO SEMESTRE',
	        'Horas'=>5
        ]);

        DB::table('materias')->insert([
        	'Clave_M'=>'FB-HIM2',
	        'Tipo'=>'Formación Básica',
	        'Bachillerato'=>null,
	        'Nombre'=>'Historia de México II',
	        'Semestre'=>'CUARTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
        	'Clave_M'=>'FB-LIT2',
	        'Tipo'=>'Formación Básica',
	        'Bachillerato'=>null,
	        'Nombre'=>'Literatura II',
	        'Semestre'=>'CUARTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
        	'Clave_M'=>'FB-ING4',
	        'Tipo'=>'Formación Básica',
	        'Bachillerato'=>null,
	        'Nombre'=>'Ingles IV',
	        'Semestre'=>'CUARTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'FT-TUR_4',
	        'Tipo'=>'Formación Para El Trabajo',
	        'Bachillerato'=>null,
	        'Nombre'=>'Turismo',
	        'Semestre'=>'CUARTO SEMESTRE',
	        'Horas'=>7
        ]);

        DB::table('materias')->insert([
        	'Clave_M'=>'AP-ORE4',
	        'Tipo'=>'Actividades Paraescolares',
	        'Bachillerato'=>null,
	        'Nombre'=>'Orientación Educativa IV',
	        'Semestre'=>'CUARTO SEMESTRE',
	        'Horas'=>1
        ]);
        DB::table('materias')->insert([
        	'Clave_M'=>'AP-ADR4',
	        'Tipo'=>'Actividades Paraescolares',
	        'Bachillerato'=>null,
	        'Nombre'=>'Actividades Deportivas y Recreativas IV',
	        'Semestre'=>'CUARTO SEMESTRE',
	        'Horas'=>1
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'AP-AAC4',
	        'Tipo'=>'Actividades Paraescolares',
	        'Bachillerato'=>null,
	        'Nombre'=>'Actividades Artísticas y Culturales IV',
	        'Semestre'=>'CUARTO SEMESTRE',
	        'Horas'=>1
        ]);
        //Quinto semestre
        DB::table('materias')->insert([
        	'Clave_M'=>'FB-ETG',
	        'Tipo'=>'Formación Básica',
	        'Bachillerato'=>null,
	        'Nombre'=>'Etimologías Grecolatinas',
	        'Semestre'=>'QUINTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
        	'Clave_M'=>'FB-GEO',
	        'Tipo'=>'Formación Básica',
	        'Bachillerato'=>null,
	        'Nombre'=>'Geografía',
	        'Semestre'=>'QUINTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
        	'Clave_M'=>'FB-ESM',
	        'Tipo'=>'Formación Básica',
	        'Bachillerato'=>null,
	        'Nombre'=>'Estructura Socioeconomica de México',
	        'Semestre'=>'QUINTO SEMESTRE',
	        'Horas'=>3
        ]);


        DB::table('materias')->insert([
	        'Clave_M'=>'FM-TSF1',
	        'Tipo'=>'Formación Propedéutica',
	        'Bachillerato'=>'Físico Matemática',
	        'Nombre'=>'Temas Selectos de Física I',
	        'Semestre'=>'QUINTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'FM-CAD',
	        'Tipo'=>'Formación Propedéutica',
	        'Bachillerato'=>'Físico Matemática',
	        'Nombre'=>'Cálculo Diferencial',
	        'Semestre'=>'QUINTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'FM-SOC1',
	        'Tipo'=>'Formación Propedéutica',
	        'Bachillerato'=>'Físico Matemática',
	        'Nombre'=>'Sociología I',
	        'Semestre'=>'QUINTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'FM-PRE1',
	        'Tipo'=>'Formación Propedéutica',
	        'Bachillerato'=>'Físico Matemática',
	        'Nombre'=>'Probabilidad y Estadística I',
	        'Semestre'=>'QUINTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'QB-TSQ1',
	        'Tipo'=>'Formación Propedéutica',
	        'Bachillerato'=>'Químico Biológica',
	        'Nombre'=>'Temas Selectos de Química I',
	        'Semestre'=>'QUINTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'QB-TSB1',
	        'Tipo'=>'Formación Propedéutica',
	        'Bachillerato'=>'Químico Biológica',
	        'Nombre'=>'Temas Selectos de Biologída I',
	        'Semestre'=>'QUINTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'QB-CIS1',
	        'Tipo'=>'Formación Propedéutica',
	        'Bachillerato'=>'Químico Biológica',
	        'Nombre'=>'Ciencias de la Salud I',
	        'Semestre'=>'QUINTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'QB-PRE1',
	        'Tipo'=>'Formación Propedéutica',
	        'Bachillerato'=>'Químico Biológica',
	        'Nombre'=>'Probabilidad y Estadística I',
	        'Semestre'=>'QUINTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'HCS-SOC1',
	        'Tipo'=>'Formación Propedéutica',
	        'Bachillerato'=>'Humanidades y Ciencias Sociales',
	        'Nombre'=>'Sociología I',
	        'Semestre'=>'QUINTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'HCS-PSI1',
	        'Tipo'=>'Formación Propedéutica',
	        'Bachillerato'=>'Humanidades y Ciencias Sociales',
	        'Nombre'=>'Psicología I',
	        'Semestre'=>'QUINTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'HCS-DER1',
	        'Tipo'=>'Formación Propedéutica',
	        'Bachillerato'=>'Humanidades y Ciencias Sociales',
	        'Nombre'=>'Derecho I',
	        'Semestre'=>'QUINTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'HCS-PRE1',
	        'Tipo'=>'Formación Propedéutica',
	        'Bachillerato'=>'Humanidades y Ciencias Sociales',
	        'Nombre'=>'Probabilidad y Estadística I',
	        'Semestre'=>'QUINTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'EA-ADM1',
	        'Tipo'=>'Formación Propedéutica',
	        'Bachillerato'=>'Económico Administrativa',
	        'Nombre'=>'Administración I',
	        'Semestre'=>'QUINTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'EA-ECO1',
	        'Tipo'=>'Formación Propedéutica',
	        'Bachillerato'=>'Económico Administrativa',
	        'Nombre'=>'Economía I',
	        'Semestre'=>'QUINTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'EA-MAF1',
	        'Tipo'=>'Formación Propedéutica',
	        'Bachillerato'=>'Económico Administrativa',
	        'Nombre'=>'Matemáticas Financieras I',
	        'Semestre'=>'QUINTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'EA-PRE1',
	        'Tipo'=>'Formación Propedéutica',
	        'Bachillerato'=>'Económico Administrativa',
	        'Nombre'=>'Probabilidad y Estadística I',
	        'Semestre'=>'QUINTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'FT-TUR_5',
	        'Tipo'=>'Formación Para El Trabajo',
	        'Bachillerato'=>null,
	        'Nombre'=>'Turismo',
	        'Semestre'=>'QUINTO SEMESTRE',
	        'Horas'=>7
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'AP-ORE5',
	        'Tipo'=>'Actividades Paraescolares',
	        'Bachillerato'=>null,
	        'Nombre'=>'Orientación Educativa V',
	        'Semestre'=>'QUINTO SEMESTRE',
	        'Horas'=>1
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'AP-ADR5',
	        'Tipo'=>'Actividades Paraescolares',
	        'Bachillerato'=>null,
	        'Nombre'=>'Actividades Deportivas y Recreativas V',
	        'Semestre'=>'QUINTO SEMESTRE',
	        'Horas'=>1
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'AP-AAC5',
	        'Tipo'=>'Actividades Paraescolares',
	        'Bachillerato'=>null,
	        'Nombre'=>'Actividades Artísticas y Culturales V',
	        'Semestre'=>'QUINTO SEMESTRE',
	        'Horas'=>1
        ]);
        //Sexto Semestre
        DB::table('materias')->insert([
        	'Clave_M'=>'FB-FIL',
	        'Tipo'=>'Formación Básica',
	        'Bachillerato'=>null,
	        'Nombre'=>'Filosofia',
	        'Semestre'=>'SEXTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
        	'Clave_M'=>'FB-EMA',
	        'Tipo'=>'Formación Básica',
	        'Bachillerato'=>null,
	        'Nombre'=>'Ecologia y Medio Ambiente',
	        'Semestre'=>'SEXTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
        	'Clave_M'=>'FB-HUC',
	        'Tipo'=>'Formación Básica',
	        'Bachillerato'=>null,
	        'Nombre'=>'Historia Universal Contemporanea',
	        'Semestre'=>'SEXTO SEMESTRE',
	        'Horas'=>3
        ]);


        DB::table('materias')->insert([
	        'Clave_M'=>'FM-TSF2',
	        'Tipo'=>'Formación Propedéutica',
	        'Bachillerato'=>'Físico Matemática',
	        'Nombre'=>'Temas Selectos de Física II',
	        'Semestre'=>'SEXTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'FM-CAI',
	        'Tipo'=>'Formación Propedéutica',
	        'Bachillerato'=>'Físico Matemática',
	        'Nombre'=>'Cálculo Integral',
	        'Semestre'=>'SEXTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'FM-SOC2',
	        'Tipo'=>'Formación Propedéutica',
	        'Bachillerato'=>'Físico Matemática',
	        'Nombre'=>'Sociología II',
	        'Semestre'=>'SEXTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'FM-PRE2',
	        'Tipo'=>'Formación Propedéutica',
	        'Bachillerato'=>'Físico Matemática',
	        'Nombre'=>'Probabilidad y Estadística II',
	        'Semestre'=>'SEXTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'QB-TSQ2',
	        'Tipo'=>'Formación Propedéutica',
	        'Bachillerato'=>'Químico Biológica',
	        'Nombre'=>'Temas Selectos de Química II',
	        'Semestre'=>'SEXTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'QB-TSB2',
	        'Tipo'=>'Formación Propedéutica',
	        'Bachillerato'=>'Químico Biológica',
	        'Nombre'=>'Temas Selectos de Biología II',
	        'Semestre'=>'SEXTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'QB-CIS2',
	        'Tipo'=>'Formación Propedéutica',
	        'Bachillerato'=>'Químico Biológica',
	        'Nombre'=>'Ciencias de la Salud II',
	        'Semestre'=>'SEXTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'QB-PRE2',
	        'Tipo'=>'Formación Propedéutica',
	        'Bachillerato'=>'Químico Biológica',
	        'Nombre'=>'Probabilidad y Estadística II',
	        'Semestre'=>'SEXTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'HCS-SOC2',
	        'Tipo'=>'Formación Propedéutica',
	        'Bachillerato'=>'Humanidades y Ciencias Sociales',
	        'Nombre'=>'Sociología II',
	        'Semestre'=>'SEXTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'HCS-PSI2',
	        'Tipo'=>'Formación Propedéutica',
	        'Bachillerato'=>'Humanidades y Ciencias Sociales',
	        'Nombre'=>'Psicología II',
	        'Semestre'=>'SEXTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'HCS-DER2',
	        'Tipo'=>'Formación Propedéutica',
	        'Bachillerato'=>'Humanidades y Ciencias Sociales',
	        'Nombre'=>'Derecho II',
	        'Semestre'=>'SEXTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'HCS-PRE2',
	        'Tipo'=>'Formación Propedéutica',
	        'Bachillerato'=>'Humanidades y Ciencias Sociales',
	        'Nombre'=>'Probabilidad y Estadística II',
	        'Semestre'=>'SEXTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'EA-ADM2',
	        'Tipo'=>'Formación Propedéutica',
	        'Bachillerato'=>'Económico Administrativa',
	        'Nombre'=>'Administración II',
	        'Semestre'=>'SEXTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'EA-ECO2',
	        'Tipo'=>'Formación Propedéutica',
	        'Bachillerato'=>'Económico Administrativa',
	        'Nombre'=>'Economía II',
	        'Semestre'=>'SEXTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'EA-MAF2',
	        'Tipo'=>'Formación Propedéutica',
	        'Bachillerato'=>'Económico Administrativa',
	        'Nombre'=>'Matemáticas Financieras II',
	        'Semestre'=>'SEXTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'EA-PRE2',
	        'Tipo'=>'Formación Propedéutica',
	        'Bachillerato'=>'Económico Administrativa',
	        'Nombre'=>'Probabilidad y Estadística II',
	        'Semestre'=>'SEXTO SEMESTRE',
	        'Horas'=>3
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'FT-TUR_6',
	        'Tipo'=>'Formación Para El Trabajo',
	        'Bachillerato'=>null,
	        'Nombre'=>'Turismo',
	        'Semestre'=>'SEXTO SEMESTRE',
	        'Horas'=>7
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'AP-ORE6',
	        'Tipo'=>'Actividades Paraescolares',
	        'Bachillerato'=>null,
	        'Nombre'=>'Orientación Educativa VI',
	        'Semestre'=>'SEXTO SEMESTRE',
	        'Horas'=>1
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'AP-ADR6',
	        'Tipo'=>'Actividades Paraescolares',
	        'Bachillerato'=>null,
	        'Nombre'=>'Actividades Deportivas y Recreativas VI',
	        'Semestre'=>'SEXTO SEMESTRE',
	        'Horas'=>1
        ]);
        DB::table('materias')->insert([
	        'Clave_M'=>'AP-AAC6',
	        'Tipo'=>'Actividades Paraescolares',
	        'Bachillerato'=>null,
	        'Nombre'=>'Actividades Art\u00edsticas y Culturales VI',
	        'Semestre'=>'SEXTO SEMESTRE',
	        'Horas'=>1
        ]);

        DB::table('materias')->insert([
	        'Clave_M'=>'FT-INF_3',
	        'Tipo'=>'Formación Para El Trabajo',
	        'Bachillerato'=>null,
	        'Nombre'=>'Informatíca',
	        'Semestre'=>'TERCER SEMESTRE',
	        'Horas'=>1
        ]);

        DB::table('materias')->insert([
          'Clave_M'=>'FT-HSC_3',
          'Tipo'=>'Formación Para El Trabajo',
          'Bachillerato'=>null,
          'Nombre'=>'Higiene y Salud Comunitaria',
          'Semestre'=>'TERCER SEMESTRE',
          'Horas'=>1
        ]);

        DB::table('materias')->insert([
          'Clave_M'=>'FT-INF_4',
          'Tipo'=>'Formación Para El Trabajo',
          'Bachillerato'=>null,
          'Nombre'=>'Informatíca',
          'Semestre'=>'CUARTO SEMESTRE',
          'Horas'=>1
        ]);

        DB::table('materias')->insert([
          'Clave_M'=>'FT-HSC_4',
          'Tipo'=>'Formación Para El Trabajo',
          'Bachillerato'=>null,
          'Nombre'=>'Higiene y Salud Comunitaria',
          'Semestre'=>'CUARTO SEMESTRE',
          'Horas'=>1
        ]);


        DB::table('materias')->insert([
          'Clave_M'=>'FT-INF_5',
          'Tipo'=>'Formación Para El Trabajo',
          'Bachillerato'=>null,
          'Nombre'=>'Informatíca',
          'Semestre'=>'QUINTO SEMESTRE',
          'Horas'=>1
        ]);

        DB::table('materias')->insert([
          'Clave_M'=>'FT-HSC_5',
          'Tipo'=>'Formación Para El Trabajo',
          'Bachillerato'=>null,
          'Nombre'=>'Higiene y Salud Comunitaria',
          'Semestre'=>'QUINTO SEMESTRE',
          'Horas'=>1
        ]);


          DB::table('materias')->insert([
            'Clave_M'=>'FT-INF_6',
            'Tipo'=>'Formación Para El Trabajo',
            'Bachillerato'=>null,
            'Nombre'=>'Informatíca',
            'Semestre'=>'SEXTO SEMESTRE',
            'Horas'=>1
          ]);

          DB::table('materias')->insert([
            'Clave_M'=>'FT-HSC_6',
            'Tipo'=>'Formación Para El Trabajo',
            'Bachillerato'=>null,
            'Nombre'=>'Higiene y Salud Comunitaria',
            'Semestre'=>'SEXTO SEMESTRE',
            'Horas'=>1
          ]);
    }
}
