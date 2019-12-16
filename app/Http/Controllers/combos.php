<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formaciones;
use App\Bachilleratos;
class combos extends Controller
{
    //
    public function formaciones(){
          if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
    }
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
          if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
    }
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
