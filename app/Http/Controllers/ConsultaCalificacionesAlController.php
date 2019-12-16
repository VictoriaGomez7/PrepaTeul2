<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CalificacionesParciales;
use App\Alumno;
use App\Materia;
use App\Asistencia;

class ConsultaCalificacionesAlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(!isset($_SESSION['ContraPassA']) || !isset($_SESSION['usuarioUserA'])){
            return view('interfazprincipal.Interfaz');
        }   
        $usua=$_GET['valor'];
        //$usua=$request->valor;
        $Asist=Asistencia::where('Clave_A',$usua)->where('Periodo',1)->get();
        $Asist2=Asistencia::where('Clave_A',$usua)->where('Periodo',2)->get();
        $mat=Materia::all();
        $NombreDoc=Alumno::where('Clave_A',$request->valor)->get();
        $cali=CalificacionesParciales::where('Clave_A',$request->valor)->get();
        $nombre=$NombreDoc[0]->Nombre_A;
      
        //return $Asist2;
        return view('Calificaciones.ConsultaAl',compact('mat','cali','nombre','usua','Asist','Asist2'));
        
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
