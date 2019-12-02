<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuarioalumno;
use App\usuariomaestro;
use Illuminate\Support\Facades\Crypt;

class ContraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $usua=$request->valor;

        $alumns=usuarioalumno::where([['Usuario',$usua]])->get();
        if (count($alumns)!=0) {
            return view('Alumnos.cambiarcontra',compact('usua'));
        }
        $maestros=usuariomaestro::where([['Usuario',$usua]])->get();

        if (count($maestros)==1) {
            return view('DocenteC.cambiarcontra',compact('usua'));
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
        //return 'aqui';
        $usua=$request->clave;

        $alumns=usuarioalumno::where([['Usuario',$usua]])->get();
        if (count($alumns)!=0) {
            usuarioalumno::where('Usuario',$request->clave)->delete();
        $usu=new usuarioalumno();
            $usu->Usuario=$request['clave'];
            $usu->Password=Crypt::encrypt($request['contra']);
            $usu->save();
        return redirect('LoginAlumno')->with('msjC','Contraseña modificada correctamente');

        }
        $maestros=usuariomaestro::where([['Usuario',$usua]])->get();

        if (count($maestros)==1) {
            usuariomaestro::where('Usuario',$request->clave)->delete();

        $usu=new usuariomaestro();
            $usu->Usuario=$request['clave'];
            $usu->Password=Crypt::encrypt($request['contra']);
            $usu->save();
        return redirect('LoginDocente')->with('msjC','Contraseña modificada correctamente');

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($request)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($request)
    {
      ;
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
