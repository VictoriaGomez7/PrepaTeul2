<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kardex;
use App\Nombrealumno;
use App\Alumno;
use App\ft_bach;
use App\Grupo;
use DB;
use PDF;
use Session;

class KaredexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $CL_A=$request->id;
        //return $CL_A;
        $NombreA=Nombrealumno::where('Clave_A', $CL_A)->get();
        //return $NombreA;
        if (count($NombreA)==0)
        {

            return back()->with('msj','EL estudiante no existe' );
        }
        else
        {
            $infoA=Alumno::where('Clave_A', $request->id)->get();
            //return $infoA;
            $bachi=ft_bach::where('Clave_A', $request->id)->get();
            //return $bachi;

            $kard=Kardex::where('Clave_A', $request->id)->get();
            //return $kard;
            
            $Grup=Grupo::where('Clave_A', $request->id)->get();
            
            $pdf= PDF::loadView('Alumnos.PDFKARDEX',compact('NombreA','infoA','Grup','bachi','kard'));
            return $pdf->stream();
            
        //return view('Alumnos.PDFKARDEX',compact('NombreA','infoA','Grup','bachi','kard'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
