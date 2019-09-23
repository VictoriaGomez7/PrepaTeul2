<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tutor;

class Tutorescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Datos_tabla_tutor=Tutor::get();

        if (count($Datos_tabla_tutor)==0){
            return view('Tutores.create');
        }
        else {
            //return 'Si hay datos';
            return view('Tutores.show',compact('Datos_tabla_tutor'));
        }
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'regresamos a create';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->nombre1;
        $docente=new Tutor();
        $docente->Nombre_D=$request->nombre1;
        $docente->Grado='PRIMERO';
        $docente->Grupo='A';
        $docente->save();
        $docente=new Tutor();
        $docente->Nombre_D=$request->nombre2;
        $docente->Grado='PRIMERO';
        $docente->Grupo='B';
        $docente->save();

        $docente=new Tutor();
        $docente->Nombre_D=$request->nombre3;
        $docente->Grado='SEGUNDO';
        $docente->Grupo='A';
        $docente->save();
        $docente=new Tutor();
        $docente->Nombre_D=$request->nombre4;
        $docente->Grado='SEGUNDO';
        $docente->Grupo='B';
        $docente->save();

        $docente=new Tutor();
        $docente->Nombre_D=$request->nombre5;
        $docente->Grado='TERCERO';
        $docente->Grupo='A';
        $docente->save();
        $docente=new Tutor();
        $docente->Nombre_D=$request->nombre6;
        $docente->Grado='TERCERO';
        $docente->Grupo='B';
        $docente->save();

        $Datos_tabla_tutor=Tutor::get();
        return view('Tutores.show',compact('Datos_tabla_tutor'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'regresamos a show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 'regresamos a edit';
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
