<?php

namespace App\Http\Controllers;

//use App\LoginAlumno;
use App\usuarioalumno;
Use Session;
Use Redirect;
Use Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


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

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'g-recaptcha-response' => 'required|captcha'
        ]);

          if(!isset($_SESSION['usuarioUserA'])){
            $_SESSION['usuarioUserA']="";
            $_SESSION['ContraPassA']="";
        }

        $CE = usuarioalumno::where('Usuario', $request->Usuario)->get();

        if (count($CE)==0)
        {
            return back()->with('msj',' Usuario o Contraseña incorrecta' );
        }
        else{
            $usua=$CE[0]->Usuario;
            $Ps=usuarioalumno::where('Usuario', $request->Usuario)->get('Password');
            $usua=$CE[0]->Usuario;
            $var=Crypt::decrypt($Ps[0]->Password);

            if ($var==$request->Contraseña)
            {
                $_SESSION['usuarioUserA'].=$request->Usuario.",";
                $_SESSION['ContraPassA'].=$var.",";
                return view('Alumnosinterfazprincipal.InterfazPrincipal',compact('usua','CE'));
            }
            else{

                return back()->with('msj',' Usuario o Contraseña incorrecta.' );
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
        if(!isset($_SESSION['ContraPassA']) || !isset($_SESSION['usuarioUserA'])){
            return view('interfazprincipal.Interfaz');
        }
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
        if(!isset($_SESSION['ContraPassA']) || !isset($_SESSION['usuarioUserA'])){
            return view('interfazprincipal.Interfaz');
        }
      $var=Crypt::encrypt($request['contra']);
      return $var;
        usuarioalumno::where('Usuario',$request->clave)->update(['Password'=>$var]);
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
