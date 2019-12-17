<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bachilleratos;

class BachilleratoController extends Controller
{
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
        $bach=Bachilleratos::all();
        //return $bach;
        //return 'entra a bachilleratos';
        return view('Modalidades.RegistroBach',compact('bach'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
        }
        $bach=Bachilleratos::all();
        $band=false;
        foreach ($bach as $campo) {
            if ($campo->Nombre_B==$request['Nombre_B']) {
                $band=true;
        }
    }
        if ($band==false) {
            
        $bachi=new Bachilleratos();
        $bachi->Nombre_B=$request['Nombre_B'];
        $bachi->save();
        $bach=Bachilleratos::all();
        //return $bach;
        //return 'entra a bachilleratos';
        //return view('Modalidades.RegistroBach',compact('bach'));
        return back()->with('msj1','Bachillerato guardado correctamente');
    }
    else{
        return back()->with('msj','Bachillerato anteriormente registrado');
    }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $id)
    {
        if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
        }
        $bach=Bachilleratos::all();
        $band=false;
        foreach ($bach as $campo) {
            if ($campo->Nombre_B==$id['Nombre_B'] and $campo->id!=$id->id) {
                $band=true;
        }
    }

        if ($band==false){
            $bach="";
                $bachi=Bachilleratos::where([['id',$id->id]])->get();
                foreach ($bachi as $row){
                    $bach=$row;
                    $bach->fill($id->all());
                }
                $bach->save();
                return back()->with('msj1','Bachillerato modificado correctamente');
            }else{
        return back()->with('msj','Bachillerato anteriormente registrado');
    }
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
        return "update";
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

        Bachilleratos::where('Nombre_B',$id)->delete();
        return back()->with('msj1','Bachillerato eliminado correctamente');
    }
}
