<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use App\usuarioalumno;
use App\Docente;
use App\usuariomaestro;
class contrasenaController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contrasena.contrasena');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
             return view('contrasena.contrasenaDocente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $contrasena=usuariomaestro::where('Usuario',$id)->get('Password');
        $contraFinal="";
        
        foreach ($contrasena as $contra) {
            # code...
           
            $contraFinal=$contra->Password;
        }
        return Redirect('contrasenaDocente')->with('contraFinal',$contraFinal);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( $id)
    {
        //
        $contrasena=usuarioalumno::where('Usuario',$id)->get('Password');
        $contraFinal="";
        
        foreach ($contrasena as $contra) {
            # code...
           
            $contraFinal=$contra->Password;
        }
        return Redirect('contrasena')->with('contraFinal',$contraFinal);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
    }
    public function buscador(Request $request){
        $alumnos1A    =   Alumno::where("Nombre_A",'like',   "%".$request->claveId."%")
        ->orWhere("Clave_A",'like',  $request->claveId."%")
        ->orWhere("Nombre_M",'like',   "%".$request->claveId."%")
        ->orWhere("Nombre_P",'like',  "%".$request->claveId."%")->get()->unique();
      
        
         if(count($alumnos1A)>0){
                return view('contrasena.busqueda' , compact('alumnos1A'));

         }else{

            return "No hay coincidencias en los datos de alumnos registrados.";           
         }
           }

            public function buscadorDocente(Request $request){
        $docente1A    =   Docente::where("Clave_D",'like',   "%".$request->claveId."%")
        ->orWhere("Nombre",'like',  $request->claveId."%")
        ->orWhere("Telefono",'like',   "%".$request->claveId."%")->get()->unique();
      
        
         if(count($docente1A)>0){
                return view('contrasena.busquedaDocente' , compact('docente1A'));

         }else{

            return "No hay coincidencias en los datos de alumnos registrados.";           
         }
           }


}
