<?php

namespace App\Http\Controllers;


use App\usuarioCE;
Use Session;
Use Redirect;
Use Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class LoginCEController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('LoginCE.index');
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
        //return $request;
        //return "Si llega2";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        

        $CE = usuarioCE::where('Usuario', $request->Usuario)->get();
        //return $CE;
        if (count($CE)==0)
        {

            return back()->with('msj',' Usuario o Contraseña incorrecta' );
        }
        else{
            $con= usuarioCE::where('Usuario', $request->Usuario)->get('Password');
            $var=Crypt::decrypt($con[0]->Password);

            $_SESSION['usuarioUser']=$request->Usuario;
            $_SESSION['ContraPass']=$var;
            if ($var==$request->Contraseña)
            {
                return Redirect('/ControlEscolarInicio');
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
        $usu=usuarioCE::all();
        usuarioCE::where('Usuario',$usu[0]->Usuario)->update(['Password'=>Crypt::encrypt($request['contra'])]);
        return redirect('LoginControlEscolar')->with('msjC','Contraseña modificada correctamente.');
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
