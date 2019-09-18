<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\periodo;
use App\CalificacionesParciales;
use App\Irregulares;
Use Session;
Use Redirect;
Use Alert;

class CierreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Fecha=periodo::where('id','2')->get();
        $fechasis=$Fecha[0]->fecha2;
        $fechaact=date('Y-m-d');
        $bandera=False;
        if( $fechaact > $fechasis) {
            $bandera=True;
        }
        
        return view('CerrarCiclo.index',compact('bandera'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return "ya lo hice";
        $todo=CalificacionesParciales::all();

        for ($i=0; $i <count($todo) ; $i++){
            if ($todo[$i]->Parcial1<7 or $todo[$i]->Parcial2<7) {
                $alumnoL=new Irregulares();
                $alumnoL->Clave_A=$todo[$i]->Clave_A;
                $alumnoL->Clave_M=$todo[$i]->ClaveM;
                $alumnoL->Calificacion1=0;
                $alumnoL->Calificacio2=0;
                $alumnoL->Calificacion3=0;
                $alumnoL->save(); 
            }
        }
        $bandera=true;
        return view('CerrarCiclo.index',compact('bandera'))->with('msj','Ciclo cerrado con éxito.');
        //return back->with('msj','Ciclo cerrado con éxito.');
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
