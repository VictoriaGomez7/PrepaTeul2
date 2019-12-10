@extends('layouts.app')

@section('title','Tabla Calificacio Alumno')
 @include('Alumnosinterfazprincipal.InterfazPrincipal2')
@section('content')
<a href="/Alumnoinicio?valor={{ ($usua)}}">
            <button class="btn btn-success" style="position: absolute;top: 160%;left:85%">Cancelar</button></a>
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

  <div class="alert alert-primary" role="alert" style="width: 90%; position:  absolute;top: 47%; left: 5%;z-index: 1;">
    <strong> AP1: </strong> Asistencias del parcial 1,<strong> FP1:</strong> Faltas del parcial 1, <strong>AP2:</strong> Asistencias del parcial 2,<strong> FP2:</strong> Faltas del parcial 2, <strong> TCP1:</strong> Total de clases del parcial 1, <strong> TCP2:</strong> Total de clases del parcial 2.
  </div>



<table id="alumn" class="table" style="width: 90%; position: absolute;top: 60%" >
  <tr>
    <th><center>Materia</center></th>
    <th><center>Parcial 1</center></th>
    <th><center>AP1</center></th>
    <th><center>FP1</center></th>
    <th><center>TCP1</center></th>
    <th ><center>Parcial 2</center></th>
    <th><center>AP2</center></th>
    <th><center>FP2</center></th>
    <th><center>TCP2</center></th>
    <th style="width: 50px;"><center>Promedio parcial</center></th>
    <th><center>Semestral</center></th>
    <th style="width: 50px;"><center>Promedio final</center></th></center>
  </tr>

  @foreach($mat as $materia)
  @foreach($cali as $califi)
  @if($califi->ClaveM==$materia->Clave_M)
  <?php $cont=0; ?>
    <tr style="text-align:center;">

      <td align="center"><center>{{ $materia->Nombre}}</center></td>

      <td align="center"><center>{{ $califi->Parcial1}} </center></td>
      @if($Asist[$cont]->Materia==$materia->Clave_M and $Asist[$cont]->Periodo==1)
      <td align="center"><center>{{$Asist[$cont]->Asistencias}}</center> </td>
      <td align="center"><center>{{$Asist[$cont]->Faltas}}</center> </td>
      <td align="center"><center>{{$Asist[$cont]->Faltas+$Asist[$cont]->Asistencias}}</center> </td>
      @else
      <td align="center"><center>{{0}}</center></td>
      <td align="center"><center>{{0}} </center></td>
      <td align="center"><center>{{0}} </center></td>
      @endif
      <td align="center"><center>{{ $califi->Parcial2}}</center> </td>
      @if($Asist2[$cont]->Materia==$materia->Clave_M and $Asist2[$cont]->Periodo==2)
      <td align="center"><center>{{$Asist2[$cont]->Asistencias}}</center></td>
      <td align="center"><center>{{$Asist2[$cont]->Faltas}} </center></td>
      <td align="center"><center>{{$Asist2[$cont]->Faltas+$Asist2[$cont]->Asistencias}} </center></td>
      @else
      <td align="center"><center>{{0}}</center> </td>
      <td align="center"><center>{{0}}</center> </td>
      <td align="center"><center>{{0}}</center> </td>

      @endif
      <td align="center"><center>{{$califi->PromedioParcial}}</center> </td>
      <td align="center"><center>{{$califi->Semestral}}</center> </td>
      <td align="center"><center>{{$califi->PromedioFinal}}</center> </td>




    </tr>

    @endif()
  @endforeach()
  <?php $cont=$cont+1; ?>
  @endforeach()


</table>

</body>
</html>
@endsection()
