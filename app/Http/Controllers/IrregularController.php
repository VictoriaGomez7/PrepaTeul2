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
            
        return view('Irregular.Mostrar',compact('ObtenerIrregulares','Listado_Nombres_Alumnos','Listado_Nombres_Materias','Cantidad_Materias_Reprobadas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $clave_A=$request->Clave_A;
        $materias=IrregularMateria::where('Clave_A',$clave_A)->get();
        $cuenta=count($materias);
        $MateriasAprobadas=0;
        $Aprobadas=[];
        //return $cuenta;
        foreach ($materias as $Materia) {
            $verificado=$Materia->Clave_M.'Cal1';
            if($request->$verificado!=null and (in_array($Materia->Clave_M , $Aprobadas)==false)){

                $Materia->Calificacion1=$request->$verificado;
                $Materia->save();
                if($request->$verificado>=7){

                    $MateriasAprobadas+=1;
                    array_push($Aprobadas, $Materia->Clave_M);
                    /*

                    */
                }
            }
             $verificado=$Materia->Clave_M.'Cal2';
            if($request->$verificado!=null  and (in_array( $Materia->Clave_M , $Aprobadas)==false)){
                $ban=in_array( $Materia->Clave_M , $Aprobadas);
                $Materia->Calificacion2=$request->$verificado;
                $Materia->save();
                if($request->$verificado>=7){

                    $MateriasAprobadas+=1;
                    array_push($Aprobadas, $Materia->Clave_M);
                    
                }
                
            }
             $verificado=$Materia->Clave_M.'Cal3';
            if($request->$verificado!=null and (in_array( $Materia->Clave_M , $Aprobadas)==false)){
                $Materia->Calificacion3=$request->$verificado;
                $Materia->save();
                if($request->$verificado>=7){

                    $MateriasAprobadas+=1;
                    array_push($Aprobadas, $Materia->Clave_M);
                    
                }
                
            }
        }


        if(count($Aprobadas)==$cuenta){

            $busca=$request->Clave_A;
        $alumn="";
        $alumnos=Alumno::where([['Clave_A',$busca]])->get();
        foreach ($alumnos as $row){
            $alumn=$row;
            $alumn->Estado="REGULAR";
        }
        $alumn->save();

       return redirect('alumnosconsulta')->with('msj2','Alumno modificado correctamente');
            
             
        }
        return redirect('ControlEscolarInicio' )->with('msj','Calificacion de Alumno Actualizada');
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clave_A= $request->Clave_A;
        $Nombres_Mat=array();
        $NombreAlumno=Alumno::where('Clave_A',$request->Clave_A)->get('Nombre_A');
        $AlumnoMateriasRepro=IrregularMateria::where('Clave_A',$request->Clave_A)->get();
        //return count($AlumnoMateriasRepro);
        
        for ($i=0; $i < count($AlumnoMateriasRepro) ; $i++) { 
            $Mat=Materia::where('Clave_M',$AlumnoMateriasRepro[$i]->Clave_M)->get();
            //return $Mat[0]->Nombre;
            array_push($Nombres_Mat,$Mat[0]->Nombre);
        }
        return view('Irregular.IrregularVisu',compact('AlumnoMateriasRepro','Nombres_Mat','NombreAlumno','clave_A'));
        //return $AlumnoMateriasRepro;
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
