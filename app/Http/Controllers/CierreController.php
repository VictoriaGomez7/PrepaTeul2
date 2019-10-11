<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\periodo;
use App\CalificacionesParciales;
use App\Irregulares;
use App\IrregularMateria;
use App\IrregularMateriaHistorico;
use App\Kardex;
use App\EstadisticaSemestre;
use Carbon\Carbon;
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
        $bandera=False;
        $Fecha=periodo::where('id','2')->get();
        //$Fecha=periodo::all();
        //return $Fecha;

        if (count($Fecha)==0 or $Fecha[0]->fecha2==null) {
            //return "entra";
            return view('CerrarCiclo.index',compact('bandera'))->with('msj1','Favor de asignar fechas a periodos');        }
        else{
        $fechasis=$Fecha[0]->fecha2;
        $fechaact=date('Y-m-d');
        
        if( $fechaact > $fechasis) {
            $bandera=True;
        
        //return "entra2";
        return view('CerrarCiclo.index',compact('bandera'));
    }
    else{
        $bandera=False;
        return view('CerrarCiclo.index',compact('bandera'));        }
    }
    
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
        $now= Carbon::now();
        $Año=$now-> format('o');
        
        $Alumno_Aprobado=array();
        $Alumno_Reprobado=array();
        $Materia_Nombre=array();
        for ($i=0; $i <count($todo) ; $i++){
            array_push($Alumno_Aprobado, $todo[$i]);
            $b=false;

            if (count($Materia_Nombre)!=0){
                for ($j=0; $j < count($Materia_Nombre); $j++) { 
                    if ($Materia_Nombre[$j]!=$todo[$i]->ClaveM){
                        $b==true;
                    }
                }
                if ($b==true){
                    array_push($Materia_Nombre, $todo[$i]->ClaveM);
                }
            }
            else {
                array_push($Materia_Nombre, $todo[$i]->ClaveM);
            }

            $suma=($todo[$i]->Parcial1+$todo[$i]->Parcial2)/2;
            $suma=$suma+$todo[$i]->Semestral/2;

            if ($suma<6) {
                $alumnoL=new Irregulares();
                $alumnoL->Clave_A=$todo[$i]->Clave_A;
                $alumnoL->save(); 
                $mate=new IrregularMateria();
                $mate->Clave_A=$todo[$i]->Clave_A;
                $mate->Clave_M=$todo[$i]->ClaveM;
                $mate->Calificacion1=0.0;
                $mate->Fecha=null;
                $mate->Oportunidades=0.0;
                $mate->save();

                $mate2=new IrregularMateriaHistorico();
                $mate2->Clave_A=$todo[$i]->Clave_A;
                $mate2->Clave_M=$todo[$i]->ClaveM;
                $mate2->Calificacion1=0.0;
                $mate2->Fecha=null;
                $mate2->Oportunidades=0.0;
                $mate2->save();
            }
            else
            {
                $nK=new Kardex();
                $nK->Clave_A=$todo[$i]->Clave_A;
                $nK->Clave_M=$todo[$i]->ClaveM;
                $nK->Fecha=null;
                $nK->Oportunidades=null;
                $nK->Calificacion=$suma;
                $nK->save();
            }
        }

        foreach ($Materia_Nombre as $value) {
            $Cant_Reprobados=0;
            $Cant_Aprobados=0;
            for ($i=0; $i <count($Alumno_Aprobado) ; $i++) {
                $M=$Alumno_Aprobado[$i]->ClaveM;
                $S=$Alumno_Aprobado[$i]->Semestre;
                if ($M==$value){
                    $Cant_Aprobados+=1;
                }
            }
            for ($i=0; $i <count($Alumno_Reprobado) ; $i++) {
                $M=$Alumno_Reprobado[$i]->ClaveM;
                if ($M==$value){
                    $Cant_Reprobados+=1;
                }
            }
            $mate=new EstadisticaSemestre();
            $mate->Aprobados=$Cant_Aprobados;
            $mate->Reprobados=$Cant_Reprobados;
            $mate->Semestre=$S;
            $mate->Materia=$value;
            $mate->Periodo=$Año;
            $mate->save();
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
