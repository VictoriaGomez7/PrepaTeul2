<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CalificacionesParciales;
use App\Docentes;
use App\RelacionDocenteMateriaGrupo;
use App\Alumno;
use App\Grupo;
use App\Materia_Grupo;
use App\Periodo;
use App\Asistencia;
use App\EstadisticaPeriodo;
use Carbon\Carbon;

class CalificacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=$_GET['valor'];
        $usua=$id;
        //return $id;
        $NombreDoc=Docentes::where('Clave_D',$id)->get();
        $MateriasDelDocente=RelacionDocenteMateriaGrupo::where('Clave_D',$NombreDoc[0]->Nombre)->get();
        $Periodo1ini=Periodo::where('id','1')->get('fecha1');
        $Periodo1fin=Periodo::where('id','1')->get('fecha2');
        $Periodo2ini=Periodo::where('id','2')->get('fecha1');
        $Periodo2fin=Periodo::where('id','2')->get('fecha2');
        $visibility=2;
        //return $Periodo1ini;
        
        if (count($MateriasDelDocente)==0){
            return redirect('/DocenteInicios?valor='.$usua)->with('MsjERR','No tiene materias asignadas');
        }
        elseif (count($Periodo1ini)==0 or count($Periodo1fin)==0 or count($Periodo2ini)==0 or count($Periodo2fin)==0){
            return redirect('/DocenteInicios?valor='.$usua)->with('MsjERR','Los períodos no han sido asignados');
        }
        else{
            //return $MateriasDelDocente;
            view('DocenteInterfazPrincipal.InterfazPrincipal',compact('usua'));
            return view('Calificaciones.VisualizarCali',compact('MateriasDelDocente','visibility','id','usua'));
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'hola1';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $PeriodoActivo=0;
        $Periodo1ini=Periodo::where('id','1')->get('fecha1');
        $Periodo1fin=Periodo::where('id','1')->get('fecha2');
        $dia=date('o-m-d');
        $Periodo2ini=Periodo::where('id','2')->get('fecha1');
        $Periodo2fin=Periodo::where('id','2')->get('fecha2');
        $dia=date('o-m-d');
        $year_DATE=date('o');
        $final2=date('o-m-d',strtotime($Periodo2fin[0]->fecha2."+ 2 week"));

        if (($Periodo1ini[0]->fecha1<=$dia) && ($Periodo1fin[0]->fecha2>=$dia)){
        $PeriodoActivo=1;
    
        } else if (($Periodo2ini[0]->fecha1<=$dia) && ($Periodo2fin[0]->fecha2>=$dia)){
            $PeriodoActivo=2;
        } else if (($Periodo2fin[0]->fecha2<$dia) && ($final2>=$dia)) {
            $PeriodoActivo=3;
        } else {
            $PeriodoActivo=4;
        }

        $Materiasele=$request->MateriaSeleccionada;
        $id=$request->idDocente;
        $usua=$id;
        //return $Materiasele;

        $NombreDoc=Docentes::where('Clave_D',$id)->get();
        $MateriasDelDocente=RelacionDocenteMateriaGrupo::where('Clave_D',$NombreDoc[0]->Nombre)->get();


        $AlumnoEnGrupo=Grupo::where('Grupo',$request->Grupo)->get();
        $SemestreMateria=Materia_Grupo::where('Clave_M',$request->ClaveMateriaSelec)->where('Grupo',$request->Grupo)->get();
        $AlumnosEnMismoSemestre=array();
        $AlumnosAModificar=array();

        for ($i=0; $i < count($AlumnoEnGrupo); $i++) {
            $SemestreAlumno=Alumno::where('Clave_A',$AlumnoEnGrupo[$i]->Clave_A)->get('Semestre');
            if (($SemestreAlumno[0]->Semestre)==($SemestreMateria[0]->Semestre)) {
                $AlumnoParaTabla=Alumno::where('Clave_A',$AlumnoEnGrupo[$i]->Clave_A)->get();
                array_push($AlumnosEnMismoSemestre,$AlumnoParaTabla );
            }
        }
        if (count($AlumnosEnMismoSemestre)==0) {
            $visibility=0;
        } else {
            $visibility=1;
        }

        $DatosCalificaciones=CalificacionesParciales::get('ClaveM',$request->ClaveMateriaSelec);

        if (count($DatosCalificaciones)==0){
            for ($i=0; $i < count($AlumnosEnMismoSemestre); $i++)
            {
                $Calif=new CalificacionesParciales();
                $Calif->Clave_A=$AlumnosEnMismoSemestre[$i][0]->Clave_A;
                $Calif->ClaveM=$request->ClaveMateriaSelec;
                $Calif->Grupo=$request->Grupo;
                $Calif->Parcial1=0;
                $Calif->Parcial2=0;
                $Calif->Semestral=0;
                $Calif->Semestre=$AlumnosEnMismoSemestre[$i][0]->Semestre;
                $Calif->Año=$year_DATE;
                $Calif->save();
                $Asis=new Asistencia();
                $Asis->Clave_A=$AlumnosEnMismoSemestre[$i][0]->Clave_A;
                $Asis->Asistencias=0;
                $Asis->Faltas=0;
                $Asis->Periodo=0;
                $Asis->Materia=$request->ClaveMateriaSelec;
                $Asis->Semestre=$AlumnosEnMismoSemestre[$i][0]->Semestre;
                $Asis->Grupo=$request->Grupo;
                $Asis->PorcentajeAsistencias=0;
                $Asis->save();
            }
        }
        
        else
        {
            $Calif_Extraidas=CalificacionesParciales::where('ClaveM',$request->ClaveMateriaSelec)->where('Grupo',$request->Grupo)->get();
            if (count($AlumnosEnMismoSemestre)!=count($Calif_Extraidas)){

                for ($i=0; $i < count($AlumnosEnMismoSemestre); $i++)
                {
                    $Alumno1=$AlumnosEnMismoSemestre[$i][0]->id;
                    $cont=0;
                    for ($j=0; $j < count($Calif_Extraidas); $j++)
                    {
                        $Alumno2=$Calif_Extraidas[$j]->ClaveA;
                        if ($Alumno1==$Alumno2){
                            $cont=$cont+1;
                        }
                    }
                    if ($cont==0){
                        $Calif=new CalificacionesParciales();
                        $Calif->Clave_A=$AlumnosEnMismoSemestre[$i][0]->Clave_A;
                        $Calif->ClaveM=$request->ClaveMateriaSelec;
                        $Calif->Grupo=$request->Grupo;
                        $Calif->Parcial1=0;
                        $Calif->Parcial2=0;
                        $Calif->Semestral=0;
                        $Calif->Semestre=$AlumnosEnMismoSemestre[$i][0]->Semestre;
                        $Calif->Año=$year_DATE;
                        $Calif->save();

                        $Asis=new Asistencia();
                        $Asis->Clave_A=$AlumnosEnMismoSemestre[$i][0]->Clave_A;
                        $Asis->Asistencias=0;
                        $Asis->Faltas=0;
                        $Asis->Periodo=0;
                        $Asis->Materia=$request->ClaveMateriaSelec;
                        $Asis->Semestre=$AlumnosEnMismoSemestre[$i][0]->Semestre;
                        $Asis->Grupo=$request->Grupo;
                        $Asis->PorcentajeAsistencias=0;
                        $Asis->save();
                        $cont=0;
                    }
                }
            }
        }

        $Grupo_Seleccionado=$request->Grupo;
        $Calif_Extraidas=CalificacionesParciales::where('ClaveM',$request->ClaveMateriaSelec)->where('Grupo',$Grupo_Seleccionado)->get();
        view('DocenteInterfazPrincipal.InterfazPrincipal',compact('usua'));
        return view('Calificaciones.VisualizarCali',compact('MateriasDelDocente','AlumnosEnMismoSemestre','visibility','id','usua','Materiasele','PeriodoActivo','Calif_Extraidas','Grupo_Seleccionado'));

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($g, Request $r)
    {
        //return $r;
        $calif=CalificacionesParciales::find($g);

        $usua=$calif->Clave_A;
        $calif->Parcial1 = $r->Parcial1;
        $calif->Parcial2 = $r->Parcial2;
        $calif->save();

        return Redirect('/CONSULTACALIFICACIONESCE/show?id='.$usua)->with('msj1','Calificación modificada exitosamente' );

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $id)
    {
        //return $id->Periodo;
        $Reprobados=0;
        $Aprobados=0;
        $now= Carbon::now();
        $Año=$now-> format('o');
        $Mes=$now-> format('m');
        $Per='';

        if ($Mes>07){
            $Per='Agosto-Diciembre ';
        }
        else if ($Mes<=07){
            $Per='Enero-Junio ';
        }

        $ban=0;
        $Faltas=$id->get('Faltas');
        for ($i=0; $i <count($Faltas) ; $i++) { 
            if ($Faltas[$i]>$id->NumTotalAsis) {
                $ban=1;
            }
        }
        $year_date=date('o');
        $Cant_Calif=count($id->get('Calif1'));
        $Calificaciones_1=$id->get('Calif1');
        $Calificaciones_2=$id->get('Calif2');
        $Semestral=$id->get('Semestral');
        $TotalClases=$id->get('NumTotalAsis');
        $Faltas=$id->get('Faltas');
        $Claves_Alumnos=$id->get('ClaveA');
        $usua=$id->Usua;
        if ($ban==1) {
            return redirect('Calificaciones?valor='.$usua)->with('msj2','El número de faltas no puede ser mayor que el total de clases' );
        } else {
        for ($i=0; $i < $Cant_Calif; $i++)
            {
                
                if ($id->Periodo==1){
                    if ($Calificaciones_1[$i]<6){
                        $Reprobados+=1;
                    }
                    else{
                        $Aprobados+=1;
                    }
                }
                else{
                    if ($Calificaciones_2[$i]<6){
                        $Reprobados+=1;
                    }
                    else{
                        $Aprobados+=1;
                    }
                }

                $Asisten=$TotalClases-$Faltas[$i];
                CalificacionesParciales::where('ClaveM',$id->ClaveM)->where('Clave_A',$Claves_Alumnos[$i])->where('Grupo',$id->Grupo_Selec)->update(['Parcial1'=>$Calificaciones_1[$i]]);
                CalificacionesParciales::where('ClaveM',$id->ClaveM)->where('Clave_A',$Claves_Alumnos[$i])->where('Grupo',$id->Grupo_Selec)->update(['Parcial2'=>$Calificaciones_2[$i]]);
                CalificacionesParciales::where('ClaveM',$id->ClaveM)->where('Clave_A',$Claves_Alumnos[$i])->where('Grupo',$id->Grupo_Selec)->update(['Semestral'=>$Semestral[$i]]);
                Asistencia::where('Materia',$id->ClaveM)->where('Clave_A',$Claves_Alumnos[$i])->where('Grupo',$id->Grupo_Selec)->update(['Asistencias'=>$Asisten]);
                Asistencia::where('Materia',$id->ClaveM)->where('Clave_A',$Claves_Alumnos[$i])->where('Grupo',$id->Grupo_Selec)->update(['Faltas'=>$Faltas[$i]]);
                Asistencia::where('Materia',$id->ClaveM)->where('Clave_A',$Claves_Alumnos[$i])->where('Grupo',$id->Grupo_Selec)->update(['Periodo'=>$id->Periodo]);
                Asistencia::where('Materia',$id->ClaveM)->where('Clave_A',$Claves_Alumnos[$i])->where('Grupo',$id->Grupo_Selec)->update(['PorcentajeAsistencias'=>(($Asisten*100)/$TotalClases)]);
                
            }

        $Estadistica=EstadisticaPeriodo::get();
        
        if (count($Estadistica)==0){
            $mate=new EstadisticaPeriodo();
            $mate->Aprobados1=$Aprobados;
            $mate->Reprobados1=$Reprobados;
            $mate->Aprobados2=null;
            $mate->Reprobados2=null;
            $mate->Semestre=$id->Semestre;
            $mate->Materia=$id->ClaveM;
            $mate->Grupo=$id->Grupo_Selec;
            $mate->Periodo=$Per.$Año;
            $mate->save();
        }
        else{
            $Verificar_Estadistica=EstadisticaPeriodo::where('Materia',$id->ClaveM)->where('Periodo',$Per.$Año)->where('Grupo',$id->Grupo_Selec)->where('Semestre',$id->Semestre)->get();
            if (count($Verificar_Estadistica)==0){
                $mate=new EstadisticaPeriodo();
                $mate->Aprobados1=$Aprobados;
                $mate->Reprobados1=$Reprobados;
                $mate->Aprobados2=null;
                $mate->Reprobados2=null;
                $mate->Semestre=$id->Semestre;
                $mate->Materia=$id->ClaveM;
                $mate->Grupo=$id->Grupo_Selec;
                $mate->Periodo=$Per.$Año;
                $mate->save();
            }
            else{
                if ($id->Periodo==1){
                    EstadisticaPeriodo::where('Materia',$id->ClaveM)->where('Periodo',$Per.$Año)->where('Grupo',$id->Grupo_Selec)->where('Semestre',$id->Semestre)->update(['Aprobados1'=>$Aprobados]);
                    EstadisticaPeriodo::where('Materia',$id->ClaveM)->where('Periodo',$Per.$Año)->where('Grupo',$id->Grupo_Selec)->where('Semestre',$id->Semestre)->update(['Reprobados1'=>$Reprobados]);
                }
                else if ($id->Periodo==2){
                    EstadisticaPeriodo::where('Materia',$id->ClaveM)->where('Periodo',$Per.$Año)->where('Grupo',$id->Grupo_Selec)->where('Semestre',$id->Semestre)->update(['Aprobados2'=>$Aprobados]);
                    EstadisticaPeriodo::where('Materia',$id->ClaveM)->where('Periodo',$Per.$Año)->where('Grupo',$id->Grupo_Selec)->where('Semestre',$id->Semestre)->update(['Reprobados2'=>$Reprobados]);
                }
            }
        }
            
        return redirect('Calificaciones?valor='.$usua)->with('msj','Calificacines registradas exitosamente' );}
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
        
        $alum=CalificacionesParciales::where('id',$id)->get();
        //$mate=Materia::get();
        //return $id;

        return view('Calificaciones.modificarC',compact('alum'));
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
