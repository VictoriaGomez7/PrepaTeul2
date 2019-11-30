<?php

namespace App\Http\Controllers;

//use App\LoginAlumno;
use App\usuarioalumno;
Use Session;
Use Redirect;
Use Alert;
use Illuminate\Http\Request;

class LoginAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('LoginA.index');
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
    public function show(Request $request)
    {
        //return 'Aqui';
        $CE = usuarioalumno::where('Usuario', $request->Usuario)->get();
        //$Ps=usuariomaestro::where('Usuario', $request->Usuario)->get('Password');

        $Ps=usuarioalumno::where('Password', $request->Contraseña)->where('Usuario', $request->Usuario) ->get();
        //return 'CE'.$CE.'/'.'PS'.$Ps;
        //return $Ps;
        $usua=$CE[0]->Usuario;
        if (count($CE)==0)
        {

            return back()->with('msj',' Usuario o Contrseña incorrecta' );
        }
        else{
            if ($CE==$Ps)
            {
                return view('Alumnosinterfazprincipal.InterfazPrincipal',compact('usua','CE'));
            }
            else{

                return back()->with('msj',' Usuario o Contrseña incorrecta' );
            }
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
      //return $request['valor'];
      $usua = $request['valor'];
      return view('Alumnos.cambiarcontra',compact('usua'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //return $request['clave'];
        usuarioalumno::where('Usuario',$request->clave)->update(['Password'=>$request['contra']]);
        return view('LoginA.index');
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
