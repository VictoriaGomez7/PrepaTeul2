<?php

use Illuminate\Database\Seeder;

class Calificaciones2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 DB::table('calificaciones_parciales')->insert([
            'Clave_A'=>'1900110039',
            'ClaveM'=>'FB-MAT1',
            'Grupo'=>'B',
            'Parcial1'=>8.00,
            'Parcial2'=>10.00,
            'PromedioParcial'=>0.00,
            'Semestral'=>9.00,
            'Semestre'=>'PRIMER SEMESTRE',
            'PromedioFinal'=>0.00,
  			'Año'=>'2017'
        ]);

        DB::table('calificaciones_parciales')->insert([
            'Clave_A'=>'1900110039',
            'ClaveM'=>'FB-QUI1',
            'Grupo'=>'B',
            'Parcial1'=>7.00,
            'Parcial2'=>7.00,
            'PromedioParcial'=>0.00,
            'Semestral'=>7.00,
            'Semestre'=>'PRIMER SEMESTRE',
            'PromedioFinal'=>0.00,
            'Año'=>'2017'
  
        ]);

        DB::table('calificaciones_parciales')->insert([
            'Clave_A'=>'1900110039',
            'ClaveM'=>'FB-ETI1',
            'Grupo'=>'B',
            'Parcial1'=>8.00,
            'Parcial2'=>8.00,
            'PromedioParcial'=>0.00,
            'Semestral'=>8.00,
            'Semestre'=>'PRIMER SEMESTRE',
            'PromedioFinal'=>0.00,
            'Año'=>'2017'
  
        ]);

        DB::table('calificaciones_parciales')->insert([
            'Clave_A'=>'1900110039',
            'ClaveM'=>'FB-MEI',
            'Grupo'=>'B',
            'Parcial1'=>8.00,
            'Parcial2'=>8.00,
            'PromedioParcial'=>0.00,
            'Semestral'=>8.00,
            'Semestre'=>'PRIMER SEMESTRE',
            'PromedioFinal'=>0.00,
            'Año'=>'2017'
  
        ]);
        DB::table('calificaciones_parciales')->insert([
            'Clave_A'=>'1900110039',
            'ClaveM'=>'FB-TLR1',
            'Grupo'=>'B',
            'Parcial1'=>8.00,
            'Parcial2'=>8.00,
            'PromedioParcial'=>0.00,
            'Semestral'=>8.00,
            'Semestre'=>'PRIMER SEMESTRE',
            'PromedioFinal'=>0.00,
            'Año'=>'2017'
  
        ]);

        DB::table('calificaciones_parciales')->insert([
            'Clave_A'=>'1900110039',
            'ClaveM'=>'FB-ING1',
            'Grupo'=>'B',
            'Parcial1'=>8.00,
            'Parcial2'=>8.00,
            'PromedioParcial'=>0.00,
            'Semestral'=>8.00,
            'Semestre'=>'PRIMER SEMESTRE',
            'PromedioFinal'=>0.00,
            'Año'=>'2017'
        ]);

    	//_______________________________________-
        DB::table('calificaciones_parciales')->insert([
            'Clave_A'=>'1900110039',
            'ClaveM'=>'FB-INF1',
            'Grupo'=>'B',
            'Parcial1'=>8.00,
            'Parcial2'=>8.00,
            'PromedioParcial'=>0.00,
            'Semestral'=>8.00,
            'Semestre'=>'PRIMER SEMESTRE',
            'PromedioFinal'=>0.00,
  			'Año'=>'2017'
        ]);

        DB::table('calificaciones_parciales')->insert([
            'Clave_A'=>'1900110039',
            'ClaveM'=>'AP-ORE1',
            'Grupo'=>'B',
            'Parcial1'=>8.00,
            'Parcial2'=>8.00,
            'PromedioParcial'=>0.00,
            'Semestral'=>8.00,
            'Semestre'=>'PRIMER SEMESTRE',
            'PromedioFinal'=>0.00,
            'Año'=>'2017'
  
        ]);

        DB::table('calificaciones_parciales')->insert([
            'Clave_A'=>'1900110039',
            'ClaveM'=>'AP-ADR1',
            'Grupo'=>'B',
            'Parcial1'=>8.00,
            'Parcial2'=>8.00,
            'PromedioParcial'=>0.00,
            'Semestral'=>8.00,
            'Semestre'=>'PRIMER SEMESTRE',
            'PromedioFinal'=>0.00,
            'Año'=>'2017'
  
        ]);

        DB::table('calificaciones_parciales')->insert([
            'Clave_A'=>'1900110039',
            'ClaveM'=>'AP-AAC1',
            'Grupo'=>'B',
            'Parcial1'=>8.00,
            'Parcial2'=>8.00,
            'PromedioParcial'=>0.00,
            'Semestral'=>8.00,
            'Semestre'=>'PRIMER SEMESTRE',
            'PromedioFinal'=>0.00,
            'Año'=>'2017'
  
        ]);
        //Segundo semestre
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110039',
	        'ClaveM'=>'FB-MAT2',
	        'Grupo'=>'B',
	        'Parcial1'=>7.00,
	        'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
	        'Semestral'=>8.00,
	        'Semestre'=>'SEGUNDO SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>'2018'
	    ]);
	   DB::table('calificaciones_parciales')->insert([
	    	'Clave_A'=>'1900110039',
	        'ClaveM'=>'FB-QUI2',
	        'Grupo'=>'B',
	        'Parcial1'=>7.00,
	        'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
	        'Semestral'=>8.00,
	        'Semestre'=>'SEGUNDO SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>'2018'
        ]);
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110039',
	        'ClaveM'=>'FB-ETI2',
	        'Grupo'=>'B',
	        'Parcial1'=>7.00,
	        'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
	        'Semestral'=>8.00,     
	        'Semestre'=>'SEGUNDO SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>'2018'	
        ]); 
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110039',
	        'ClaveM'=>'FB-ILCS',
	        'Grupo'=>'B',
	        'Parcial1'=>7.00,
	        'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
	        'Semestral'=>8.00,
	        'Semestre'=>'SEGUNDO SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>'2018'
	     ]);	
	  
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110039',
	        'ClaveM'=>'FB-TLR2',
	        'Grupo'=>'B',
	        'Parcial1'=>7.00,
	        'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
	        'Semestral'=>8.00,
	        'Semestre'=>'SEGUNDO SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>'2018'
        ]);

	  	DB::table('calificaciones_parciales')->insert([
	  		'Clave_A'=>'1900110039',
	        'ClaveM'=>'FB-ING2',
	        'Grupo'=>'B',
	        'Parcial1'=>7.00,
	        'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
	        'Semestral'=>8.00,
	        'Semestre'=>'SEGUNDO SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>'2018'
        ]);
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110039',
	        'ClaveM'=>'FB-INF2',
	        'Grupo'=>'B',
	        'Parcial1'=>7.00,
	        'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
	        'Semestral'=>8.00,
	        'Semestre'=>'SEGUNDO SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>'2018'
        ]);

        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110039',
        	'ClaveM'=>'AP-ORE2',
        	'Grupo'=>'B',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'SEGUNDO SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>'2018'	
        ]);

        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110039',
        	'ClaveM'=>'AP-ADR2',
        	'Grupo'=>'B',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'SEGUNDO SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>'2018'
        ]);

        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110039',
        	'ClaveM'=>'AP-AAC2',
        	'Grupo'=>'B',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'SEGUNDO SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>'2018'	
        ]);
        //Tercer semestre
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110039',
        	'ClaveM'=>'FB-MAT3',
        	'Grupo'=>'B',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'TERCER SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>'2018'
        ]);
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110039',
        	'ClaveM'=>'FB-BIO1',
        	'Grupo'=>'B',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'TERCER SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>'2018'	
        ]);
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110039',
        	'ClaveM'=>'FB-FIS1',
        	'Grupo'=>'B',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'TERCER SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>'2018'
        ]);
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110039',
        	'ClaveM'=>'FB-HIM1',
        	'Grupo'=>'B',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'TERCER SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>'2018'	
        ]);
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110039',
        	'ClaveM'=>'FB-LIT1',
        	'Grupo'=>'B',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'TERCER SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>'2018'
        ]);
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110039',
        	'ClaveM'=>'FB-ING3',
        	'Grupo'=>'B',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'TERCER SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>'2018'	
        ]);
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110039',
        	'ClaveM'=>'FT-TUR_3',
			'Grupo'=>'B',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
        	'Semestral'=>8.00,
       		'Semestre'=>'TERCER SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>'2018'
        ]);
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110039',
        	'ClaveM'=>'AP-ORE3',
        	'Grupo'=>'B',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'TERCER SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>'2018'
        ]);
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110039',
        	'ClaveM'=>'AP-ADR3',
        	'Grupo'=>'B',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'TERCER SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>'2018'	
        ]);
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110039',
        	'ClaveM'=>'AP-AAC3',
        	'Grupo'=>'B',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'TERCER SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>'2018'	
        ]);
        //Cuarto semestre
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110039',
        	'ClaveM'=>'FB-MAT4',
	        'Grupo'=>'B',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'CUARTO SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>'2019'	
        ]);
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110039',
        	'ClaveM'=>'FB-BIO2',
	        'Grupo'=>'B',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'CUARTO SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>'2019'
        ]);
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110039',
        	'ClaveM'=>'FB-FIS2',
	        'Grupo'=>'B',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'CUARTO SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>'2019'
        ]);

        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110039',
        	'ClaveM'=>'FB-HIM2',
	        'Grupo'=>'B',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'CUARTO SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>'2019'	
        ]);
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110039',
        	'ClaveM'=>'FB-LIT2',
	        'Grupo'=>'B',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'CUARTO SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>'2019'
        ]);
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110039',
        	'ClaveM'=>'FB-ING4',
	        'Grupo'=>'B',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'CUARTO SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>'2019'
        ]);
        DB::table('calificaciones_parciales')->insert([
	        'Clave_A'=>'1900110039',
	        'ClaveM'=>'FT-TUR_3',
	        'Grupo'=>'B',
        	'Parcial1'=>9.00,
        	'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
        	'Semestral'=>9.00,
	        'Semestre'=>'CUARTO SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>'2019'	
        ]);

        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110039',
        	'ClaveM'=>'AP-ORE4',
	        'Grupo'=>'B',
        	'Parcial1'=>7.00,
        	'Parcial2'=>7.00,
            'PromedioParcial'=>0.00,
        	'Semestral'=>7.00,
	        'Semestre'=>'CUARTO SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>'2019'
        ]);
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110039',
        	'ClaveM'=>'AP-ADR4',
	        'Grupo'=>'B',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'CUARTO SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>'2019'
        ]);
        DB::table('calificaciones_parciales')->insert([
	        'Clave_A'=>'1900110039',
	        'ClaveM'=>'AP-AAC4',
	        'Grupo'=>'B',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'CUARTO SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>'2019'	
        ]);

        //QUINTO
       	//Quinto semestre
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110039',
        	'ClaveM'=>'FB-ETG',
	        'Grupo'=>'B',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'QUINTO SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>2019	
        ]);
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110039',
        	'ClaveM'=>'FB-GEO',
	        'Grupo'=>'B',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'QUINTO SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>2019
        ]);
        DB::table('calificaciones_parciales')->insert([
        	'Clave_A'=>'1900110039',
        	'ClaveM'=>'FB-ESM',
	        'Grupo'=>'B',
        	'Parcial1'=>7.00,
        	'Parcial2'=>5.00,
            'PromedioParcial'=>0.00,
        	'Semestral'=>6.00,
	        'Semestre'=>'QUINTO SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>2019	
        ]);

        DB::table('calificaciones_parciales')->insert([
	        'Clave_A'=>'1900110039',
	        'ClaveM'=>'QB-TSQ1',
	        'Grupo'=>'B',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'QUINTO SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>2019
        ]);
        DB::table('calificaciones_parciales')->insert([
	        'Clave_A'=>'1900110039',
	        'ClaveM'=>'QB-TSB1',
	        'Grupo'=>'B',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'QUINTO SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>2019
        ]);
        DB::table('calificaciones_parciales')->insert([
	        'Clave_A'=>'1900110039',
	        'ClaveM'=>'QB-CIS1',
	        'Grupo'=>'B',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'QUINTO SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>2019
        ]);
        DB::table('calificaciones_parciales')->insert([
	        'Clave_A'=>'1900110039',
	        'ClaveM'=>'QB-PRE1',
	        'Grupo'=>'B',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'QUINTO SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>2019
        ]);
        
        DB::table('calificaciones_parciales')->insert([
	        'Clave_A'=>'1900110039',
	        'ClaveM'=>'FT-TUR_3',
	        'Grupo'=>'B',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'QUINTO SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>2019
        ]);
        DB::table('calificaciones_parciales')->insert([
	        'Clave_A'=>'1900110039',
	        'ClaveM'=>'AP-ORE5',
	        'Grupo'=>'B',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'QUINTO SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>2019
        ]);
        DB::table('calificaciones_parciales')->insert([
	        'Clave_A'=>'1900110039',
	        'ClaveM'=>'AP-ADR5',
	        'Grupo'=>'B',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'QUINTO SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>2019
        ]);
        DB::table('calificaciones_parciales')->insert([
	        'Clave_A'=>'1900110039',
	        'ClaveM'=>'AP-AAC5',
	        'Grupo'=>'B',
        	'Parcial1'=>7.00,
        	'Parcial2'=>9.00,
            'PromedioParcial'=>0.00,
        	'Semestral'=>8.00,
	        'Semestre'=>'QUINTO SEMESTRE',
            'PromedioFinal'=>0.00,
	        'Año'=>2019
        ]);   

    }
}
