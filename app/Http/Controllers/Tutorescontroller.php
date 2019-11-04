<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tutor;
use App\Docentes;
use Carbon\Carbon;

class Tutorescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $now= Carbon::now();
        $fecha=$now-> format('m');
        $fecha_generacion=$now-> format('o');
        $Generacion=$fecha_generacion.' - '.($fecha_generacion+1);

        $Datos_tabla_tutor=Tutor::get();
        $Datos_tabla_Docentes=Docentes::get();

        if (count($Datos_tabla_tutor)!=0){
            $Datos_tabla_Docentes_1=array();

            for ($i=0; $i < count($Datos_tabla_Docentes); $i++) {
                array_push($Datos_tabla_Docentes_1, $Datos_tabla_Docentes[$i]);
            }
        }


        if (count($Datos_tabla_Docentes)==0){
            return redirect('/ControlEscolarInicio')->with('MsjERR','No hay docentes registrados');
        }
        else {
            $f2=$fecha_generacion-2;
            $f4=$fecha_generacion-4;
            $Generacion2=$f2.' - '.($fecha_generacion-1);
            $Generacion3=$f4.' - '.($fecha_generacion-3);

            if ((count($Datos_tabla_tutor)!=0) and ($fecha>=07 or $fecha<=07)) {
                
                $Listado=array();
                $visivility=2;
                $Dat=Tutor::where('Generacion',$Generacion)->get('Generacion');
                if (count($Dat)==0){

                    Tutor::where('Grado','PRIMERO')->where('Grupo','A')->update(['Nombre_D'=>'']);
                    Tutor::where('Grado','PRIMERO')->where('Grupo','B')->update(['Nombre_D'=>'']);
                    $Datos_tabla_tutor=Tutor::get();

                    array_push($Listado, $Datos_tabla_tutor[0]);
                    array_push($Listado, $Datos_tabla_tutor[1]);
                    array_push($Listado, $Datos_tabla_tutor[2]);
                    array_push($Listado, $Datos_tabla_tutor[3]);
                    array_push($Listado, $Datos_tabla_tutor[4]);
                    array_push($Listado, $Datos_tabla_tutor[5]);
                    $Datos_tabla_tutor=$Listado;
                }
            }
            else if (count($Datos_tabla_tutor)==0 and $fecha>=07){
                $visivility=1;
            }
            //return $Datos_tabla_tutor;
            return view('Tutores.create',compact('Datos_tabla_Docentes','Generacion','visivility','Datos_tabla_tutor','Generacion2','Generacion3'));
            
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
        $Datos_tabla_tutor=Tutor::get();
        
        $ba2=false;
        if (count($Datos_tabla_tutor)!=0){
            $ba2=true;
        }
        if ($ba2==true){
            Tutor::where('Grado','PRIMERO')->where('Grupo','A')->update(['Nombre_D'=>$request->nombre1]);
            Tutor::where('Grado','PRIMERO')->where('Grupo','A')->update(['Generacion'=>$request->Generacion]);
            Tutor::where('Grado','PRIMERO')->where('Grupo','B')->update(['Nombre_D'=>$request->nombre2]);
            Tutor::where('Grado','PRIMERO')->where('Grupo','B')->update(['Generacion'=>$request->Generacion]);

            Tutor::where('Grado','SEGUNDO')->where('Grupo','A')->update(['Nombre_D'=>$request->nombre3]);
            Tutor::where('Grado','SEGUNDO')->where('Grupo','A')->update(['Generacion'=>$request->Generacion2]);
            Tutor::where('Grado','SEGUNDO')->where('Grupo','B')->update(['Nombre_D'=>$request->nombre4]);
            Tutor::where('Grado','SEGUNDO')->where('Grupo','B')->update(['Generacion'=>$request->Generacion2]);

            Tutor::where('Grado','TERCERO')->where('Grupo','A')->update(['Nombre_D'=>$request->nombre5]);
            Tutor::where('Grado','TERCERO')->where('Grupo','A')->update(['Generacion'=>$request->Generacion3]);
            Tutor::where('Grado','TERCERO')->where('Grupo','B')->update(['Nombre_D'=>$request->nombre6]);
            Tutor::where('Grado','TERCERO')->where('Grupo','B')->update(['Generacion'=>$request->Generacion3]);
        }
        else{
            $docente=new Tutor();
            $docente->Nombre_D=$request->nombre1;
            $docente->Grado='PRIMERO';
            $docente->Grupo='A';
            $docente->Generacion=$request->Generacion;
            $docente->save();
            $docente=new Tutor();
            $docente->Nombre_D=$request->nombre2;
            $docente->Grado='PRIMERO';
            $docente->Grupo='B';
            $docente->Generacion=$request->Generacion;
            $docente->save();

            $docente=new Tutor();
            $docente->Nombre_D=$request->nombre3;
            $docente->Grado='SEGUNDO';
            $docente->Grupo='A';
            $docente->Generacion=$request->Generacion2;
            $docente->save();
            $docente=new Tutor();
            $docente->Nombre_D=$request->nombre4;
            $docente->Grado='SEGUNDO';
            $docente->Grupo='B';
            $docente->Generacion=$request->Generacion2;
            $docente->save();

            $docente=new Tutor();
            $docente->Nombre_D=$request->nombre5;
            $docente->Grado='TERCERO';
            $docente->Grupo='A';
            $docente->Generacion=$request->Generacion3;
            $docente->save();
            $docente=new Tutor();
            $docente->Nombre_D=$request->nombre6;
            $docente->Grado='TERCERO';
            $docente->Grupo='B';
            $docente->Generacion=$request->Generacion3;
            $docente->save();
        }
        return redirect('/ControlEscolarInicio')->with('msj','Tutores registrados con éxito.');
        
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
