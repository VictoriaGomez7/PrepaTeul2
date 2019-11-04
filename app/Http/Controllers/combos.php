<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formaciones;
use App\Bachilleratos;
class combos extends Controller
{
    //
    public function formaciones(){
    	$dbFormaciones=Formaciones::get();
    	$opcionesFormacion='';
    	foreach ($dbFormaciones as $formacion) {
    		# code... 
                         $opcionesFormacion.='<option value="'.$formacion->Nombre_FT.' ">
                         '.$formacion->Nombre_FT.'</option>';
              }

        $dbBachillertatos=Bachilleratos::get();
    	$opcionesBachillerato='';
    	foreach ($dbBachillertatos as $bachillerato) {
    		# code... 
                         $opcionesBachillerato.='<option value="'.$bachillerato->Nombre_B.' ">
                         '.$bachillerato->Nombre_B.'</option>';
              }      
    
    	return view('RegistrarMaterias.create' ,compact('opcionesFormacion','opcionesBachillerato'));
    }
    public function incripcion(){

            $dbFormaciones=Formaciones::get();
        $opcionesFormacion='';
        foreach ($dbFormaciones as $formacion) {
            # code... 
                         $opcionesFormacion.='<option value="'.$formacion->Nombre_FT.' ">
                         '.$formacion->Nombre_FT.'</option>';
              }

        $dbBachillertatos=Bachilleratos::get();
        $opcionesBachillerato='';
        foreach ($dbBachillertatos as $bachillerato) {
            # code... 
                         $opcionesBachillerato.='<option value="'.$bachillerato->Nombre_B.' ">
                         '.$bachillerato->Nombre_B.'</option>';
              }      

         return view('Inscripcion.create' ,compact('opcionesFormacion','opcionesBachillerato'));
    }
}
