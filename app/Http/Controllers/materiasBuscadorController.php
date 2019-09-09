<?php
namespace App\Http\Controllers;
use App\materia;
use Illuminate\Http\Request;

class materiasBuscadorController extends Controller
{
public function buscador(Request $request){

         $materias1A    =   Materia::where("Nombre",'like',   $request->claveId."%")->get();
         $materias2A    =   Materia::where("Clave_M",'like',  $request->claveId."%")->get();
        
        $materias    =   Materia::where("Nombre",'like',   "% ".$request->claveId."%")->get();
         $materias2    =   Materia::where("Clave_M",'like',  "% ".$request->claveId."%")->get();
         if(count($materias)>0 or  count($materias2)>0 or count($materias1A)>0 or count($materias2A)>0){
                return view('materias.busqueda' , compact('materias' ,'materias2','materias1A','materias2A'));

         }else{

            return "No hay coincidencias en los nombres o claves de las materias registradas.";           
         }
           }
}