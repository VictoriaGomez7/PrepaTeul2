<!DOCTYPE html>

<a href="/VisualizaListas?valor={{ ($usua) }}">
            <button class="btn btn-success" style="position: absolute;top: 100%;left:90%">Cancelar</button></a>

@extends('layouts.app')

@section('title','Lista')

@include('DocenteInterfazPrincipal.InterfazPrincipal')

<body>
  {!!Form::open(['route' => ['ModificarcontraM.update','$usua'],'method'=>'PUT'])!!}

  <div style="position: absolute;top: 60%; left: 40%; width: 20%;height:30%;background-color:#aaa">
      <p style="font-size:130%">{{('Contraseña nueva: ')}}</p>
      <div style="position: absolute;top: 50%; left: 24.9%; width: 50%;height:40%;background-color:#aaa">
          <p><input type="text" required  id="contra" name="contra" style="font-size:105%; width: 95%"/></p>
          <input id="clave" name="clave" type="hidden" value={{$usua}}>
      </div>
  </div>
    <button type="submit" class="btn btn-primary" style="position: absolute;top:100%;left:65%">Modificar</button>



  {!! Form::close()!!}

</body>
