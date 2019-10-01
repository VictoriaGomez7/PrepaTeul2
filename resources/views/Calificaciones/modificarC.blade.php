@extends('layouts.app')

@section('title','Tabla Calificacio Alumno')
 @include('ControlEscolar.CEprincipal')
@section('content')
<a href="http://127.0.0.1:8000/CONSULTACALIFICACIONESCE">
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
@foreach($alum as $nombre)
  <h2 style="position: absolute;left: 5%;">{{$nombre->Nombre_A}}</h2>
@endforeach()


<table id="alumn" class="table" style="width: 80%;" >
  <tr>
    <th>Materia</th>
    <th>Parcial 1</th>
    <th>Parcial 2</th>
    <th></th>
  </tr>
  @foreach($alum as $alumno)
    <tr>
      <form class="form-group" method="GET" action="/Calificaciones/{{$alumno->id}}">
      <td>{{$alumno->ClaveM}}</td>

      <td><input type="number" step="0.1" name="Parcial1" value="{{ $alumno->Parcial1}}"> </td>
      <td><input type="number" step="0.1" name="Parcial2" value="{{ $alumno->Parcial2}}"></td>
          <td><button class="btn btn-success">Guardar</button></td>
        </form>
    </tr>
  @endforeach()
 
</table>

</body>
</html>
@endsection()