<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logos;

class LogosController extends Controller
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
        
        //$VariableADividir="Hola.png.exe.div";
        
        $totalogos=Logos::where('Nombre_Imagen','Imagen1')->get();
        $sinimagen='SinImagen.jpg';
        //return $sinimagen;
        if (count($totalogos)==0) {
            $nuevoLogo= new Logos();
            $nuevoLogo->Nombre_Imagen='Imagen1';
            $nuevoLogo->Imagen=$sinimagen;
            $nuevoLogo->save();}
        $totalogos=Logos::where('Nombre_Imagen','Imagen2')->get();
        if (count($totalogos)==0) {
            $nuevoLogo= new Logos();
            $nuevoLogo->Nombre_Imagen='Imagen2';
            $nuevoLogo->Imagen=$sinimagen;
            $nuevoLogo->save();}
        $totalogos=Logos::where('Nombre_Imagen','Imagen3')->get();
        if (count($totalogos)==0) {
            $nuevoLogo= new Logos();
            $nuevoLogo->Nombre_Imagen='Imagen3';
            $nuevoLogo->Imagen=$sinimagen;
            $nuevoLogo->save();}
        $totalogos=Logos::where('Nombre_Imagen','Imagen4')->get();
        if (count($totalogos)==0) {
            $nuevoLogo= new Logos();
            $nuevoLogo->Nombre_Imagen='Imagen4';
            $nuevoLogo->Imagen=$sinimagen;
            $nuevoLogo->save();}
        $ImagenesEnDB=Logos::all();
        return view('Logos.CambiarLogos',compact('ImagenesEnDB'));

        //$Dividido=explode(".", $VariableADividir);

        //print_r($Dividido);
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
        if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
        }

        if ($request->hasFile('Imagen1')) {
            $file=$request->file('Imagen1');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
            $totalogos=Logos::where('Nombre_Imagen','Imagen1')->get();
            if (count($totalogos)==0) {
                $nuevoLogo= new Logos();
                $nuevoLogo->Nombre_Imagen='Imagen1';
                $nuevoLogo->Imagen=$name;
                $nuevoLogo->save();
            } else {
                //return $totalogos;
                if ($totalogos[0]->Imagen!='SinImagen.jpg'){
                    $rutaParaEliminarImage=public_path().'/images/'.$totalogos[0]->Imagen;
                    \File::delete($rutaParaEliminarImage);
                }
                Logos::where('Nombre_Imagen','Imagen1')->update(['Imagen'=>$name]);
            }
            
        }
        if ($request->hasFile('Imagen2')) {
            $file=$request->file('Imagen2');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
            $totalogos=Logos::where('Nombre_Imagen','Imagen2')->get();
            if (count($totalogos)==0) {
                $nuevoLogo= new Logos();
                $nuevoLogo->Nombre_Imagen='Imagen2';
                $nuevoLogo->Imagen=$name;
                $nuevoLogo->save();
            } else {
                if ($totalogos[0]->Imagen!='SinImagen.jpg'){
                    $rutaParaEliminarImage=public_path().'/images/'.$totalogos[0]->Imagen;
                    \File::delete($rutaParaEliminarImage);
                }
                Logos::where('Nombre_Imagen','Imagen2')->update(['Imagen'=>$name]);
            }
        }
        if ($request->hasFile('Imagen3')) {
            $file=$request->file('Imagen3');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
            $totalogos=Logos::where('Nombre_Imagen','Imagen3')->get(); 
            if (count($totalogos)==0) {
                $nuevoLogo= new Logos();
                $nuevoLogo->Nombre_Imagen='Imagen3';
                $nuevoLogo->Imagen=$name;
                $nuevoLogo->save();
            } else {
                if ($totalogos[0]->Imagen!='SinImagen.jpg'){
                    $rutaParaEliminarImage=public_path().'/images/'.$totalogos[0]->Imagen;
                    \File::delete($rutaParaEliminarImage);
                }
                Logos::where('Nombre_Imagen','Imagen3')->update(['Imagen'=>$name]);
            }
        }
        if ($request->hasFile('Imagen4')) {
            $file=$request->file('Imagen4');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
            $totalogos=Logos::where('Nombre_Imagen','Imagen4')->get();
            if (count($totalogos)==0) {
                $nuevoLogo= new Logos();
                $nuevoLogo->Nombre_Imagen='Imagen4';
                $nuevoLogo->Imagen=$name;
                $nuevoLogo->save();
            } else {
                //return "Hola";
                if ($totalogos[0]->Imagen!='SinImagen.jpg'){
                    $rutaParaEliminarImage=public_path().'/images/'.$totalogos[0]->Imagen;
                    \File::delete($rutaParaEliminarImage);
                }
                Logos::where('Nombre_Imagen','Imagen4')->update(['Imagen'=>$name]);
            }
        }
        return back()->with('Msj',"Cambio de Logos Exitoso");
        //return $request->Imagen1;
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
