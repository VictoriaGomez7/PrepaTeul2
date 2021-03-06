<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\evaluacionConducta;
use PDF;
use Session;
use App\Alumno;
use App\ft_bach;
use App\Logos;
class ImprimeCartaController extends Controller
{
    //


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
        }
        return view('conducta.consulta');
        
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
        if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
        }
        $Alumno=Alumno::where("Clave_A",$r->cajaAlumno)->get();
        $area=ft_bach::where("Clave_A",$r->cajaAlumno)->get();
        $bachillerato="";
        

        if (count($Alumno)==0){
            return back()->with('MsjERR','El alumno ingresado no existe.');
        }
        else if ($Alumno[0]->Semestre!='SEXTO SEMESTRE'){
            return back()->with('MsjERR','Sólo a alumnos de sexto semestre les puede imprimir carta');
        }
        else{

            foreach ($area as $areaPropedeutica ) {
                $bachillerato=$areaPropedeutica->Bachillerato;
            }

            $NombreAlumno="";
            $sexo="";
            foreach ($Alumno as $nombreAlum ) {
                $NombreAlumno=$nombreAlum->Nombre_A;
                $sexo=$nombreAlum->Sexo;            
            }

            $materiasEvaluadas = evaluacionConducta::where('Clave_A',$r->cajaAlumno)->get();
                if(count($materiasEvaluadas)==0){
                 return back()->with('MsjERR','No cuenta  evaluacion de conducta');
           }
            $ultimaFecha=date("o",strtotime($materiasEvaluadas[count($materiasEvaluadas)-1]->updated_at.""));

           
            $fecha3= ($ultimaFecha-3)."-".($ultimaFecha-2)." , ".($ultimaFecha-2) ."-".
            ($ultimaFecha-1)." y ".($ultimaFecha-1)."-".($ultimaFecha);
            $total=0;
           
            foreach ($materiasEvaluadas as $materias) {
                if($materias->evaluacion=="EXCELENTE"){
                    $total+=10;
                }else if($materias->evaluacion=="MUY BUENA"){
                    $total+=9;
                }else if($materias->evaluacion=="BUENA"){
                    $total+=8;
                }else if($materias->evaluacion=="REGULAR"){
                    $total+=7;
                }
            }

            $promedio=$total/count($materiasEvaluadas);
            //$promedio=9;
            $dato =[];
            array_push( $dato,$NombreAlumno);
            array_push( $dato,$sexo);
            array_push( $dato,$bachillerato);
            if($promedio>=7 && $promedio<8){
                array_push($dato, "REGULAR");  
            }
            else if($promedio>=8 && $promedio<9){
                array_push($dato, "BUENA"); 
            }
            else if($promedio>=9 && $promedio<10){
                array_push($dato, "MUY BUENA"); 
            }
            else if($promedio==10){
                array_push($dato, "EXCELENTE"); 
            }
            $ImagenesEnDB=Logos::all();
            $pdf= PDF::loadView('conducta.vistaDocumento' ,compact('dato','fecha3','ImagenesEnDB'));
            return $pdf->stream();
           //return view('conducta.vistaDocumento' ,compact('dato'));
        }
            
    }   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

   
    public function edit(Request $r)
    {

       
      
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
