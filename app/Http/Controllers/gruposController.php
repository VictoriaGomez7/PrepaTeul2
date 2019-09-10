<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Alumno;
use App\Grupo;
use App\GrupoTemporal;
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

        return view('Grupos.index');
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
    public function show(Request $r ,$semestre)
    {
        //return $r;
        if(isset($r->aceptar)){
           

 

  $alumnosHombres=DB::select("SELECT DISTINCT alumnos.Clave_A,alumnos.Semestre ,alumnos.Sexo,alumnos.Nombre_A
from alumnos    WHERE not EXISTS (SELECT 1 from grupos
        WHERE grupos.Clave_A=alumnos.Clave_A
                          )and  not EXISTS (SELECT 1 from grupo_temporals
        WHERE grupo_temporals.Clave_A=alumnos.Clave_A
                          ) and alumnos.Sexo='HOMBRE' AND alumnos.Semestre= :sem" ,['sem'=>$r->semestre]);


$alumnosMujeres=DB::select("SELECT DISTINCT alumnos.Clave_A,alumnos.Semestre ,alumnos.Sexo ,alumnos.Nombre_A
from alumnos    WHERE not EXISTS (SELECT 1 from grupos
        WHERE grupos.Clave_A=alumnos.Clave_A
                          )and  not EXISTS (SELECT 1 from grupo_temporals
        WHERE grupo_temporals.Clave_A=alumnos.Clave_A
                          ) and alumnos.Sexo='MUJER' AND alumnos.Semestre= :sem" ,['sem'=>$r->semestre]);
            # code...
$semestre=$r->semestre;


    $listaA=DB::select("SELECT DISTINCT alumnos.Clave_A,alumnos.Nombre_A
from alumnos    WHERE  (EXISTS (SELECT 1 from grupos
        WHERE grupos.Clave_A=alumnos.Clave_A and grupos.Grupo='A')
        or   EXISTS ((SELECT 1 from grupo_temporals
        WHERE grupo_temporals.Clave_A=alumnos.Clave_A and grupo_temporals.Grupo='A'
                          )))
                          AND alumnos.Semestre= :sem" ,['sem'=>$r->semestre]);
             //$s='Semestre'.$r->semestre;
//return $s;

             $listaB=DB::select("SELECT DISTINCT alumnos.Clave_A,alumnos.Nombre_A
from alumnos    WHERE  (EXISTS (SELECT 1 from grupos
        WHERE grupos.Clave_A=alumnos.Clave_A and grupos.Grupo='B')
        or   EXISTS ((SELECT 1 from grupo_temporals
        WHERE grupo_temporals.Clave_A=alumnos.Clave_A and grupo_temporals.Grupo='B'
                          )))
                          AND alumnos.Semestre= :sem" ,['sem'=>$r->semestre]);
return view('grupos.creaGrupos',compact('alumnosHombres','alumnosMujeres' ,'semestre','listaA','listaB'));
      


        }else if(isset($r->A)){
            $alumnos=GrupoTemporal::take(10000)->get();
           

                  foreach ($alumnos as $alum ) {
                      # code...
                    $numero=$alum->Clave_A;
                    $grupo=$alum->Grupo;
                    $alumnosGrupo=new Grupo();

                         $alumnosGrupo->Clave_A=$numero;
                        $alumnosGrupo->Grupo=$grupo;    
                        $alumnosGrupo->save();
                        //return $alum;
                       $alum->delete();

                  }
                    $temporal=GrupoTemporal::all();
                    //return $temporal;
                return view('grupos.index'); 

        }else {
            
            $numeros=[];
                         $alumnos=Alumno::where([['Semestre',$semestre] ])->get();
             foreach ($alumnos as $alumno) {
                 # code...
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
                 $alumnosHombres=DB::select("SELECT DISTINCT alumnos.Clave_A,alumnos.Semestre ,alumnos.Sexo,alumnos.Nombre_A
from alumnos    WHERE not EXISTS (SELECT 1 from grupos
        WHERE grupos.Clave_A=alumnos.Clave_A
                          )and  not EXISTS (SELECT 1 from grupo_temporals
        WHERE grupo_temporals.Clave_A=alumnos.Clave_A
                          ) and alumnos.Sexo='HOMBRE' AND alumnos.Semestre= :sem" ,['sem'=>$r->semestre]);
$alumnosMujeres=DB::select("SELECT DISTINCT alumnos.Clave_A,alumnos.Semestre ,alumnos.Sexo ,alumnos.Nombre_A
                from alumnos    WHERE not EXISTS (SELECT 1 from grupos
        WHERE grupos.Clave_A=alumnos.Clave_A
                          )and  not EXISTS (SELECT 1 from grupo_temporals
        WHERE grupo_temporals.Clave_A=alumnos.Clave_A
                          ) and alumnos.Sexo='MUJER' AND alumnos.Semestre= :sem" ,['sem'=>$r->semestre]);
            # code...
$semestre=$r->semestre;
    
  $listaA=DB::select("SELECT DISTINCT alumnos.Clave_A,alumnos.Nombre_A
from alumnos    WHERE  (EXISTS (SELECT 1 from grupos
        WHERE grupos.Clave_A=alumnos.Clave_A and grupos.Grupo='A')
        or   EXISTS ((SELECT 1 from grupo_temporals
        WHERE grupo_temporals.Clave_A=alumnos.Clave_A and grupo_temporals.Grupo='A'
                          )))
                          AND alumnos.Semestre= :sem" ,['sem'=>$r->semestre]);
             //$s='Semestre'.$r->semestre;
//return $s;

             $listaB=DB::select("SELECT DISTINCT alumnos.Clave_A,alumnos.Nombre_A
from alumnos    WHERE  (EXISTS (SELECT 1 from grupos
        WHERE grupos.Clave_A=alumnos.Clave_A and grupos.Grupo='B')
        or   EXISTS ((SELECT 1 from grupo_temporals
        WHERE grupo_temporals.Clave_A=alumnos.Clave_A and grupo_temporals.Grupo='B'
                          )))
                          AND alumnos.Semestre= :sem" ,['sem'=>$r->semestre]);


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
