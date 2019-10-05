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
                $D=$Datos_tabla_Docentes[$i]->Nombre;
                $ban=false;

                for ($j=0; $j < count($Datos_tabla_tutor); $j++) {

                    if ($D==$Datos_tabla_tutor[$j]->Nombre_D){

                        $ban=true;
                    }
                }
                if ($ban==false){
                    array_push($Datos_tabla_Docentes_1, $Datos_tabla_Docentes[$i]);
                }
            }
        }

        if (count($Datos_tabla_Docentes)==0){
                return redirect('/ControlEscolarInicio')->with('MsjERR','No hay docentes registrados');
        }
        else {
            //return $fecha;
            if ((count($Datos_tabla_tutor)!=0) and ($fecha>=07 or $fecha<=07)) {
                $Dat=Tutor::where('Generacion',$Generacion)->get('Generacion');
                if (count($Dat)==0){
                    $visivility=2; //ver y registrar nuevos tutores
                   
                    return view('Tutores.create',compact('Datos_tabla_Docentes','Generacion','visivility','Datos_tabla_tutor','Datos_tabla_Docentes_1'));
                }
                else{
                    $visivility=3; //Solo es para ver los tutores
                    //return 'ver';
                    return view('Tutores.create',compact('Datos_tabla_Docentes','Generacion','visivility','Datos_tabla_tutor'));
                }
            }
            if (count($Datos_tabla_tutor)==0 and $fecha>=07){
                $visivility=1;
                $f2=$fecha_generacion-2;
                $f4=$fecha_generacion-4;
                $Generacion2=$f2.' - '.($fecha_generacion-1);
                $Generacion3=$f4.' - '.($fecha_generacion-3);
                return view('Tutores.create',compact('Datos_tabla_Docentes','Generacion','visivility','Datos_tabla_tutor','Generacion2','Generacion3'));
            }
            else {
                return redirect('/ControlEscolarInicio')->with('MsjERR','Sólo se pueden registrar tutores en semestre impar.');
            }
            
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

        if ($request->visivility==1){
            $ba1=false;
            if ($request->nombre1==$request->nombre2 or $request->nombre1==$request->nombre3 or $request->nombre1==$request->nombre4 or $request->nombre1==$request->nombre5 or $request->nombre1==$request->nombre6 or $request->nombre2==$request->nombre3 or $request->nombre2==$request->nombre4 or $request->nombre2==$request->nombre5 or $request->nombre2==$request->nombre6 or $request->nombre3==$request->nombre4 or $request->nombre3==$request->nombre5 or $request->nombre3==$request->nombre6 or $request->nombre4==$request->nombre5 or $request->nombre4==$request->nombre6 or $request->nombre5==$request->nombre6){
                $ba1=true;
            }

            if ($ba1==true){
                return back()->with('msjError','No se puede repetir el docente.' );
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
            
        }
        else{
            $ba=false;
            for ($i=0; $i < count($Datos_tabla_tutor); $i++) { 
                if ($request->nombre1==$Datos_tabla_tutor[$i]->Nombre_D or $request->nombre2==$Datos_tabla_tutor[$i]->Nombre_D){
                    $ba==true;
                }
            }
            if ($request->nombre1==$request->nombre2){
                return back()->with('msjError','No se puede repetir el docente.' );
            }
            else{
                if ($ba==true){
                    return back()->with('msjError','Algún docente seleccionado ya fue registrado.' );
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
                }
            } 
        }

        return redirect('RegistrarTutores')->with('msj','Tutores registrados con éxito.');
        
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
