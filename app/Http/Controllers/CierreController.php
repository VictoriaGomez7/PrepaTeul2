<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\periodo;
use App\CalificacionesParciales;
use App\Irregulares;
use App\IrregularMateria;
use App\IrregularMateriaHistorico;
use App\Kardex;
use App\EstadisticaSemestre;
use Carbon\Carbon;
use App\PeriodoAlumno;
use App\Alumno;
use App\Materia;
Use Session;
Use Redirect;
Use Alert;

class CierreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bandera=False;
        $Fecha=periodo::where('id','2')->get();
        //$Fecha=periodo::all();
        //return $Fecha;

        if (count($Fecha)==0 or $Fecha[0]->fecha2==null) {
            //return "entra";
            $msj='No hay periodos registrados.';
            $BanMSJ=2;
            return view('CerrarCiclo.index',compact('bandera','msj','BanMSJ'));       
        }
        else{
        $fechasis=$Fecha[0]->fecha2;
        $fechaact=date('Y-m-d');
        
        if( $fechaact > $fechasis) {
            $bandera=True;
        
        //return "entra2";
        $msj='';
        $BanMSJ=0;
        return view('CerrarCiclo.index',compact('bandera','BanMSJ','msj'));
    }
    else{
        $bandera=False;
        $msj='';
        $BanMSJ=0;
        return view('CerrarCiclo.index',compact('bandera','BanMSJ','msj'));        }
    }
    
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return "ya lo hice";
        $todo=CalificacionesParciales::all();
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
        //return $todo;
        $Alumno_Aprobado=array();
        $Alumno_Reprobado=array();
        $Materia_Nombre=array();
        for ($i=0; $i <count($todo) ; $i++){
            array_push($Alumno_Aprobado, $todo[$i]);

            $b=false;
            if (count($Materia_Nombre)!=0){
                for ($j=0; $j < count($Materia_Nombre); $j++) { 
                    if ($Materia_Nombre[$j]!=$todo[$i]->ClaveM){
                        $b==true;
                    }
                }
                if ($b==false){
                    array_push($Materia_Nombre, $todo[$i]->ClaveM);
                }
            }
            else {
                array_push($Materia_Nombre, $todo[$i]->ClaveM);
            }
            
            $suma=($todo[$i]->Parcial1+$todo[$i]->Parcial2)/2;
            //return $suma;
            $suma=($suma+$todo[$i]->Semestral)/2;
            //return $suma;
            
            //return $NS[2]."-".$todo[$i]->ClaveM;

            $S=$todo[$i]->Semestre;
            if ($suma<6) {
                //return "llegue aqui";
                $P_Verificar_I=Irregulares::where('Clave_A',$todo[$i]->Clave_A)->get();
                if (count($P_Verificar_I)==0){
                    $alumnoL=new Irregulares();
                    $alumnoL->Clave_A=$todo[$i]->Clave_A;
                    $alumnoL->save(); 
                    $mate=new IrregularMateria();
                    $mate->Clave_A=$todo[$i]->Clave_A;
                    $mate->Clave_M=$todo[$i]->ClaveM;
                    $mate->Calificacion1=0.0;
                    $mate->Fecha=null;
                    $mate->Oportunidades=0.0;
                    $mate->save();

                    $mate2=new IrregularMateriaHistorico();
                    $mate2->Clave_A=$todo[$i]->Clave_A;
                    $mate2->Clave_M=$todo[$i]->ClaveM;

                    $mate2->Calificacion1=0.0;
                    $mate2->Fecha=null;
                    $mate2->Oportunidades=0.0;
                    $mate2->save();
                }
                else{
                    $P_Verificar_M=IrregularMateria::where('Clave_A',$todo[$i]->Clave_A)->where('Clave_M',$todo[$i]->ClaveM)->get();
                    if (count($P_Verificar_M)==0){
                        $mate=new IrregularMateria();
                        $mate->Clave_A=$todo[$i]->Clave_A;
                        $mate->Clave_M=$todo[$i]->ClaveM;
                        $mate->Calificacion1=0.0;
                        $mate->Fecha=null;
                        $mate->Oportunidades=0.0;
                        $mate->save();

                        $mate2=new IrregularMateriaHistorico();
                        $mate2->Clave_A=$todo[$i]->Clave_A;
                        $mate2->Clave_M=$todo[$i]->ClaveM;
                        $mate2->Calificacion1=0.0;
                        $mate2->Fecha=null;
                        $mate2->Oportunidades=0.0;
                        $mate2->save();
                    }
                }
                $Obtener_Estadistico=EstadisticaSemestre::all();
                //return $Obtener_Estadistico;
                if (count($Obtener_Estadistico)==0){
                    $mate=new EstadisticaSemestre();
                    $mate->Aprobados=0;
                    $mate->Reprobados=0;
                    $mate->Semestre=$S;
                    $mate->Materia=$todo[$i]->ClaveM;
                    $mate->Periodo=$Per.$Año;
                    $mate->save();
                }
                else{
                    $Obtiene_Materias_Ya_registradas=EstadisticaSemestre::where('Materia',$todo[$i]->ClaveM)->where('Semestre',$S)->get();
                   
                    if (count($Obtiene_Materias_Ya_registradas)==0){
                        $mate=new EstadisticaSemestre();
                        $mate->Aprobados=0;
                        $mate->Reprobados=0;
                        $mate->Semestre=$S;
                        $mate->Materia=$todo[$i]->ClaveM;
                        $mate->Periodo=$Per.$Año;
                        $mate->save();
                    }
                }
                $mod=EstadisticaSemestre::where('Materia',$todo[$i]->ClaveM)->where('Semestre',$S)->get('Reprobados');
                $Cambia=$mod[0]->Reprobados+1;
                EstadisticaSemestre::where('Materia',$todo[$i]->ClaveM)->where('Semestre',$S)->update(['Reprobados'=>$Cambia]);
                
                $nomM=Materia::where('Clave_M',$todo[$i]->ClaveM)->get('Nombre');
                //return $nomM[0]->Nombre;
                $nK=new Kardex();
                $nK->Clave_A=$todo[$i]->Clave_A;
                $nK->Clave_M=$todo[$i]->ClaveM;
                $nK->NombreM=$nomM[0]->Nombre;
                $nK->Fecha=null;
                $nK->Oportunidades=null;
                $nK->Calificacion=0;
                $nK->Grupo=$todo[$i]->Grupo;
                $nK->Semestre=$todo[$i]->Semestre;
                $nK->save();
                CalificacionesParciales::where('ClaveM',$todo[$i]->ClaveM)->where('Clave_A',$todo[$i]->Clave_A)->delete();
            }
            else
            {
                //$PeriodoAlumno;
                //return "llegue aqui Kardex";
                $NS="$suma";
                $ss=0;
                if (strlen($NS)>2)
                {
                    if ($NS[2]=='5' or $NS[2]=='6' or $NS[2]=='7' or $NS[2]=='8' or $NS[2]=='9')
                    {
                        $ss=round($suma, 0, PHP_ROUND_HALF_UP);
                    }
                    else
                    {
                        $ss=round($suma, 0, PHP_ROUND_HALF_DOWN);   
                    }
                }
                else
                {
                    $ss=$suma;
                }
                $nomM=Materia::where('Clave_M',$todo[$i]->ClaveM)->get('Nombre');
                //return $nomM[0]->Nombre;
                $nK=new Kardex();
                $nK->Clave_A=$todo[$i]->Clave_A;
                $nK->Clave_M=$todo[$i]->ClaveM;
                $nK->NombreM=$nomM[0]->Nombre;
                $nK->Fecha=null;
                $nK->Oportunidades=null;
                $nK->Calificacion=$ss;
                $nK->Grupo=$todo[$i]->Grupo;
                $nK->Semestre=$todo[$i]->Semestre;
                $nK->save();
                CalificacionesParciales::where('ClaveM',$todo[$i]->ClaveM)->where('Clave_A',$todo[$i]->Clave_A)->delete();
            }
        }
        $bandera=False;
        $msj='Ciclo cerrado con éxito.';
        $BanMSJ=1;
        return view('CerrarCiclo.index',compact('bandera','msj','BanMSJ'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
