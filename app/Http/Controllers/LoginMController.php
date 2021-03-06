<?php

namespace App\Http\Controllers;

use App\usuariomaestro;
Use Session;
Use Redirect;
Use Alert;
//use mysql_connect ("localhost", "root","");
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class LoginMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('LoginM.index');
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
    public function show(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'g-recaptcha-response' => 'required|captcha'
        ]);


        if(!isset($_SESSION['usuarioUserD'])){
            $_SESSION['usuarioUserM']="";
            $_SESSION['ContraPassM']="";
        }

        $CE = usuariomaestro::where('Usuario', $request->Usuario)->get();
        if (count($CE)==0)
        {

            return back()->with('msj',' Usuario o Contraseña incorrecta');
        }
        else{
            $Ps=usuariomaestro::where('Usuario', $request->Usuario)->get('Password');
            $usua=$CE[0]->Usuario;
            $var=Crypt::decrypt($Ps[0]->Password);
            if ($var==$request->Contraseña)
            {
                $_SESSION['usuarioUserM'].=$request->Usuario.",";
                $_SESSION['ContraPassM'].=$var.",";
                view('DocenteInterfazPrincipal.InterfazPrincipal',compact('usua'));
                return view('DocenteInterfazPrincipal.InterfazPrincipal2',compact('usua','CE'));
            }
            else{
                return back()->with('msj',' Usuario o Contraseña incorrecta' );
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
        if(!isset($_SESSION['ContraPassM']) || !isset($_SESSION['usuarioUserM'])){
            return view('interfazprincipal.Interfaz');
        }
        $usua = $request['valor'];
        return view('LoginM.cambiarcontra',compact('usua'));
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
        if(!isset($_SESSION['ContraPassM']) || !isset($_SESSION['usuarioUserM'])){
            return view('interfazprincipal.Interfaz');
        }
        $var=Crypt::encrypt($request['contra']);

        return $var;
        usuariomaestro::where('Usuario',$request->clave)->update(['Password'=>$var]);
        return view('LoginM.index');
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
