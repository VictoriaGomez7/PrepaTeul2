<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Alumno;
use App\Grupo;
use App\GrupoTemporal;
use App\EstadisticaGenero;
use Carbon\Carbon;
use App\CalificacionesParciales;
use App\materia_grupo;
use Illuminate\Support\Facades\DB;
class gruposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $Alumnoss= Alumno::get();

        if (count($Alumnoss)==0){
            return redirect('/ControlEscolarInicio')->with('MsjERR','No hay alumnos registrados' );
        }
        else {
            return view('Grupos.index');
        }
        
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
     //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $r ,$semestre)
    {
        if(isset($r->aceptar)){
 
            $alumnosHombres=DB::select("SELECT DISTINCT alumnos.Clave_A,alumnos.Semestre ,alumnos.Sexo,alumnos.Nombre_A
                from alumnos WHERE not EXISTS (SELECT 1 from grupos WHERE grupos.Clave_A=alumnos.Clave_A) and not EXISTS (SELECT 1 from grupo_temporals WHERE grupo_temporals.Clave_A=alumnos.Clave_A) and alumnos.Sexo='HOMBRE' AND alumnos.Semestre= :sem" ,['sem'=>$r->semestre]);

            $alumnosMujeres=DB::select("SELECT DISTINCT alumnos.Clave_A,alumnos.Semestre ,alumnos.Sexo ,alumnos.Nombre_A from alumnos WHERE not EXISTS (SELECT 1 from grupos WHERE grupos.Clave_A=alumnos.Clave_A) and not EXISTS (SELECT 1 from grupo_temporals WHERE grupo_temporals.Clave_A=alumnos.Clave_A) and alumnos.Sexo='MUJER' AND alumnos.Semestre= :sem" ,['sem'=>$r->semestre]);

            $semestre=$r->semestre;

            $listaA=DB::select("SELECT DISTINCT alumnos.Clave_A,alumnos.Nombre_A from alumnos WHERE (EXISTS (SELECT 1 from grupos WHERE grupos.Clave_A=alumnos.Clave_A and grupos.Grupo='A') or EXISTS ((SELECT 1 from grupo_temporals WHERE grupo_temporals.Clave_A=alumnos.Clave_A and grupo_temporals.Grupo='A'))) AND alumnos.Semestre= :sem" ,['sem'=>$r->semestre]);

            $listaB=DB::select("SELECT DISTINCT alumnos.Clave_A,alumnos.Nombre_A from alumnos WHERE (EXISTS (SELECT 1 from grupos WHERE grupos.Clave_A=alumnos.Clave_A and grupos.Grupo='B') or EXISTS ((SELECT 1 from grupo_temporals WHERE grupo_temporals.Clave_A=alumnos.Clave_A and grupo_temporals.Grupo='B'))) AND alumnos.Semestre= :sem" ,['sem'=>$r->semestre]);

            if(count($alumnosHombres)>0 or count($alumnosMujeres)>0 or count($listaA)>0 or count($listaB)>0){
                return view('grupos.creaGrupos',compact('alumnosHombres','alumnosMujeres' ,'semestre','listaA','listaB'));
                }
                else{
                    return redirect('/grupos')->with('msj2','No hay alumnos registrados' );
                }
            return view('grupos.creaGrupos',compact('alumnosHombres','alumnosMujeres' ,'semestre','listaA','listaB'));
        }
        if(isset($r->A)){
            //$semestre=$r->semestre;
                        $alumnos=GrupoTemporal::take(10000)->get();
                        $matgrup=materia_grupo::where("Semestre",$semestre)->get();
                        //return $matgrup;
                        if (count($matgrup)>0) {
                            
                            
                            $Cant_Hom_A=0;
                            $Cant_Muj_A=0;
                            $Cant_Hom_B=0;
                            $Cant_Muj_B=0;
                       
                            foreach ($alumnos as $alum ) {
                                $numero=$alum->Clave_A;
                                $grupo=$alum->Grupo;
            
                                $alumnosGrupo=new Grupo();
                                $alumnosGrupo->Clave_A=$numero;
                                $alumnosGrupo->Grupo=$grupo;    
                                $alumnosGrupo->save();
                                
                                $Califpar=CalificacionesParciales::where('Clave_A', $numero)->get();
                                //return $Califpar;
                                     $alumnosGrupo->Clave_A=$numero;
                                    $alumnosGrupo->Grupo=$grupo;    
                                    $alumnosGrupo->save();
                                    //return $alum;
                                    if (count($Califpar)==0){
                                        
                                        foreach ($matgrup as $mater ) {
                                            if ($mater->Grupo==$grupo and $mater->Semestre==$semestre) {
                                                $Calif=new CalificacionesParciales();
                                                $Calif->Clave_A=$numero;
                                                $Calif->ClaveM=$mater->Clave_M;
                                                $Calif->Grupo=$grupo;
                                                $Calif->Parcial1=0;
                                                $Calif->Parcial2=0;
                                                $Calif->Semestral=0;
                                                $year_DATE=date('o');
                                                $Calif->Semestre=$semestre;
                                                $Calif->Año=$year_DATE;
                                                $Calif->save();
                                            }
                                        }
                                    }
                                    else {
                                    //return $Califpar;
                                    foreach ($Califpar as $key) {
                                        
                                    
                                        foreach ($matgrup as $mater ) {
                                            if ($mater->Grupo==$grupo and $mater->Semestre==$semestre) {
                                                //$Calif=new CalificacionesParciales();
                                                //$Califpar=CalificacionesParciales::where('Clave_A', $numero)->get();
                                                $key->Clave_A=$numero;
                                                $key->ClaveM=$mater->Clave_M;
                                                $key->Grupo=$grupo;
                                                $key->Parcial1=0;
                                                $key->Parcial2=0;
                                                $key->Semestral=0;
                                                $year_DATE=date('o');
                                                $key->Semestre=$semestre;
                                                $key->Año=$year_DATE;
                                                $key->save();
                                            }
                                        }
                                    }
                                }
                            
            
                                
                            $alum->delete();
                            }
                           
                            $H_M_Grupos_A=Grupo::where('Grupo','A')->get('Clave_A');
                            $H_M_Grupos_B=Grupo::where('Grupo','B')->get('Clave_A');
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
            
                            if (count($H_M_Grupos_A)!=0){
                                foreach ($H_M_Grupos_A as $value) {
                                    $Hom_o_Muj=Alumno::where('Clave_A',$value->Clave_A)->get('Sexo');
                                    if ($Hom_o_Muj[0]->Sexo=='Hombre'){
                                        $Cant_Hom_A+=1;
                                    }
                                    else if($Hom_o_Muj[0]->Sexo=='Mujer'){
                                        $Cant_Muj_A+=1;
                                    }
                                }
            
                                $P_Verificar=EstadisticaGenero::where('Semestre',$semestre)->where('Periodo',$Año)->where('Grupo','A')->get();
            
                                if (count($P_Verificar)!=0){
            
                                    EstadisticaGenero::where('Semestre',$P_Verificar[0]->Semestre)->where('Periodo',$P_Verificar[0]->Periodo)->where('Grupo','A')->update(['Hombres'=>$Cant_Hom_A]);
            
                                    EstadisticaGenero::where('Semestre',$P_Verificar[0]->Semestre)->where('Periodo',$P_Verificar[0]->Periodo)->where('Grupo','A')->update(['Mujeres'=>$Cant_Muj_A]);
                                }
                                else{
                                    $Estadistica=new EstadisticaGenero();
                                    $Estadistica->Hombres=$Cant_Hom_A;
                                    $Estadistica->Mujeres=$Cant_Muj_A;
                                    $Estadistica->Grupo='A';
                                    $Estadistica->Semestre=$semestre;
                                    $Estadistica->Periodo=$Per.$Año;  
                                    $Estadistica->save();
                                }
                            }
                            
                            if (count($H_M_Grupos_B)!=0){
                                foreach ($H_M_Grupos_B as $value) {
                                    $Hom_o_Muj=Alumno::where('Clave_A',$value->Clave_A)->get('Sexo');
                                    if ($Hom_o_Muj[0]->Sexo=='Hombre'){
                                        $Cant_Hom_B+=1;
                                    }
                                    else if($Hom_o_Muj[0]->Sexo=='Mujer'){
                                        $Cant_Muj_B+=1;
                                    }
                                }
                                
                                $P_Verificar=EstadisticaGenero::where('Semestre',$semestre)->where('Periodo',$Año)->where('Grupo','B')->get();
            
                                if (count($P_Verificar)!=0){
                                    EstadisticaGenero::where('Semestre',$P_Verificar[0]->Semestre)->where('Periodo',$P_Verificar[0]->Periodo)->where('Grupo','B')->update(['Hombres'=>$Cant_Hom_B]);
            
                                    EstadisticaGenero::where('Semestre',$P_Verificar[0]->Semestre)->where('Periodo',$P_Verificar[0]->Periodo)->where('Grupo','B')->update(['Mujeres'=>$Cant_Muj_B]);
                                }
                                else{
                                    $Estadistica=new EstadisticaGenero();
                                    $Estadistica->Hombres=$Cant_Hom_B;
                                    $Estadistica->Mujeres=$Cant_Muj_B;
                                    $Estadistica->Grupo='B';
                                    $Estadistica->Semestre=$semestre;
                                    $Estadistica->Periodo=$Año;  
                                    $Estadistica->save();
                                }
                            }
                            
                            $temporal=GrupoTemporal::all();
                            return redirect('grupos')->with('msj','Grupo guardado correctamente.');
                        }
                        else{
                            return redirect('grupos')->with('msj2','No hay materias registradas para este semestre' );
                        }}
        ///////////
        else {
            
            $numeros=[];
            $alumnos=Alumno::where([['Semestre',$semestre] ])->get();
            foreach ($alumnos as $alumno) {
                $n=$alumno->Clave_A;
                $boton='eliminar'.$n;
        
                if(isset($r->$n)){
                    $c='combo'.$n;
                    $GrupoTemporal=new GrupoTemporal();
                    $GrupoTemporal->Clave_A=$n;
                    $GrupoTemporal->Grupo=$r->$c;    
                    $GrupoTemporal->save();
                }
                if(isset($r->$boton)){
                    $eliminado=Grupo::where([['Clave_A',$n] ])->get();
                    foreach ($eliminado as $elimina) {
                        $elimina->delete();
                    }
                    $eliminado=GrupoTemporal::where([['Clave_A',$n] ])->get();
                    foreach ($eliminado as $elimina) {
                        $elimina->delete();
                    }
                } 
            }
            $alumnosHombres=DB::select("SELECT DISTINCT alumnos.Clave_A,alumnos.Semestre ,alumnos.Sexo,alumnos.Nombre_A from alumnos    WHERE not EXISTS (SELECT 1 from grupos WHERE grupos.Clave_A=alumnos.Clave_A) and  not EXISTS (SELECT 1 from grupo_temporals WHERE grupo_temporals.Clave_A=alumnos.Clave_A) and alumnos.Sexo='HOMBRE' AND alumnos.Semestre= :sem" ,['sem'=>$r->semestre]);

            $alumnosMujeres=DB::select("SELECT DISTINCT alumnos.Clave_A,alumnos.Semestre ,alumnos.Sexo ,alumnos.Nombre_A from alumnos    WHERE not EXISTS (SELECT 1 from grupos WHERE grupos.Clave_A=alumnos.Clave_A) and  not EXISTS (SELECT 1 from grupo_temporals WHERE grupo_temporals.Clave_A=alumnos.Clave_A) and alumnos.Sexo='MUJER' AND alumnos.Semestre= :sem" ,['sem'=>$r->semestre]);

            $semestre=$r->semestre;
    
            $listaA=DB::select("SELECT DISTINCT alumnos.Clave_A,alumnos.Nombre_A from alumnos    WHERE  (EXISTS (SELECT 1 from grupos WHERE grupos.Clave_A=alumnos.Clave_A and grupos.Grupo='A') or  EXISTS ((SELECT 1 from grupo_temporals WHERE grupo_temporals.Clave_A=alumnos.Clave_A and grupo_temporals.Grupo='A'))) AND alumnos.Semestre= :sem" ,['sem'=>$r->semestre]);

            $listaB=DB::select("SELECT DISTINCT alumnos.Clave_A,alumnos.Nombre_A from alumnos    WHERE  (EXISTS (SELECT 1 from grupos WHERE grupos.Clave_A=alumnos.Clave_A and grupos.Grupo='B') or EXISTS ((SELECT 1 from grupo_temporals WHERE grupo_temporals.Clave_A=alumnos.Clave_A and grupo_temporals.Grupo='B'))) AND alumnos.Semestre= :sem" ,['sem'=>$r->semestre]);

            return back()->with('alumnosHombres')->with('alumnosMujeres')->with('semestre')->with('listaA')->with('listaB');
        }
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
        return view('Grupos.grupo');
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
