<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use App\Materia;
use App\Tutor;
use App\Grupo;
use App\Nombrealumno;
use App\CalificacionesParciales;
use Carbon\Carbon;
use DB;
use PDF;
use Session;

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
        $Datos_Grupo=Grupo::get();

        $now= Carbon::now();
        $fecha=$now-> format('m');
        $Sem_Activado=0;

        if ($fecha<07){
            $Sem_Activado=1;
        }
        else{
            $Sem_Activado=2;
        }

        //return $Sem_Activado;

        if (count($Datos_Tutor)==0){
            return redirect('/ControlEscolarInicio')->with('MsjERR','No hay tutores registrados');
        }
        elseif (count($Datos_Alumno)==0) {
            return redirect('/ControlEscolarInicio')->with('MsjERR','No hay alumnos registrados');
        }
        elseif (count($Datos_Materia)==0) {
            return redirect('/ControlEscolarInicio')->with('MsjERR','No hay materias registradas');
        }
        elseif (count($Datos_Grupo)==0) {
            return redirect('/ControlEscolarInicio')->with('MsjERR','No hay grupos creados');
        }
        else {
            //return 'Si hay todo';
            $visibility=2;
            return view('IBoletasParciales.create',compact('visibility','Sem_Activado'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //return $request->;
        $Materias=Materia::where('Semestre',$request->SemestreSelect)->get('Nombre');
        $Materias_Clave=Materia::where('Semestre',$request->SemestreSelect)->get('Clave_M');
        if ($request->SemestreSelect=='PRIMER SEMESTRE' or $request->SemestreSelect=='SEGUNDO SEMESTRE'):
            $Docente_A=Tutor::where('Grupo','A')->where('Grado','PRIMERO')->get();
            $Docente_B=Tutor::where('Grupo','B')->where('Grado','PRIMERO')->get();
        elseif ($request->SemestreSelect=='TERCER SEMESTRE' or $request->SemestreSelect=='CUARTO SEMESTRE'):
            $Docente_A=Tutor::where('Grupo','A')->where('Grado','SEGUNDO')->get();
            $Docente_B=Tutor::where('Grupo','B')->where('Grado','SEGUNDO')->get();
        elseif ($request->SemestreSelect=='QUINTO SEMESTRE' or $request->SemestreSelect=='SEXTO SEMESTRE'):
            $Docente_A=Tutor::where('Grupo','A')->where('Grado','TERCERO')->get();
            $Docente_B=Tutor::where('Grupo','B')->where('Grado','TERCERO')->get();
        endif;
        $now= Carbon::now();
        $SEM='';
        
        if ($request->Semestre==1):
            $SEM='PAR';
            $Year_1=$now-> format('o');
            $Year_2=$Year_1-1;
        elseif ($request->Semestre==2):
            $SEM='NON';
            $Year_1=$now-> format('o');
            $Year_2=$Year_1+1;
            
        endif;
        

        $Alumnos_A=$request->checkbox_A;
        $Alumnos_B=$request->checkbox_B;
        $Semestre_Seleccionado=$request->SemestreSelect;
        $Nombres_A=array();
        $Nombres_B=array();
        $Calificaciones_A=array();
        $Calificaciones_B=array();

        //SE OBTIENEN LOS NOMBRES DE LOS ALUMNOS
        if ($Alumnos_A!='' and $Alumnos_B!=''){
            foreach ($Alumnos_A as $Al_A) {
            $N_A=Nombrealumno::where('Clave_A',$Al_A)->get();
            $nom=$N_A[0]->ApellidoP.' '.$N_A[0]->ApellidoM.' '.$N_A[0]->Nombre;
            array_push($Nombres_A,$nom);
            }

            foreach ($Alumnos_B as $Al_B) {
                $N_B=Nombrealumno::where('Clave_A',$Al_B)->get();
                $nom=$N_B[0]->ApellidoP.' '.$N_B[0]->ApellidoM.' '.$N_B[0]->Nombre;
                array_push($Nombres_B,$nom);
            }

            //PARA OBTENER LAS CALIFICACIONES
            $Cal_Parc=CalificacionesParciales::where('Semestre',$request->SemestreSelect)->get();
            //return $Alumnos_A;
            foreach ($Cal_Parc as $value) {
                foreach ($Alumnos_A as $Al_A) {
                    if ($Al_A==$value->Clave_A) {
                         array_push($Calificaciones_A,$value);
                    }
                }
            }
            
            foreach ($Cal_Parc as $value) {
                foreach ($Alumnos_B as $Al_B) {
                    if ($Al_B==$value->Clave_A) {
                         array_push($Calificaciones_B,$value);
                    }
                }
            }


            $Cal_Alu_A=array();
            $bandera=False;
            $pa1=0;
            $pa2=0;
            foreach ($Alumnos_A as $Alumn) {
                foreach($Materias_Clave as $Mat_Cla){
                    foreach($Calificaciones_A as $Cal_A){
                        //print_r($Cal_A->ClaveM);
                        if ($Mat_Cla->Clave_M==$Cal_A->ClaveM and $Cal_A->Clave_A==$Alumn){
                            $bandera=True;
                            $pa1=$Cal_A->Parcial1;
                            $Pa2=$Cal_A->Parcial2;
                        }
                    }
                    if ($bandera==True){
                        array_push($Cal_Alu_A,$pa1);
                        array_push($Cal_Alu_A,$pa2);
                        $bandera=False;
                    }
                    else{
                        array_push($Cal_Alu_A,0);
                        array_push($Cal_Alu_A,0);
                    }
                }
            }

            $Cal_Alu_B=array();
            $banderaB=False;
            $pa1B=0;
            $pa2B=0;
            foreach ($Alumnos_B as $AlumnB) {
                foreach($Materias_Clave as $Mat_ClaB){
                    foreach($Calificaciones_B as $Cal_B){
                        //print_r($Cal_A->ClaveM);
                        if ($Mat_ClaB->Clave_M==$Cal_B->ClaveM and $Cal_B->Clave_A==$AlumnB){
                            $banderaB=True;
                            $pa1B=$Cal_B->Parcial1;
                            $Pa2B=$Cal_B->Parcial2;
                        }
                    }
                    if ($banderaB==True){
                        array_push($Cal_Alu_B,$pa1B);
                        array_push($Cal_Alu_B,$pa2B);
                        $banderaB=False;
                    }
                    else{
                        array_push($Cal_Alu_B,0);
                        array_push($Cal_Alu_B,0);
                    }
                }
            }
            //return $Nombres_A;
            $Opcion=3;
            $pdf= PDF::loadView('IBoletasParciales.Boleta',compact('SEM','Year_1','Year_2','Nombres_A','Nombres_B','Docente_A','Docente_B','Materias','Cal_Alu_A','Cal_Alu_B','Materias_Clave','Opcion'));
            return $pdf->stream();
        }
        elseif ($Alumnos_A!='' and $Alumnos_B==''){
            foreach ($Alumnos_A as $Al_A) {
            $N_A=Nombrealumno::where('Clave_A',$Al_A)->get();
            $nom=$N_A[0]->ApellidoP.' '.$N_A[0]->ApellidoM.' '.$N_A[0]->Nombre;
            array_push($Nombres_A,$nom);
            }

            foreach ($Alumnos_A as $Al_A) {
                $C_A=CalificacionesParciales::where('Clave_A',$Al_A)->get();
                array_push($Calificaciones_A,$C_A[0]);
            }

            //PARA OBTENER LAS CALIFICACIONES
            $Cal_Parc=CalificacionesParciales::where('Semestre',$request->SemestreSelect)->get();
            //return $Alumnos_A;
            foreach ($Cal_Parc as $value) {
                foreach ($Alumnos_A as $Al_A) {
                    if ($Al_A==$value->Clave_A) {
                         array_push($Calificaciones_A,$value);
                    }
                }
            }

            $Cal_Alu_A=array();
            $bandera=False;
            $pa1=0;
            $pa2=0;
            foreach ($Alumnos_A as $Alumn) {
                foreach($Materias_Clave as $Mat_Cla){
                    foreach($Calificaciones_A as $Cal_A){
                        //print_r($Cal_A->ClaveM);
                        if ($Mat_Cla->Clave_M==$Cal_A->ClaveM and $Cal_A->Clave_A==$Alumn){
                            $bandera=True;
                            $pa1=$Cal_A->Parcial1;
                            $Pa2=$Cal_A->Parcial2;
                        }
                    }
                    if ($bandera==True){
                        array_push($Cal_Alu_A,$pa1);
                        array_push($Cal_Alu_A,$pa2);
                        $bandera=False;
                    }
                    else{
                        array_push($Cal_Alu_A,0);
                        array_push($Cal_Alu_A,0);
                    }
                }
            }
            $Opcion=1;
            $pdf= PDF::loadView('IBoletasParciales.Boleta',compact('SEM','Year_1','Year_2','Nombres_A','Docente_A','Materias','Cal_Alu_A','Materias_Clave','Opcion'));
            return $pdf->stream();
        }
        
        elseif ($Alumnos_B!='' and $Alumnos_A==''){
            foreach ($Alumnos_B as $Al_B) {
                $N_B=Nombrealumno::where('Clave_A',$Al_B)->get();
                $nom=$N_B[0]->ApellidoP.' '.$N_B[0]->ApellidoM.' '.$N_B[0]->Nombre;
                array_push($Nombres_B,$nom);
            }
            foreach ($Alumnos_B as $Al_B) {
                $C_B=CalificacionesParciales::where('Clave_A',$Al_B)->get();
                array_push($Calificaciones_B,$C_B[0]);
            }

            //PARA OBTENER LAS CALIFICACIONES
            $Cal_Parc=CalificacionesParciales::where('Semestre',$request->SemestreSelect)->get();
            foreach ($Cal_Parc as $value) {
                foreach ($Alumnos_B as $Al_B) {
                    if ($Al_B==$value->Clave_A) {
                         array_push($Calificaciones_B,$value);
                    }
                }
            }

            $Cal_Alu_B=array();
            $bandera=False;
            $pa1=0;
            $pa2=0;
            foreach ($Alumnos_B as $Alumn) {
                foreach($Materias_Clave as $Mat_Cla){
                    foreach($Calificaciones_B as $Cal_B){
                        //print_r($Cal_A->ClaveM);
                        if ($Mat_Cla->Clave_M==$Cal_B->ClaveM and $Cal_B->Clave_A==$Alumn){
                            $bandera=True;
                            $pa1=$Cal_B->Parcial1;
                            $Pa2=$Cal_B->Parcial2;
                        }
                    }
                    if ($bandera==True){
                        array_push($Cal_Alu_B,$pa1);
                        array_push($Cal_Alu_B,$pa2);
                        $bandera=False;
                    }
                    else{
                        array_push($Cal_Alu_B,0);
                        array_push($Cal_Alu_B,0);
                    }
                }
            }
            $Opcion=2;
            $pdf= PDF::loadView('IBoletasParciales.Boleta',compact('SEM','Year_1','Year_2','Nombres_B','Docente_B','Materias','Cal_Alu_B','Materias_Clave','Opcion'));
            return $pdf->stream();
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return 'stote';
        $Semestre_Seleccionado=$request->SemestreSelect;
        $Lista_Alumnos_Grupo=array();
        $Matriculas_Alumnos_Grupo_A=array();
        $Matriculas_Alumnos_Grupo_B=array();
        $Nombres_Alumnos_Grupo_A=array();
        $Nombres_Alumnos_Grupo_B=array();
        $Matriculas_Alumnos=Alumno::where('Semestre',$request->SemestreSelect)->get('Clave_A');
        $ban=false;
        //return $Matriculas_Alumnos;
       
        // PARA SACAR LOS ALUMNOS DEL GRUPO A Y B, SU CLAVE
        foreach ($Matriculas_Alumnos as $Mat_Alu) {
            $Clave=$Mat_Alu->Clave_A;
            //sreturn $Clave;
            $M_A_Grupo=Grupo::where('Clave_A',$Clave)->get();
            //return count($M_A_Grupo);
            if (count($M_A_Grupo)==0){
                $ban=true;
            }
            else{
                array_push($Lista_Alumnos_Grupo,$M_A_Grupo[0] );
            }
        }
        //return $M_A_Grupo;
        if ($ban==true){
            return back()->with('msjE','No hay grupos creados para el semestre seleccionado.' );
        }
        else {
            foreach ($Lista_Alumnos_Grupo as $Lis_Alum_Gru) {
                if ($Lis_Alum_Gru->Grupo=='A'){
                    array_push($Matriculas_Alumnos_Grupo_A,$Lis_Alum_Gru->Clave_A);
                }
                else{
                    array_push($Matriculas_Alumnos_Grupo_B,$Lis_Alum_Gru->Clave_A);
                }
            }


            // PARA SACAR EL NOMBRE
            foreach ($Matriculas_Alumnos_Grupo_A as $Alu_A) {
                $Clave=$Alu_A;
                $Nom_Alu=Nombrealumno::where('Clave_A',$Clave)->get();

                $nom=$Nom_Alu[0]->ApellidoP.' '.$Nom_Alu[0]->ApellidoM.' '.$Nom_Alu[0]->Nombre;
                array_push($Nombres_Alumnos_Grupo_A,$nom );
                //return $Nombres_Alumnos_Grupo_A;
            }

            foreach ($Matriculas_Alumnos_Grupo_B as $Alu_B) {
                $Clave=$Alu_B;
                $Nom_Alu=Nombrealumno::where('Clave_A',$Clave)->get();
                $nom=$Nom_Alu[0]->ApellidoP.' '.$Nom_Alu[0]->ApellidoM.' '.$Nom_Alu[0]->Nombre;
                array_push($Nombres_Alumnos_Grupo_B,$nom);
            }
            //return $Matriculas_Alumnos_Grupo_A;
            $now= Carbon::now();
            $fecha=$now-> format('m');
            $Sem_Activado=0;

            if ($fecha<07){
                $Sem_Activado=1;
            }
            else{
                $Sem_Activado=2;
            }
            
            $visibility=1;
            //return $Nombres_Alumnos_Grupo_A;
            return view('IBoletasParciales.create',compact('visibility','Matriculas_Alumnos_Grupo_A','Matriculas_Alumnos_Grupo_B','Nombres_Alumnos_Grupo_A','Nombres_Alumnos_Grupo_B','Sem_Activado','Semestre_Seleccionado'));
        }
        
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
