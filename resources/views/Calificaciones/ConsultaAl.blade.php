@extends('layouts.app')

@section('title','Tabla Calificacio Alumno')
 @include('Alumnosinterfazprincipal.InterfazPrincipal2')
@section('content')
<a href="/Alumnoinicio?valor={{ ($usua)}}">
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
    <th>Asistencias</th>
    <th>Faltas</th>
    <th>Total de clases</th>
    <th>Parcial 2</th>
    <th>Asist</th>
    <th>Faltas</th>
    <th>Total de clases</th>
    <th>Promedio parcial</th>
    <th>Semestral</th>
    <th>Promedio final</th>
  </tr>

  @foreach($mat as $materia)
  @foreach($cali as $califi)
  @if($califi->ClaveM==$materia->Clave_M)
  <?php $cont=0; ?>
    <tr>

      <td align="center">{{ $materia->Nombre}}</td>

      <td align="center">{{ $califi->Parcial1}} </td>
      @if($Asist[$cont]->Materia==$materia->Clave_M and $Asist[$cont]->Periodo==1)
      <td align="center">{{$Asist[$cont]->Asistencias}} </td>
      <td align="center">{{$Asist[$cont]->Faltas}} </td>
      <td align="center">{{$Asist[$cont]->Faltas+$Asist[$cont]->Asistencias}} </td>
      @else
      <td align="center">{{0}} </td>
      <td align="center">{{0}} </td>
      <td align="center">{{0}} </td>
      <td align="center">{{0}}</td>
      @endif
      @if($Asist[$cont]->Materia==$materia->Clave_M and $Asist[$cont]->Periodo==2)
      <td align="center">{{$Asist[$cont]->Asistencias}} </td>
      <td align="center">{{$Asist[$cont]->Faltas}} </td>
      <td align="center">{{$Asist[$cont]->$Asist[$cont]->Asistencias}} </td>
      @else
      <td align="center">{{0}} </td>
      <td align="center">{{0}} </td>
      <td align="center">{{0}} </td>
      <td align="center">{{0}} </td>

      @endif
      <td align="center">{{($califi->Parcial1+ $califi->Parcial2)/2}} </td>
      <td align="center">{{$califi->Semestral}} </td>
      <td align="center">{{9}} </td>




    </tr>

    @endif()
  @endforeach()
  <?php $cont=$cont+1; ?>
  @endforeach()


</table>

</body>
</html>
@endsection()
