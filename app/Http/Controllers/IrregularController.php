<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Irregulares;
use App\IrregularMateria;
use App\Alumno;
use App\Materia;
use App\Grupo;
use App\Kardex;
use App\IrregularMateriaHistorico;
use Carbon\Carbon;

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
        $Listado_Matriculas_Alumnos=array();
        $Listado_Nombres_Alumnos=array();
        $Listado_Semestres=array();
        $Listado_Grupos=array();
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
            //return $ObtenerIrregulares;
            $datos="";
            foreach ($ObtenerIrregulares as $alumnos) {
                //print $alumnos;
                $Alumno=Alumno::where('Clave_A','=',$alumnos->Clave_A)->get('Nombre_A');
                $Alumno1=Alumno::where('Clave_A','=',$alumnos->Clave_A)->get('Semestre');
                $Alumno2=Grupo::where('Clave_A','=',$alumnos->Clave_A)->get('Grupo');
                $ban=False;
                //return $Alumno[0]->Nombre_A;
                for ($i=0; $i < count($Listado_Nombres_Alumnos); $i++) {
                    //print ('SI ENTRO');
                    if ($Alumno[0]->Nombre_A==$Listado_Nombres_Alumnos[$i]){
                        //print ('Esta ');
                        $ban=True;
                    }
                }
                //print $ban;
                if ($ban==0){
                    array_push($Listado_Nombres_Alumnos,$Alumno[0]->Nombre_A);
                    array_push($Listado_Semestres,$Alumno1[0]->Semestre);
                    array_push($Listado_Grupos,$Alumno2[0]->Grupo);
                    array_push($Listado_Matriculas_Alumnos,$alumnos->Clave_A);
                    $Datos=IrregularMateria::where('Clave_A','=',$alumnos->Clave_A)->get();
                    //return count($Datos);
                    array_push($DatosAlumnos,$Datos);
                    array_push($Cantidad_Materias_Reprobadas,count($Datos));
                    }
                }
                //return $Listado_Nombres_Alumnos;
            }
            //return $Listado_Grupos;
            return view('Irregular.Mostrar',compact('ObtenerIrregulares','Listado_Nombres_Alumnos','Cantidad_Materias_Reprobadas','Listado_Semestres','Listado_Grupos','Listado_Matriculas_Alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
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
                $Materia->Fecha=$request->Fecha;

                $Materia->save();
                if($request->$verificado>=7){
                    $Opo=IrregularMateria::where('Clave_M',$Materia->Clave_M)->where('Clave_A',$clave_A)->get();
                    //return $Opo;
                    $Oportunidad=$Opo[0]->Oportunidades+1;
                    $MateriasAprobadas+=1;
                    array_push($Aprobadas, $Materia->Clave_M);
                    $Irre=new IrregularMateriaHistorico();
                    $Irre->Clave_A=$Materia->Clave_A;
                    $Irre->Clave_M=$Materia->Clave_M;
                    $Irre->Calificacion1=$Materia->Calificacion1;
                    $Irre->Oportunidades=$Oportunidad;
                    $Irre->Fecha=$request->Fecha;
                    $Irre->save();
                    $Opo=IrregularMateria::where('Clave_A',$request->Clave_A)->get();
                    IrregularMateria::where('Clave_M',$Materia->Clave_M)->where('Clave_A',$clave_A)->delete();
                    /*

                    */
                } else {
                    $Opo=IrregularMateria::where('Clave_M',$Materia->Clave_M)->where('Clave_A',$clave_A)->get();
                    //return $Opo;
                    $Oportunidad=$Opo[0]->Oportunidades+1;
                    //return $Oportunidad;
                    IrregularMateria::where('Clave_M',$Materia->Clave_M)->where('Clave_A',$clave_A)->update(['Oportunidades'=>$Oportunidad]);
                }
            }
            
                
            }
        
        if(count($Aprobadas)==$cuenta){

            Alumno::where('Clave_A', $request->Clave_A)->update(['Estado'=>'REGULAR']);
            //return $Opo[0]->ClaveM;
            $nK=new Kardex();
            $nK->Clave_A=$Opo[0]->Clave_A;
            $nK->Clave_M=$Opo[0]->Clave_M;
            $nK->Fecha=$Opo[0]->Fecha;
            $nK->Oportunidades=$Opo[0]->Oportunidades;
            $nK->Calificacion=$Opo[0]->Calificacion1;
            $nK->save();
            Irregulares::where('Clave_A',$request->Clave_A)->delete();
        }

       return redirect('Irregulares')->with('msj','Calificación guardada correctamente');
            
             
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
        //return $AlumnoMateriasRepro;
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
