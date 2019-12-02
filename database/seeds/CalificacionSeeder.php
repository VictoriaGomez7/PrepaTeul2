<?php

use Illuminate\Database\Seeder;

class CalificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('calificaciones_parciales')->insert([
            'Clave_A'=>'1900110033',
            'ClaveM'=>'FB-MAT1',
            'Grupo'=>'B',
            'Parcial1'=>8.00,
            'Parcial2'=>8.00,
            'Semestral'=>8.00,
            'Semestre'=>'PRIMER SEMESTRE',
            'Año'=>'2017'
        ]);

        DB::table('calificaciones_parciales')->insert([
            'Clave_A'=>'1900110033',
            'ClaveM'=>'FB-QUI1',
            'Grupo'=>'B',
            'Parcial1'=>8.00,
            'Parcial2'=>8.00,
            'Semestral'=>8.00,
            'Semestre'=>'PRIMER SEMESTRE',
            'Año'=>'2017'
  
        ]);

        DB::table('calificaciones_parciales')->insert([
            'Clave_A'=>'1900110033',
            'ClaveM'=>'FB-ETI1',
            'Grupo'=>'B',
            'Parcial1'=>8.00,
            'Parcial2'=>8.00,
            'Semestral'=>8.00,
            'Semestre'=>'PRIMER SEMESTRE',
            'Año'=>'2017'
  
        ]);

        DB::table('calificaciones_parciales')->insert([
            'Clave_A'=>'1900110033',
            'ClaveM'=>'FB-MEI',
            'Grupo'=>'B',
            'Parcial1'=>8.00,
            'Parcial2'=>8.00,
            'Semestral'=>8.00,
            'Semestre'=>'PRIMER SEMESTRE',
            'Año'=>'2017'
  
        ]);
        DB::table('calificaciones_parciales')->insert([
            'Clave_A'=>'1900110033',
            'ClaveM'=>'FB-TLR1',
            'Grupo'=>'B',
            'Parcial1'=>8.00,
            'Parcial2'=>8.00,
            'Semestral'=>8.00,
            'Semestre'=>'PRIMER SEMESTRE',
            'Año'=>'2017'
  
        ]);

        DB::table('calificaciones_parciales')->insert([
            'Clave_A'=>'1900110033',
            'ClaveM'=>'FB-ING1',
            'Grupo'=>'B',
            'Parcial1'=>8.00,
            'Parcial2'=>8.00,
            'Semestral'=>8.00,
            'Semestre'=>'PRIMER SEMESTRE',
            'Año'=>'2017'
        ]);

        DB::table('calificaciones_parciales')->insert([
            'Clave_A'=>'1900110033',
            'ClaveM'=>'FB-INF1',
            'Grupo'=>'A',
            'Parcial1'=>8.00,
            'Parcial2'=>8.00,
            'Semestral'=>8.00,
            'Semestre'=>'PRIMER SEMESTRE',
  			'Año'=>'2017'
        ]);

        DB::table('calificaciones_parciales')->insert([
            'Clave_A'=>'1900110033',
            'ClaveM'=>'AP-ORE1',
            'Grupo'=>'A',
            'Parcial1'=>8.00,
            'Parcial2'=>8.00,
            'Semestral'=>8.00,
            'Semestre'=>'PRIMER SEMESTRE',
            'Año'=>'2017'
  
        ]);

        DB::table('calificaciones_parciales')->insert([
            'Clave_A'=>'1900110033',
            'ClaveM'=>'AP-ADR1',
            'Grupo'=>'A',
            'Parcial1'=>8.00,
            'Parcial2'=>8.00,
            'Semestral'=>8.00,
            'Semestre'=>'PRIMER SEMESTRE',
            'Año'=>'2017'
  
        ]);

        DB::table('calificaciones_parciales')->insert([
            'Clave_A'=>'1900110033',
            'ClaveM'=>'AP-AAC1',
            'Grupo'=>'A',
            'Parcial1'=>8.00,
            'Parcial2'=>8.00,
            'Semestral'=>8.00,
            'Semestre'=>'PRIMER SEMESTRE',
            'Año'=>'2017'
  
        ]);
        //Segundo semestre
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110033',
	        'ClaveM'=>'FB-MAT2',
	        'Grupo'=>'A',
	        'Parcial1'=>7.00,
	        'Parcial2'=>9.00,
	        'Semestral'=>8.00,
	        'Semestre'=>'SEGUNDO SEMESTRE',
	        'Año'=>'2018'
	    ]);
	   DB::table('calificaciones_parciales')->insert([
	    	'Clave_A'=>'1900110033',
	        'ClaveM'=>'FB-QUI2',
	        'Grupo'=>'A',
	        'Parcial1'=>7.00,
	        'Parcial2'=>9.00,
	        'Semestral'=>8.00,
	        'Semestre'=>'SEGUNDO SEMESTRE',
	        'Año'=>'2018'
        ]);
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110033',
	        'ClaveM'=>'FB-ETI2',
	        'Grupo'=>'A',
	        'Parcial1'=>7.00,
	        'Parcial2'=>9.00,
	        'Semestral'=>8.00,     
	        'Semestre'=>'SEGUNDO SEMESTRE',
	        'Año'=>'2018'	
        ]); 
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110033',
	        'ClaveM'=>'FB-ILCS',
	        'Grupo'=>'A',
	        'Parcial1'=>7.00,
	        'Parcial2'=>9.00,
	        'Semestral'=>8.00,
	        'Semestre'=>'SEGUNDO SEMESTRE',
	        'Año'=>'2018'
	     ]);	
	  
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110033',
	        'ClaveM'=>'FB-TLR2',
	        'Grupo'=>'A',
	        'Parcial1'=>7.00,
	        'Parcial2'=>9.00,
	        'Semestral'=>8.00,
	        'Semestre'=>'SEGUNDO SEMESTRE',
	        'Año'=>'2018'
        ]);

	  	DB::table('calificaciones_parciales')->insert([
	  		'Clave_A'=>'1900110033',
	        'ClaveM'=>'FB-ING2',
	        'Grupo'=>'A',
	        'Parcial1'=>7.00,
	        'Parcial2'=>9.00,
	        'Semestral'=>8.00,
	        'Semestre'=>'SEGUNDO SEMESTRE',
	        'Año'=>'2018'
        ]);
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110033',
	        'ClaveM'=>'FB-INF2',
	        'Grupo'=>'A',
	        'Parcial1'=>7.00,
	        'Parcial2'=>9.00,
	        'Semestral'=>8.00,
	        'Semestre'=>'SEGUNDO SEMESTRE',
	        'Año'=>'2018'
        ]);

        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110033',
        	'ClaveM'=>'AP-ORE2',
        	'Grupo'=>'A',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'SEGUNDO SEMESTRE',
	        'Año'=>'2018'	
        ]);

        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110033',
        	'ClaveM'=>'AP-ADR2',
        	'Grupo'=>'A',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'SEGUNDO SEMESTRE',
	        'Año'=>'2018'
        ]);

        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110033',
        	'ClaveM'=>'AP-AAC2',
        	'Grupo'=>'A',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'SEGUNDO SEMESTRE',
	        'Año'=>'2018'	
        ]);
        //Tercer semestre
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110033',
        	'ClaveM'=>'FB-MAT3',
        	'Grupo'=>'A',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'TERCER SEMESTRE',
	        'Año'=>'2018'
        ]);
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110033',
        	'ClaveM'=>'FB-BIO1',
        	'Grupo'=>'A',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'TERCER SEMESTRE',
	        'Año'=>'2018'	
        ]);
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110033',
        	'ClaveM'=>'FB-FIS1',
        	'Grupo'=>'A',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'TERCER SEMESTRE',
	        'Año'=>'2018'
        ]);
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110033',
        	'ClaveM'=>'FB-HIM1',
        	'Grupo'=>'A',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'TERCER SEMESTRE',
	        'Año'=>'2018'	
        ]);
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110033',
        	'ClaveM'=>'FB-LIT1',
        	'Grupo'=>'A',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'TERCER SEMESTRE',
	        'Año'=>'2018'
        ]);
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110033',
        	'ClaveM'=>'FB-ING3',
        	'Grupo'=>'A',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'TERCER SEMESTRE',
	        'Año'=>'2018'	
        ]);
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110033',
        	'ClaveM'=>'FT-TUR_3',
			'Grupo'=>'A',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
        	'Semestral'=>8.00,
       		'Semestre'=>'TERCER SEMESTRE',
	        'Año'=>'2018'
        ]);
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110033',
        	'ClaveM'=>'AP-ORE3',
        	'Grupo'=>'A',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'TERCER SEMESTRE',
	        'Año'=>'2018'
        ]);
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110033',
        	'ClaveM'=>'AP-ADR3',
        	'Grupo'=>'A',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'TERCER SEMESTRE',
	        'Año'=>'2018'	
        ]);
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110033',
        	'ClaveM'=>'AP-AAC3',
        	'Grupo'=>'A',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'TERCER SEMESTRE',
	        'Año'=>'2018'	
        ]);
        //Cuarto semestre
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110033',
        	'ClaveM'=>'FB-MAT4',
	        'Grupo'=>'A',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'CUARTO SEMESTRE',
	        'Año'=>'2019'	
        ]);
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110033',
        	'ClaveM'=>'FB-BIO2',
	        'Grupo'=>'A',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'CUARTO SEMESTRE',
	        'Año'=>'2019'
        ]);
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110033',
        	'ClaveM'=>'FB-FIS2',
	        'Grupo'=>'A',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'CUARTO SEMESTRE',
	        'Año'=>'2019'
        ]);

        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110033',
        	'ClaveM'=>'FB-HIM2',
	        'Grupo'=>'A',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'CUARTO SEMESTRE',
	        'Año'=>'2019'	
        ]);
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110033',
        	'ClaveM'=>'FB-LIT2',
	        'Grupo'=>'A',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'CUARTO SEMESTRE',
	        'Año'=>'2019'
        ]);
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110033',
        	'ClaveM'=>'FB-ING4',
	        'Grupo'=>'A',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'CUARTO SEMESTRE',
	        'Año'=>'2019'
        ]);
        DB::table('calificaciones_parciales')->insert([
	        'Clave_A'=>'1900110033',
	        'ClaveM'=>'FT-TUR_3',
	        'Grupo'=>'A',
        	'Parcial1'=>6.00,
        	'Parcial2'=>6.00,
        	'Semestral'=>6.00,
	        'Semestre'=>'CUARTO SEMESTRE',
	        'Año'=>'2019'	
        ]);

        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110033',
        	'ClaveM'=>'AP-ORE4',
	        'Grupo'=>'A',
        	'Parcial1'=>6.00,
        	'Parcial2'=>6.00,
        	'Semestral'=>6.00,
	        'Semestre'=>'CUARTO SEMESTRE',
	        'Año'=>'2019'
        ]);
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110033',
        	'ClaveM'=>'AP-ADR4',
	        'Grupo'=>'A',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'CUARTO SEMESTRE',
	        'Año'=>'2019'
        ]);
        DB::table('calificaciones_parciales')->insert([
	        'Clave_A'=>'1900110033',
	        'ClaveM'=>'AP-AAC4',
	        'Grupo'=>'A',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'CUARTO SEMESTRE',
	        'Año'=>'2019'	
        ]);
    }
}
