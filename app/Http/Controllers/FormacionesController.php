<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formaciones;

class FormacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bach=Formaciones::all();
        //return $bach;
        //return 'entra a bachilleratos';
        return view('Modalidades.RegistroFT',compact('bach'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $bach=Formaciones::all();
        $band=false;
        foreach ($bach as $campo) {
            if ($campo->Nombre_FT==$request['Nombre_FT']) {
                $band=true;
        }
    }
        if ($band==false) {
            
        $bachi=new Formaciones();
        $bachi->Nombre_FT=$request['Nombre_FT'];
        $bachi->save();
        $bach=Formaciones::all();
        //return $bach;
        //return 'entra a bachilleratos';
        //return view('Modalidades.RegistroBach',compact('bach'));
        return back()->with('msj1','Formación guardada correctamente');
    }
    else{
        return back()->with('msj','Formación anteriormente registrada');
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
        $bach=Formaciones::all();
        $band=false;
        foreach ($bach as $campo) {
            if ($campo->Nombre_FT==$id['Nombre_FT'] and $campo->id!=$id->id) {
                $band=true;
        }
    }

        if ($band==false){
            $bach="";
                $bachi=Formaciones::where([['id',$id->id]])->get();
                foreach ($bachi as $row){
                    $bach=$row;
                    $bach->fill($id->all());
                }
                $bach->save();
                return back()->with('msj1','Formación para el trabajo modificada correctamente');
            }else{
        return back()->with('msj','Formación para el trabajo anteriormente registrada');
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
        //
    }
}
