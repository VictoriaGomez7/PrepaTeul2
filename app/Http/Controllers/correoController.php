<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuarioCE;
class correoController extends Controller
{
    //
        public function buscaCorreo(Request $r){
           if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
    return view('interfazprincipal.Interfaz');
    }
    		$controlEscolar=usuarioCE::get('Correo');
    		$correoActual= $controlEscolar[0]->Correo;
    		return view('Correo.muestraCorreo',compact('correoActual'));
    		    }
   	public function edit(Request $datos ){
          if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
    }
   		$usuario=usuarioCE::all();
   		$usua="";
   		foreach ($usuario as $usu ) {
   			# code...
   			$usua=$usu;
   		}
   			$usua->Correo=$datos->correo;
   			$usua->save();
   			
   		return back();

   	}
}
