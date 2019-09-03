<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Alumno;
use App\Grupo;
use App\GrupoTemporal;
use App\ft_bach;
use Illuminate\Support\Facades\DB;


use PDF;
use Session;
class ImprimelistasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('Listas.listar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return "Hola LoginA";
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $r )
    {
        $semestre=$r->semestre;
        $titulo='';
        if(($r->grupos =='formacion' && $r->semestre =='PRIMER SEMESTRE') || ($r->grupos =='formacion' && $r->semestre =='SEGUNDO SEMESTRE')){
            //return 'esta aqui';
            return back()->with('msj2','Sólo Tercer y Cuarto Semestre tienen asignado Formación Para el Trabajo');
            }else if($r->grupos =='formacion'){
                return view('Listas.formacion',compact('semestre'));

            }else if($r->grupos =='bachillerato'){
                
                if ($r->semestre =='QUINTO SEMESTRE' || $r->semestre =='SEXTO SEMESTRE'){
                    return view('Listas.bachillerato',compact('semestre'));
                }
                else{
                    return back()->with('msj2','Sólo Quinto y Sexto Semestre tienen Área Propedéutica');
                }
                


            }else if ($r->Grupo=="A"){

                 $listaA=DB::select("SELECT DISTINCT alumnos.Clave_A,alumnos.Nombre_A
            from alumnos    WHERE  (EXISTS (SELECT 1 from grupos
        WHERE grupos.id=alumnos.Clave_A and grupos.Grupo='A'))
                          AND alumnos.Semestre= :sem" ,['sem'=>$semestre]);
                 $titulo=$semestre . " GRUPO A";
            }else{


                 $listaA=DB::select("SELECT DISTINCT alumnos.Clave_A,alumnos.Nombre_A
            from alumnos    WHERE  (EXISTS (SELECT 1 from grupos
        WHERE grupos.id=alumnos.Clave_A and grupos.Grupo='B'))
                          AND alumnos.Semestre= :sem" ,['sem'=>$semestre]);
                 
            }
            if(count($listaA)){
                $titulo=$semestre . " GRUPO B";
                 $pdf= PDF::loadView('Listas.muestraGrupos',compact('listaA','semestre','titulo'));
             return $pdf->stream();
            }else{
                 return back()->with('msj2','No existen alumnos registrados');
            }
            

    return view('Listas.muestraGrupos',compact('listaA','semestre','titulo'));
           
        
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

   
    public function edit(Request $r,$semestre)
    {
        //
        $formacion=$r->formacionT;
        $listaA=DB::select("SELECT DISTINCT alumnos.Clave_A,alumnos.Nombre_A
            from alumnos    WHERE  (EXISTS (SELECT 1 from ft_baches
        WHERE ft_baches.Clave_A=alumnos.Clave_A and ft_baches.Formación_Trabajo= :formacion ))
                          AND alumnos.Semestre= :sem" ,['sem'=>$semestre   , 'formacion'=>$formacion]);
      $titulo=$semestre . " ".$r->formacionT;

        if(count($listaA)>0){

                 $pdf= PDF::loadView('Listas.muestraGrupos',compact('listaA','semestre','titulo'));
       
       return $pdf->stream();

        }else{
            
           return back()->with('msj2','No existen alumnos registrados');
        }
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r,$semestre)
    {
    

       $bachillerato=$r->bachilleratoT;
        $listaA=DB::select("SELECT DISTINCT alumnos.Clave_A,alumnos.Nombre_A
           from alumnos    WHERE  (EXISTS (SELECT 1 from ft_baches
        WHERE ft_baches.Clave_A=alumnos.Clave_A and ft_baches.Bachillerato= :bachillerato ))
                          AND alumnos.Semestre= :sem" ,['sem'=>$semestre   , 'bachillerato'=>$bachillerato]);
         if(count($listaA)>0){
         $titulo=$semestre . " ".$r->bachilleratoT;

      $pdf= PDF::loadView('Listas.muestraGrupos',compact('listaA','semestre','titulo'));
       
       return $pdf->stream();
        }else{

            $msj2= "No existen alumnos registrados";
            
            return back()->with('msj2','No existen alumnos registrados');
        }
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
        return "sadasdas";
    }
}
