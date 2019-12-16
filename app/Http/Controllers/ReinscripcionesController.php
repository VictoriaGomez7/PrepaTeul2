<?php

namespace App\Http\Controllers;
use App\Alumno;
use App\Reinscripcion;
Use Session;
Use Redirect;
Use Alert;
use App\ft_bach;
use App\Http\Requests\TagStoreRequestFTyBACH;
use Illuminate\Http\Request;
use App\Formaciones;
use App\Bachilleratos;
class ReinscripcionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
    }
        return view('Reinscripciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagStoreRequestFTyBACH $request2)
    {
          if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
    }
        $campo=new ft_bach();
        $campo->Clave_A=$request['Clave_A'];//id
        $campo->Formación_Trabajo=$request2['ft1'];
        $campo->Bachillerato=$request2['bach1'];
        $campo->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $alumno1)//show($id)
    {

          if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
    }           
             $dbFormaciones=Formaciones::get();
        $opcionesFormacion='';
        foreach ($dbFormaciones as $formacion) {
            # code... 
                         $opcionesFormacion.='<option value="'.$formacion->Nombre_FT.' ">
                         '.$formacion->Nombre_FT.'</option>';
              }

        $dbBachillertatos=Bachilleratos::get();
        $opcionesBachillerato='';
        foreach ($dbBachillertatos as $bachillerato) {
            # code... 
                         $opcionesBachillerato.='<option value="'.$bachillerato->Nombre_B.' ">
                         '.$bachillerato->Nombre_B.'</option>';
              }      

        //return $alumno1;
        $CAlumno = Alumno::where('Clave_A', $alumno1->PMatri)->get();
        //return $CAlumno;

        if (count($CAlumno)==0)
        {

            return back()->with('msj',' La matrícula no existe' );
        }
        else{
            if ($CAlumno[0]->Semestre=="SEXTO SEMESTRE") {
                return back()->with('msj','No se puede reinscribir un alumno de Sexto Semestre.' );
            } else {
            $Semes= Alumno::where('Clave_A', $alumno1->PMatri)->get();
            $FtOBache=ft_bach::where('Clave_A', $alumno1->PMatri)->get();//id
            //return $FtOBache;
            $bandera=0;
            //return $Semes->;
            foreach ($Semes as $row ) {
                //return $CALumno;
                $Semes=$row;
                if($Semes->Semestre=='PRIMER SEMESTRE'){
                    $Gra='PRIMER';
                    $opciones2='<option value="PRIMER" selected="true">SEGUNDO SEMESTRE</option>';
                }else if($Semes->Semestre=='SEGUNDO SEMESTRE'){
                     $bandera=1;
                     $Gra='SEGUNDO';
                    $opciones2='
                            <option value="SEGUNDO" selected="true">TERCER SEMESTRE</option>';
                }else if($Semes->Semestre=='TERCER SEMESTRE'){
                   $bandera=11;
                   $Gra='SEGUNDO';
                    $opciones2='
                            <option value="SEGUNDO" selected="true">CUARTO SEMESTRE</option>';
                }else if($Semes->Semestre=='CUARTO SEMESTRE'){
                     $bandera=2;
                     $Gra='TERCER';
                    $opciones2='
                            <option value="TERCER" selected="true">QUINTO SEMESTRE</option>';
                }else if($Semes->Semestre=='QUINTO SEMESTRE'){
                   $bandera=22;
                   $Gra='TERCER';
                    $opciones2='
                            <option value="TERCER" selected="true">SEXTO SEMESTRE</option>';
                }else if($Semes->Semestre=='SEXTO SEMESTRE'){
                    $Gra='TERCER';
                    $opciones2='
                            <option value="TERCER" selected="true">SEXTO SEMESTRE</option>';
                    }
            }
        return view('Reinscripciones.show',compact('CAlumno','alumno1','opciones2','bandera','FtOBache','Gra','opcionesFormacion','opcionesBachillerato'));
        }
    }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $alumno1)
    {
          if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
    }
        $Semestres=['PRIMER SEMESTRE','SEGUNDO SEMESTRE','TERCER SEMESTRE','CUARTO SEMESTRE','QUINTO SEMESTRE','SEXTO SEMESTRE'];
        $Grados=['PRIMER','SEGUNDO','TERCER'];
        $ides=$alumno1['Clave_A'];

        $CAlumno = Alumno::where('Clave_A', $alumno1->Clave_A)->get();
        $CAlumno2 = ft_bach::where('Clave_A', $alumno1->Clave_A)->get();
        //return $CAlumno[0]->Semestre;
        $SemestreAntiguo=$CAlumno[0]->Semestre;
        //return $alumno1;

        //return count($Semestres);
        for ($i=0; $i < count($Semestres) ; $i++) {
            //print $SemestreAntiguo;
            //print "= ";
            //print $Semestres[$i];
            if ($SemestreAntiguo!="SEXTO SEMESTRE") {
                if ($SemestreAntiguo==$Semestres[$i] ) {
                //print "Si Son iguales";
                Alumno::where('Clave_A', $alumno1->Clave_A)->update(['Semestre'=>$Semestres[$i+1]]);

        
                //$CAlumno[0]->;
                $Grado=($i+1)/2;
                Alumno::where('Clave_A', $alumno1->Clave_A)->update(['Grado'=>$Grados[$Grado]]);
                //return $Grados[$Grado];
                //$CAlumno[0]->Grado=$Grados[$Grado];
                }
            }

        }
        //return $CAlumno;
        //return $CAlumno;
        ft_bach::where('Clave_A', $alumno1->Clave_A)->update(['Formación_Trabajo'=>$alumno1->ft2]);
        ft_bach::where('Clave_A', $alumno1->Clave_A)->update(['Bachillerato'=>$alumno1->bach1]);
        //return $CAlumno.' '.$alumno1->id;
        
        Alumno::where('Clave_A', $alumno1->Clave_A)->update(['Telefono_T'=>$alumno1->Telefono_T]);

        Alumno::where('Clave_A', $alumno1->Clave_A)->update(['Telefono_A'=>$alumno1->Telefono_A]);
        Alumno::where('Clave_A', $alumno1->Clave_A)->update(['Domicilio'=>$alumno1->Domicilio]);

        Alumno::where('Clave_A', $alumno1->Clave_A)->update(['Municipio'=>$alumno1->Municipio]);

        Alumno::where('Clave_A', $alumno1->Clave_A)->update(['Poblacion'=>$alumno1->Poblacion]);

        Alumno::where('Clave_A', $alumno1->Clave_A)->update(['Email'=>$alumno1->Email]);

        Alumno::where('Clave_A', $alumno1->Clave_A)->update(['NSS'=>$alumno1->NSS]);

        Alumno::where('Clave_A', $alumno1->Clave_A)->update(['Edad'=>$alumno1->Edad]);

        //foreach ($CAlumno as $row) {

          //      $row->fill($CAlumno->all($alumno1));

            //    $row->save();
            //}
        //return 'hola';
        return redirect('/reinscripcion')->with('msjCorrecto','Alumno reinscrito con éxito.');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $
     * @return \Illuminate\Http\Response
     */
    public function update(Request $alumno,Reinscripciones $basedatos)
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
