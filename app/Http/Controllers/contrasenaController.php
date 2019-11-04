<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
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
    public function create(Request $request)
    {
        
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

         $materias1A    =   Alumno::where("Nombre_A",'like',   $request->claveId."%")->get();
         $materias2A    =   Alumno::where("Clave_A",'like',  $request->claveId."%")->get();
        
        $materias    =   Alumno::where("Nombre_M",'like',   "% ".$request->claveId."%")->get();
         $materias2    =   Alumno::where("Nombre_P",'like',  "% ".$request->claveId."%")->get();
        
         if(count($materias)>0 or  count($materias2)>0 or count($materias1A)>0 or count($materias2A)>0){
                return view('contrasena.busqueda' , compact('materias' ,'materias2','materias1A','materias2A'));

         }else{

            return "No hay coincidencias en los nombres o claves de las materias registradas.";           
         }
           }
}
