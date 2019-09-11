<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Irregulares;
use App\IrregularMateria;
use App\Alumno;
use App\Materia;

class IrregularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Alumno_B=Alumno::all();
        $Materia_B=Materia::all();
        $ObtenerIrregulares=Irregulares::all();
        $Listado_Nombres_Alumnos=array();
        $Listado_Nombres_Materias=array();
        $DatosAlumnos=array();
        $Cantidad_Materias_Reprobadas=array();


        if (count($ObtenerIrregulares)==0){
            return redirect('/ControlEscolarInicio')->with('MsjERR','No hay alumnos irregulares');
        }
        elseif (count($Alumno_B)==0) {
            return redirect('/ControlEscolarInicio')->with('MsjERR','No hay alumnos registrados');
        }
        elseif (count($Materia_B)==0) {
            return redirect('/ControlEscolarInicio')->with('MsjERR','No hay materias registradas');
        }
        else{

            $datos="";
            foreach ($ObtenerIrregulares as $alumnos) {
                $Alumno=Alumno::where('Clave_A','=',$alumnos->Clave_A)->get('Nombre_A');
                array_push($Listado_Nombres_Alumnos,$Alumno[0]->Nombre_A);
                $Datos=IrregularMateria::where('Clave_A','=',$alumnos->Clave_A)->get();
                //return count($Datos);
                array_push($DatosAlumnos,$Datos);
                array_push($Cantidad_Materias_Reprobadas,count($Datos));
                }
                
            }
            
                //$Materia=Materia::where('Clave_M','=',$alumnos->Clave_M)->get('Nombre');
                //array_push($Listado_Nombres_Alumnos,$Materia[0]->Nombre);
        //return $DatosAlumnos[0][0];
        //return $DatosAlumnos[0][1];
        return view('Irregular.Mostrar',compact('ObtenerIrregulares','Listado_Nombres_Alumnos','Listado_Nombres_Materias','Cantidad_Materias_Reprobadas'));
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
