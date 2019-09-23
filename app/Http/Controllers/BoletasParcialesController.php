<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use App\Materia;
use App\Tutor;

class BoletasParcialesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Datos_Tutor=Tutor::get();
        $Datos_Alumno=Alumno::get();
        $Datos_Materia=Materia::get();

        if (count($Datos_Tutor)==0){
            return redirect('/ControlEscolarInicio')->with('MsjERR','No hay tutores registrados');
        }
        elseif (count($Datos_Alumno)==0) {
            return redirect('/ControlEscolarInicio')->with('MsjERR','No hay Alumnos registrados');
        }
        elseif (count($Datos_Materia)==0) {
            return redirect('/ControlEscolarInicio')->with('MsjERR','No hay Materias registradas');
        }
        else {
            //return 'Si hay todo';
            return view('IBoletasParciales.create');
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
