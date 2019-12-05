<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Alumno;
use App\Grupo;
use App\GrupoTemporal;
use App\ft_bach;
use App\formaciones;
use App\Bachilleratos;
use Illuminate\Support\Facades\DB;
use App\Logos;

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
        //  return "hola";
        $semestre=$r->semestre;
        $titulo='';
        $top=10;
        if(($r->grupos =='formacion' && $r->semestre =='PRIMER SEMESTRE') || ($r->grupos =='formacion' && $r->semestre =='SEGUNDO SEMESTRE')){
       
            return back()->with('msj2','Sólo Tercer y Cuarto semestre tienen asignado Formación Para el Trabajo.');
            }else if($r->grupos =='formacion'){
                $formaciones=formaciones::take(100)->get();
                $radios="";
                
                foreach ($formaciones as $formacion) {
                        $radios.='<label style="font-size:130%; position:  absolute;top:'.$top.'%; left: 40%" >
          <input type="radio" name="formacionT"  class="with-gap" value="'.$formacion->Nombre_FT.'" required="true" >
      <span>'.$formacion->Nombre_FT.'</span>
    </label>';
    $top+=15;
                }
                return view('Listas.formacion',compact('semestre','radios'));

            }else if($r->grupos =='bachillerato'){
                $bachilleratos=Bachilleratos::take(100)->get();
               

                $radios="";
                $top=10;
                foreach ($bachilleratos as $bachillerato) {
                        $radios.=' <label style="font-size:130%; position:  absolute;top:'.$top .'%; left: 40%" >
          <input type="radio" name="bachilleratoT"  class="with-gap" value="'.$bachillerato->Nombre_B.'" required="true" >
      <span>'.$bachillerato->Nombre_B.'</span>
    </label>';
    $top+=15;
                }


                if ($r->semestre =='QUINTO SEMESTRE' || $r->semestre =='SEXTO SEMESTRE'){
                    return view('Listas.bachillerato',compact('semestre','radios'));
                }
                else{
                    return back()->with('msj2','Sólo Quinto y Sexto semestre tienen Área Propedéutica.');
                }
                


            }else if ($r->Grupo=="A"){

                 $listaA=DB::select("SELECT DISTINCT alumnos.Clave_A,alumnos.Nombre_A
            from alumnos    WHERE  (EXISTS (SELECT 1 from grupos
        WHERE grupos.Clave_A=alumnos.Clave_A and grupos.Grupo='A'))
                          AND alumnos.Semestre= :sem" ,['sem'=>$semestre]);
                 $titulo=$semestre . " GRUPO A";
            }else if($r->Grupo=="B"){


                 $listaA=DB::select("SELECT DISTINCT alumnos.Clave_A,alumnos.Nombre_A
            from alumnos    WHERE  (EXISTS (SELECT 1 from grupos
        WHERE grupos.Clave_A=alumnos.Clave_A and grupos.Grupo='B'))
                          AND alumnos.Semestre= :sem" ,['sem'=>$semestre]);
                 
            }else{

                return back()->with('msj2','No se ha seleccionado ningún grupo.');
            }
            if(count($listaA)>0){
                $titulo=$semestre . " GRUPO ".$r->Grupo;
                $ImagenesEnDB=Logos::all();
                 $pdf= PDF::loadView('Listas.muestraGrupos',compact('listaA','semestre','titulo','ImagenesEnDB'));
             return $pdf->stream();
            }else{
                 return back()->with('msj2','No hay alumnos registrados.');
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

        $formacion=$r->formacionT;
        $listaA=DB::select("SELECT DISTINCT alumnos.Clave_A,alumnos.Nombre_A
            from alumnos    WHERE  (EXISTS (SELECT 1 from ft_baches
        WHERE ft_baches.Clave_A=alumnos.Clave_A and ft_baches.Formación_Trabajo= :formacion ))
                          AND alumnos.Semestre= :sem" ,['sem'=>$semestre   , 'formacion'=>$formacion]);
      $titulo=$semestre . " ".$r->formacionT;

        if(count($listaA)>0){
                $ImagenesEnDB=Logos::all();
                 $pdf= PDF::loadView('Listas.muestraGrupos',compact('listaA','semestre','titulo','ImagenesEnDB'));
       
       return $pdf->stream();

        }else{
            
           return back()->with('msj2','No hay alumnos registrados.');
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
 //   return $r;

       $bachillerato=$r->bachilleratoT;
        $listaA=DB::select("SELECT DISTINCT alumnos.Clave_A,alumnos.Nombre_A
           from alumnos    WHERE  (EXISTS (SELECT 1 from ft_baches
        WHERE ft_baches.Clave_A=alumnos.Clave_A and ft_baches.Bachillerato= :bachillerato ))
                          AND alumnos.Semestre= :sem" ,['sem'=>$semestre   , 'bachillerato'=>$bachillerato]);
         if(count($listaA)>0){
         $titulo=$semestre . " ".$r->bachilleratoT;
         $ImagenesEnDB=Logos::all();
      $pdf= PDF::loadView('Listas.muestraGrupos',compact('listaA','semestre','titulo','ImagenesEnDB'));
       
       return $pdf->stream();
        }else{

            $msj2= "No hay alumnos registrados";
            
            return back()->with('msj2','No hay alumnos registrados.');
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
        
    }
}
