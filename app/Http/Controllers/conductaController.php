<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RelacionDocenteMateriaGrupo;
use Illuminate\Support\Facades\DB;
use App\Docentes;
use App\Materia;
use App\evaluacionConducta;
use App\ft_bach;
use App\Periodo;
class conductaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $usua)
    {

            $fechaActual=DB::select("SELECT NOW() as fecha; ");
           /// return $fechaActual;
          $hoy=[];
          foreach ($fechaActual as $fecha) {
              # code...
            $hoy=explode(' ',$fecha->fecha);;
          }
           $fechaHoy=date("y-m-d",strtotime($hoy[0].""));
            $fechaFin=Periodo::where('id',2)->get();
            $ffecha="";
            foreach ($fechaFin as $fecha ) {
                # code...
                $ffecha=date("y-m-d",strtotime($fecha->fecha2.""));
            }

            $ffecha1=date("y-m-d",strtotime($ffecha."+ 2 week"));
          if($fechaHoy>$ffecha && $fechaHoy <= $ffecha1){
           // return "si se pudo";

          
        $nombreDocentes=Docentes::WHERE('Clave_D','=',$usua->valor)->get();
        $nombreDocente="";
        foreach ($nombreDocentes as $docentes) {
            # code...
            $nombreDocente=$docentes->Nombre;
        }
        $materias=DB::select("SELECT DISTINCT materias.Nombre ,materias.Semestre,materias.Clave_M,relacion_docente_materia_grupos.Grupo FROM materias,relacion_docente_materia_grupos WHERE materias.Clave_M=relacion_docente_materia_grupos.Clave_M and relacion_docente_materia_grupos.Clave_D= :docente   order by Semestre  " ,['docente'=>$nombreDocente]);
        $usua=$usua->valor;
    
        $msj='Se realizo la evaluacion de forma correcta';
        $Vmsj=0;
       return view('conducta.materias',compact('materias'),compact('usua','msj','Vmsj'));
       }else {
          $usua=$usua->valor;
           return view('DocenteInterfazPrincipal.InterfazPrincipal2',compact('usua'))->with('MsjERR','No es posible evaluar conducta en este momento.');
          //  return back()
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
    public function store(Request $materia)
    {   
         

        $materia2=explode(">", $materia->boton);
       
        $nombreDocentes=Docentes::WHERE('Clave_D',$materia->caja)->get();
        $nombreDocente="";
        foreach ($nombreDocentes as $docentes) {
            # code...
            $nombreDocente=$docentes->Nombre;
        }
        $semestre=$materia2[2];
        $grupo=$materia2[3];
        $usua=$materia->caja;
        $NombreMateria=Materia::WHERE('Clave_M','=',$materia2[0])->get();
        $mat="";
        $claveMat="";
        foreach ($NombreMateria as $materia1) {
            # code...
            $mat=$materia1->Nombre;
            $claveMat=$materia1->Clave_M;
        }


            $alumnosEvaluados=DB::select("SELECT Clave_A, evaluacion FROM evaluacion_conductas WHERE Clave_M=:Clave_M and
                Clave_D=:Clave_D and grupo=:grupo",['Clave_M'=>$claveMat ,'Clave_D'=>$usua ,'grupo'=>$grupo]);


    
         $alumnos=DB::select("SELECT DISTINCT alumnos.Clave_A,alumnos.Nombre_A
            from alumnos    WHERE  (EXISTS (SELECT 1 from grupos
        WHERE grupos.Clave_A=alumnos.Clave_A and grupos.Grupo=:grupo))
                          AND alumnos.Semestre= :sem" ,['sem'=>$semestre , 'grupo'=>$grupo]);
         $datos = array();
         array_push($datos,$alumnos);
           array_push($datos,$mat);
            array_push($datos,$claveMat);
            array_push($datos,$semestre);
            array_push($datos,$grupo);
            if(count($alumnosEvaluados)>0){
                array_push($datos,$alumnosEvaluados);

            }

         if(count($alumnos)>0){
            $msj='Se realizo la evaluacion de forma correcta';
            $Vmsj=0;
            return view('conducta.alumnos',compact('datos','usua','msj','Vmsj'));   
         }else{

            $alumnos=DB::select("SELECT DISTINCT alumnos.Clave_A,alumnos.Nombre_A
            from alumnos    WHERE  (EXISTS (SELECT 1 from ft_baches
        WHERE ft_baches.Clave_A=alumnos.Clave_A and ft_baches.Formación_Trabajo=:grupo))
                          AND alumnos.Semestre= :sem" ,['sem'=>$semestre , 'grupo'=>$grupo]);
            $datos = array();
         array_push($datos,$alumnos);
           array_push($datos,$mat);
            array_push($datos,$claveMat);
            array_push($datos,$semestre);
            array_push($datos,$grupo);
            if(count($alumnosEvaluados)>0){
                array_push($datos,$alumnosEvaluados);

            }
            
            if(count($alumnos)>0){
                $msj=' ';
                $Vmsj=0;
                return view('conducta.alumnos',compact('datos','usua','msj','Vmsj'));    
            }else{

                $alumnos=DB::select("SELECT DISTINCT alumnos.Clave_A,alumnos.Nombre_A from alumnos WHERE (EXISTS (SELECT 1 from ft_baches WHERE ft_baches.Clave_A=alumnos.Clave_A and ft_baches.Bachillerato=:grupo)) AND alumnos.Semestre= :sem" ,['sem'=>$semestre , 'grupo'=>$grupo]);
            $datos = array();
            array_push($datos,$alumnos);
            array_push($datos,$mat);
            array_push($datos,$claveMat);
            array_push($datos,$semestre);
            array_push($datos,$grupo);
            if(count($alumnosEvaluados)>0){
                array_push($datos,$alumnosEvaluados);

            }            
                if(count($alumnos)>0){
                    $msj=' ';
                    $Vmsj=0;
                    return view('conducta.alumnos',compact('datos','usua','msj','Vmsj'));   
            }else{

               return view('DocenteInterfazPrincipal.InterfazPrincipal2',compact('usua'))->with('MsjERR','No hay alumnos registrados.');
             

            }
            }
            
         }
         
         //   return $datos[0];
     //  return view('conducta.alumnos',compact('alumnos'),compact('usua'))->with($mat);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $materia)

    {
        
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $evaluaciones, $id)
    {
        
        $datos=explode('^', $id);
        $Clave_D=$datos[0];
        $Clave_M=$datos[1];
        $Semestre=$datos[2];
        $grupo=$datos[3];
        $usua=$datos[0];

         $alumnos=DB::select("SELECT DISTINCT alumnos.Clave_A,alumnos.Nombre_A
            from alumnos    WHERE  (EXISTS (SELECT 1 from grupos
        WHERE grupos.Clave_A=alumnos.Clave_A and grupos.Grupo=:grupo))
                          AND alumnos.Semestre= :sem" ,['sem'=>$Semestre , 'grupo'=>$grupo]);
         if(count($alumnos)==0){

            $alumnos=DB::select("SELECT DISTINCT alumnos.Clave_A,alumnos.Nombre_A
            from alumnos    WHERE  (EXISTS (SELECT 1 from ft_baches
        WHERE ft_baches.Clave_A=alumnos.Clave_A and ft_baches.Formación_Trabajo=:grupo))
                          AND alumnos.Semestre= :sem" ,['sem'=>$Semestre , 'grupo'=>$grupo]);
            if(count($alumnos)==0){

                     $alumnos=DB::select("SELECT DISTINCT alumnos.Clave_A,alumnos.Nombre_A
            from alumnos    WHERE  (EXISTS (SELECT 1 from ft_baches
        WHERE ft_baches.Clave_A=alumnos.Clave_A and ft_baches.Bachillerato=:grupo))
                          AND alumnos.Semestre= :sem" ,['sem'=>$Semestre , 'grupo'=>$grupo]);
            }
         }

 $alumnosEvaluados=evaluacionConducta::where([['Clave_M',$Clave_M]])->where([['Clave_D',$usua]])->where([['grupo',$grupo]])->get();
              
             foreach ($alumnosEvaluados as $alumnoEliminado ) {
                 # code...
                $alumnoEliminado->delete();
             }
            
         foreach ($alumnos as $alumno) {
             # code...
            $NombreCombo="combo".$alumno->Clave_A;
            $evaluacion1= $evaluaciones->$NombreCombo;
            $evaluacion= new evaluacionConducta();
            $evaluacion->Clave_A=$alumno->Clave_A;
            $evaluacion->Clave_M=$Clave_M;
             $evaluacion->Clave_D=$usua;
            $evaluacion->evaluacion=$evaluacion1;
            $evaluacion->grupo=$grupo;

            if(!$evaluacion->save()){
                    $msj='No se realizó la evaluación';
                    $Vmsj=2;
                    return view('conducta.materias',compact('materias','usua','msj','Vmsj'));
            }   
         }
             $nombreDocentes=Docentes::WHERE('Clave_D',$usua)->get();
        $nombreDocente="";
        foreach ($nombreDocentes as $docentes) {
            # code...
            $nombreDocente=$docentes->Nombre;
        }

            $materias=DB::select("SELECT DISTINCT materias.Nombre ,materias.Semestre,materias.Clave_M,relacion_docente_materia_grupos.Grupo FROM materias,relacion_docente_materia_grupos WHERE materias.Clave_M=relacion_docente_materia_grupos.Clave_M and relacion_docente_materia_grupos.Clave_D= :docente  order by Semestre  " ,['docente'=>$nombreDocente]);
        $msj='Se realizó la evaluación de forma correcta';
        $Vmsj=1;
       return view('conducta.materias',compact('materias','usua','msj','Vmsj'));


          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}
