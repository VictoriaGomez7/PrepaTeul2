<?php

namespace App\Http\Controllers;


use App\Docentes;
Use Session;
Use Redirect;
Use Alert;
use Illuminate\Http\Request;
use App\Http\Requests\TagStoreRequestDocentes;
use App\usuariomaestro;
use Illuminate\Support\Facades\Crypt;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $id)
    {
        //return $id->id1;
        //return $id->name;
          if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
    }
        if ($id->name!="" && $id->id1==""){

            $CDocente = Docentes::where('Nombre', $id->name)->get();
            if (count($CDocente)==0)
            {
                return back()->with('msj',' El docente no existe' );
            }
            else{
                if (count($CDocente)>1)
                {
                    return view('Docente.consultaT',compact('CDocente'));
                }
                else{
                    return view('DocenteC.showC',compact('CDocente'));
                }
            }
        }
        if ($id->id1!="" && $id->name==""){
            $CDocente = Docentes::where('Clave_D', $id->id1)->get();
            if (count($CDocente)==0){
                return back()->with('msj',' El docente no existe' );
            }
            else{
                return view('DocenteC.showC',compact('CDocente'));
            }
        }

        if ($id->name=="" && $id->id1==""){
            return back()->with('msj','Favor de ingresar un dato.' );
        }

        if ($id->name!="" && $id->id1!=""){
            $CDocente = Docentes::where('Clave_D', $id->id1)->get();
            foreach ($CDocente as $key) {
                //return $id->name;
                if ($key->Nombre==$id->name){
                    return view('DocenteC.showC',compact('CDocente'));
                }
                else{
                   return back()->with('msj','El usuario y nombre no coinciden.' );
                }
            }
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //echo "hola";
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagStoreRequestDocentes $request)
    {
          if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
    }
        $docente=new Docentes();
        $docente->Clave_D=$request['Clave'];
        $docente->Nombre=$request['nombre'];
        $docente->Domicilio=$request['direccion'];
        $docente->Telefono=$request['telefono'];
        $docente->Email=$request['Email'];
        $docente->Curp=$request['Curp'];
        $docente->save();

        $docenteL=new usuariomaestro();
        $docenteL->Usuario=$request['Clave'];
        $docenteL->Password=Crypt::encrypt('1234'); //ESTO PARA ENCRIPTAR DATOS
        $docenteL->save();

        return back()->with('msj','Docente registrado con éxito.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(request $id)
    {
          if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
    }
        $CDocente = Docentes::where('Clave_D', $id->id)->get();
        return view('DocenteC.show',compact('CDocente'));

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(request $docente1)
    {
          if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
    }
        $doce="";
        $doces=Docentes::where([['Clave_D',$docente1->clave1]])->get();
        //return $doces;
        foreach ($doces as $row){
            $doce=$row;
            $doce->fill($docente1->all());
        }
        $doce->save();


        return Redirect('docenteconsulta')->with('msj1','Docente modificado exitosamente.' );

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
        return Redirect('Docente')->with('msj1','Docente modificado exitosamente.' );
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
        Docentes::where('Clave_D',$id)->delete();
        usuariomaestro::where('Usuario',$id)->delete();
        Docentes::get();
        //return  view('Alumnos.index',compact('alumnos'));
       return Redirect('docenteconsulta')->with('msj1','Docente Eliminado Correctamente');
    }
}
