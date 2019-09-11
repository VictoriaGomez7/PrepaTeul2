<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Irregulares;
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
        $ObtenerIrregulares=Irregulares::all();
        $Listado_Nombres=array();

        if (count($ObtenerIrregulares)==0){
            return redirect('/ControlEscolarInicio')->with('MsjERR','No hay alumnos irregulares');
        }
        else{
            $datos="";
            foreach ($ObtenerIrregulares as $alumnos) {
                $Alumno=Alumno::where('Clave_A','=',$alumnos->Clave_A)->get('Nombre_A');
                $Materia=Materia::where('Clave_M','=',$alumnos->Clave_M)->get('Nombre');
                //return $alumnos->Clave_A;
                array_push($Listado_Nombres,$Alumno[0]->Nombre_A,$Materia[0]->Nombre);
                
            }
            return view('Irregular.Mostrar',compact('ObtenerIrregulares','Listado_Nombres'));
        }
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
