<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kardex;
use App\Nombrealumno;
use App\Alumno;
use App\ft_bach;
use App\Grupo;
use App\PeriodoAlumno;
use App\Materia;
use DB;
use PDF;
use Session;

class KaredexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $CL_A=$request->id;
        //return $CL_A;
        $NombreA=Nombrealumno::where('Clave_A', $CL_A)->get();
        //return $NombreA;
        if (count($NombreA)==0)
        {

            return back()->with('msj','EL estudiante no existe' );
        }
        else
        {

            $var1=0;
            $var2=0;
            $var3=0;
            $var4=0;
            $var5=0;
            $var6=0;
            //$Primer=array();
            //$MATPrimer=array();

            $Primer=Kardex::where('Clave_A',$request->id)->where('Semestre','PRIMER SEMESTRE')->get();
            $MATPrimer=Materia::where('Semestre','PRIMER SEMESTRE')->get();

             $Segund=Kardex::where('Clave_A',$request->id)->where('Semestre','SEGUNDO SEMESTRE')->get();
            $MATSegund=Materia::where('Semestre','PRIMER SEMESTRE')->get();
            $bachi=ft_bach::where('Clave_A', $request->id)->get();
            $ba=$bachi[0]->Bachillerato;
            $ftraba=$bachi[0]->Formación_Trabajo;
            //return $ftraba;
            $Terce=Kardex::where('Clave_A',$request->id)->where('Semestre','TERCER SEMESTRE')->get();
            $MATTerce=Materia::where('Semestre','TERCER SEMESTRE')->get();
            $MATTerceft=Materia::where('Semestre','TERCER SEMESTRE')->where('Tipo','Formación Para El Trabajo')->where('Nombre',$ftraba)->get();

             $Cuart=Kardex::where('Clave_A',$request->id)->where('Semestre','CUARTO SEMESTRE')->get();
            $MATCuart=Materia::where('Semestre','CUARTO SEMESTRE')->get();
            $MATCuartft=Materia::where('Semestre','CUARTO SEMESTRE')->where('Tipo','Formación Para El Trabajo')->where('Nombre',$ftraba)->get();
             
            $Quint=Kardex::where('Clave_A',$request->id)->where('Semestre','QUINTO SEMESTRE')->get();

            $bach=ft_bach::where('Clave_A', $request->id)->get('Bachillerato');
            $ba=$bach[0]->Bachillerato;
            //return $ba;
            $MATQuint=Materia::where('Semestre','QUINTO SEMESTRE')->where('Tipo','Formación Básica')->get();
            $MATQuint2=Materia::where('Semestre','QUINTO SEMESTRE')->where('Tipo','Actividades Paraescolares')->get();
            $MATQuint3=Materia::where('Semestre','QUINTO SEMESTRE')->where('Tipo','Formación Propedéutica')->where('Bachillerato',$ba)->get();
            $MATQuintft=Materia::where('Semestre','QUINTO SEMESTRE')->where('Tipo','Formación Para El Trabajo')->where('Nombre',$ftraba)->get();

            //return $ba;
            $Sex=Kardex::where('Clave_A',$request->id)->where('Semestre','SEXTO SEMESTRE')->get();
            $MATSex=Materia::where('Semestre','SEXTO SEMESTRE')->where('Tipo','Formación Básica')->get();
            $MATSex2=Materia::where('Semestre','SEXTO SEMESTRE')->where('Tipo','Actividades Paraescolares')->get();
            $MATSex3=Materia::where('Semestre','SEXTO SEMESTRE')->where('Bachillerato',$ba)->where('Tipo','Formación Propedéutica')->get();
            $MATSexft=Materia::where('Semestre','SEXTO SEMESTRE')->where('Tipo','Formación Para El Trabajo')->where('Nombre',$ftraba)->get();

            $infoA=Alumno::where('Clave_A', $request->id)->get();
            
            $Grup=Grupo::where('Clave_A', $request->id)->get();
            //return $Primer;
            $Gr1="";
            $Gr2="";
            $Gr3="";
            $Gr4="";
            $Gr5="";
            $Gr6="";
            if (count($Primer)>0)
            {
                $var1=1;
                $Gr1=$Primer[0]->Grupo;
            }
            if (count($Segund)>0)
            {
                $var2=1;
                $Gr2=$Segund[0]->Grupo;
            }
            if (count($Terce)>0)
            {
                $var3=1;
                $Gr3=$Terce[0]->Grupo;
            }
            if (count($Cuart)>0)
            {
                $var4=1;
                $Gr4=$Cuart[0]->Grupo;
            }
            if (count($Quint)>0)
            {
                $var5=1;
                $Gr5=$Quint[0]->Grupo;   

            }
            if (count($Sex)>0)
            {
                $var6=1;
                $Gr6=$Sex[0]->Grupo;
            }
            $seme=0;
            $semeft=0;
            //return $infoA[0]->Semestre;
            if ($infoA[0]->Semestre=='QUINTO SEMESTRE' or $infoA[0]->Semestre=='SEXTO SEMESTRE')
            {
                $seme=1;
            }
            if ($infoA[0]->Semestre=='TERCER SEMESTRE' or $infoA[0]->Semestre=='CUARTO SEMESTRE' or $infoA[0]->Semestre=='QUINTO SEMESTRE' or $infoA[0]->Semestre=='SEXTO SEMESTRE' )
            {
                $semeft=1;
            } 
            //return $MATSex.$MATSex2.$MATSex3;
            //return $MATTerceft
            $Peri=PeriodoAlumno::where('Clave_A', $request->id)->get();
            $pdf= PDF::loadView('Alumnos.pdf',compact('NombreA','infoA','Grup','ba','Primer','Segund','Terce','Cuart','Quint','Sex','MATPrimer','MATSegund','MATTerce','MATTerceft','MATCuart','MATCuartft','MATQuint','MATQuint2','MATQuint3','MATQuintft','MATSex','MATSex2','MATSex3','MATSexft','Peri','bachi','var1','var2','var3','var4','var5','var6','seme','semeft','Gr1','Gr2','Gr3','Gr4','Gr5','Gr6'));
            return $pdf->stream();
            
        //return view('Alumnos.PDFKARDEX',compact('NombreA','infoA','Grup','bachi','kard'));
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
