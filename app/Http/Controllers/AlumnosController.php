<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use App\Requisito;
use App\usuarioalumno;
use App\ft_bach;
use App\Grupo;
use App\Nombrealumno;
use App\Http\Requests\TagStoreRequestFTyBACH;
use App\Http\Requests\TagStoreRequest;
use Illuminate\Support\Facades\Crypt;
use App\Formaciones;
use App\Bachilleratos;
use Carbon\Carbon;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $alumno1)
    {
      if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
    }
      $clave=$alumno1->id;
      $nombre=$alumno1->nombre;
      if (isset($clave)&&isset($nombre)) {
        $CAlumno = Alumno::where('Clave_A',$clave)->get();
        if (count($CAlumno)==0){
          return back()->with('msj',' Algún dato no existe' );
        }
        else {
          foreach ($CAlumno as $campo) {
            if ($campo->Nombre_A==$nombre) {
              $bachis=ft_bach::where('Clave_A',$CAlumno[0]->Clave_A)->get();
              $Requisitos= Requisito::where('Clave_A',$CAlumno[0]->Clave_A)->get();
              return view('Alumnos.formdisable',compact('CAlumno','Requisitos','bachis'));
            }
            else {
                return back()->with('msj',' Datos no encontrados.' );
            }
          }
        }

      }

      else if  (isset($clave)) {
        $CAlumno = Alumno::where('Clave_A', $alumno1->id)->get();
        //return $CAlumno;

        if (count($CAlumno)==0){
          return back()->with('msj','La matrícula no existe' );
          }
          else{
            $Requisitos= Requisito::where('Clave_A',$alumno1->id)->get();
            $bachis=ft_bach::where('Clave_A',$alumno1->id)->get();
            return view('Alumnos.formdisable',compact('CAlumno','Requisitos','bachis'));
          }
        }


        else {
          $CAlumno = Alumno::where('Nombre_A', $alumno1->nombre)->get();

          if (count($CAlumno)==0){
            return back()->with('msj',' El nombre ingresado no existe' );
          }
          else if(count($CAlumno)==1){
            $Requisitos= Requisito::where('Clave_A',$CAlumno[0]->Clave_A)->get();
            $bachis=ft_bach::where('Clave_A',$CAlumno[0]->Clave_A)->get();
            return view('Alumnos.formdisable',compact('CAlumno','alumno1','Requisitos','bachis'));
          }
          else {
            //return 'aqui';
            return view('Alumnos.index',compact('CAlumno','alumno1'));
          }

        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($alumno1)
    {
          if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
    }
        return $alumno1;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagStoreRequest $request, TagStoreRequestFTyBACH $request2)
    {
       if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
    }
        
        //return $request;
        $nombrealumn='';
        $nombrealumn=$nombrealumn.$request['nombre'].' '.$request['ApellidoP'].' '.$request['ApellidoM'];
        //return $nombrealumn;
        //return $request['fecha'];
       
        $alumno=new Alumno();
        $alumno->Clave_A=$request['matricula'];
        $alumno->Nombre_A=$nombrealumn;
        $alumno->Nombre_P=$request['nombrepadre'];
        $alumno->Nombre_M=$request['nombremadre'];
        $alumno->Domicilio=$request['domicilio'];
        $alumno->Telefono_T=$request['telefonotutor'];
        $alumno->Telefono_A=$request['telefonoalumno'];
        $alumno->Poblacion=$request['poblacion'];
        $alumno->Municipio=$request['municipio'];
        $alumno->Fecha_Nac=$request['fecha'];
        $alumno->Edad=$request['edad'];
        $alumno->Email=$request['correo'];
        $alumno->Curp=$request['curp'];
        $alumno->NSS=$request['nss'];
        $alumno->Grado=$request['semestres'];
        $alumno->Semestre=$request['semestree'];
        $alumno->Sexo=$request['sexo'];
        $alumno->Estado='REGULAR';
        $alumno->save();

        $nombreal=new Nombrealumno();
        $nombreal->Clave_A=$request['matricula'];
        $nombreal->Nombre=$request['nombre'];
        $nombreal->ApellidoP=$request['ApellidoP'];
        $nombreal->ApellidoM=$request['ApellidoM'];
        $nombreal->save();

        $requisito=new Requisito();
        $requisito->Clave_A=$request['matricula'];
        $requisito->Requisito_A=$request['A'];
        $requisito->Requisito_B=$request['B'];
        $requisito->Requisito_C=$request['C'];
        $requisito->Requisito_D=$request['D'];
        $requisito->Requisito_E=$request['E'];
        $requisito->Requisito_F=$request['F'];
        $requisito->Requisito_G=$request['G'];
        $requisito->Requisito_H=$request['H'];
        $requisito->save();

        $alumnoL=new usuarioalumno();
        $alumnoL->Usuario=$request['matricula'];
        $alumnoL->Password=Crypt::encrypt('1234'); //ESTO PARA ENCRIPTAR DATOS
        $alumnoL->save();

        $campo=new ft_bach();
        $campo->Clave_A=$request['matricula'];
        $campo->Formación_Trabajo=$request2['ft1'];
        $campo->Bachillerato=$request2['bach1'];
        $campo->save();

        //return $alumno->fechAll('Numero');

        return back()->with('msj','Alumno inscrito con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $alumno1)

    {
        if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
    }
        //return $alumno1;
        $alumn="";
        $alumns=Alumno::where([['Clave_A',$alumno1->Clave_A]])->get();
        foreach ($alumns as $row){
            $alumn=$row;
            $alumn->fill($alumno1->all());
        }
        $alumn->save();

        $req="";
        $reqs=Requisito::where([['Clave_A',$alumno1->Clave_A]])->get();
        foreach ($reqs as $row){
            $req=$row;
            $req->fill($alumno1->all());
        }
        $req->save();

        $bach="";
        $bachi=ft_bach::where([['Clave_A',$alumno1->Clave_A]])->get();
        foreach ($bachi as $row){
            $bach=$row;
            $bach->fill($alumno1->all());
        }
        $bach->save();
        

       return redirect('alumnosconsulta')->with('msj2','Alumno modificado correctamente.');


    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
    }
        $CAlumno = Alumno::where('Clave_A', $id)->get();
        $Requisitos = Requisito::where('Clave_A', $id)->get();
        $bachis=ft_bach::where('Clave_A',$id)->get();



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
              
        return view('Alumnos.show',compact('CAlumno','Requisitos','bachis' ,'opcionesFormacion',
          'opcionesBachillerato'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
    }
      Alumno::where('Clave_A',$id)->delete();
      usuarioalumno::where('Usuario',$id)->delete();
        Requisito::where('Clave_A',$id)->delete();
        ft_bach::where('Clave_A',$id)->delete();
       $alumnos=Alumno::get();
        //return  view('Alumnos.index',compact('alumnos'));
       return redirect('/alumnosconsulta')->with('msj2','Alumno eliminado correctamente.');
    }
}
