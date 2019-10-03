@extends('layouts.app')

@section('title','Tabla Calificacio Alumno')
 @include('Alumnosinterfazprincipal.InterfazPrincipal')
@section('content')
<a href="http://127.0.0.1:8000/Alumnosinicio'">
            <button class="btn btn-success" style="position: absolute;top: 150%;left:75%">Cancelar</button></a>
    {{--@include('Reinscripciones.form',compact('CAlumno','bandera','FtOBache'))--}}
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  position:  absolute;top:55%; left: 5%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

  <h2 style="position: absolute;left: 5%;">{{$nombre}}</h2>



<table id="alumn" class="table" style="width: 80%;" >
  <tr>
    <th>Materia</th>
    <th>Parcial 1</th>
    <th>Parcial 2</th>
  </tr>
  @foreach($mat as $materia)
  @foreach($cali as $califi)
  @if($califi->ClaveM==$materia->Clave_M)
    <tr>
      <td align="center">{{ $materia->Nombre}}</td>

      <td align="center">{{ $califi->Parcial1}} </td>
      <td align="center">{{ $califi->Parcial2}}</td>
          
    </tr>
    @endif()
  @endforeach()
  @endforeach()
 
</table>

</body>
</html>
@endsection()