@extends('layouts.app')
@include('ControlEscolar.CEprincipal')
<title>Alumno Irregular</title>
<body>
	<div class="card-header text-center" style="font-size:200%;width: 90%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 48%; left: 5%;" >{{ $NombreAlumno[0]->Nombre_A }}</div>
	<section style="background: #aaa; width:90%; height: 35%; position: absolute; top: 58%; left: 5%; overflow-y: scroll; text-align:  center;">
  <div class="container">
     {!!Form::open(['route' => ['Irregulares.create'],'method'=>'GET'])!!}
     <input type="number" name="Clave_A" value="{{ $clave_A}}" style="width: 30%;" hidden="true">
    <table  id="alumn" class="table" style="top: 50%;">
      <thead style="font-size: 85%">
        <tr >
          <th  align="center">Clave</th>
          <th  align="center">Materia</th>
          <th  align="center">Calificación 1</th>
          <th  align="center">Fecha</th>
          <th  align="center">Calificación 2</th>
          <th  align="center">Fecha</th>
          <th  align="center">Calificación 3</th>
          <th  align="center">Fecha</th>
        </tr>
      </thead>
          <?php $Cont=0; ?>
          @foreach($AlumnoMateriasRepro as $Mate)
          <tr style="width: 30%">
      <thead style="font-size: 80%">
        
            <td align="center">{{ $Mate->Clave_M }}</td>
            <td align="center">{{ $Nombres_Mat[$Cont] }}</td>
            <td align="center" > <input type="number" min="0" max="10" name="{{ $Mate->Clave_M }}Cal1" value={{$Mate->Calificacion1}}> </td>
            <td align="center" > <input type="text" style="width: 80%; background: #FFFFFF" value={{$Mate->Fecha1}}> </td>
            <td align="center" > <input type="number" min="0" max="10" name="{{ $Mate->Clave_M }}Cal2" value={{$Mate->Calificacion2}}> </td>
            <td align="center" > <input type="text" style="width: 80%; background: #FFFFFF" value={{$Mate->Fecha2}}> </td>
            <td align="center" > <input type="number" min="0" max="10" name="{{ $Mate->Clave_M }}Cal3" value={{$Mate->Calificacion3}}> </td>
            <td align="center" > <input type="text" style="width: 80%; background: #FFFFFF" value={{$Mate->Fecha3}}> </td>

          </tr>
          <?php $Cont+=1; ?>
          @endforeach
      </thead>
    </table>
    
     {!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
  {!! Form::close()!!}</div></section>
  </div>
</body>
</html>
