@extends('layouts.app')
@include('ControlEscolar.CEprincipal')
<title>Alumno Irregular</title>
<body>
	<div class="card-header text-center" style="font-size:200%;width: 90%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 48%; left: 5%;" >{{ $NombreAlumno[0]->Nombre_A }}</div>
	<section style="background: #aaa; width:90%; height: 35%; position: absolute; top: 58%; left: 5%; overflow-y: scroll; text-align:  center;">
  <div class="container">
    <table  id="alumn" class="table" style="top: 50%;">
      <thead>
        <tr>
          <th  align="center">Clave</th>
          <th  align="center">Materia</th>
          <th  align="center">Calificacion 1</th>
          <th  align="center">Calificacion 2</th>
          <th  align="center">Calificacion 3</th>
          <th></th>
        </tr>
      </thead>
        <tbody>
          <?php $Cont=0; ?>
          @foreach($AlumnoMateriasRepro as $Mate)
          <tr>
           
            <td align="center">{{ $Mate->Clave_M }}</td>
            <td align="center">{{ $Nombres_Mat[$Cont] }}</td>
            <td align="center" > <input type="number" name="Cal1" style="width: 30%;"> </td>
            <td align="center"> <input type="number" name="Cal2" style="width: 30%;"> </td>
            <td align="center"> <input type="number" name="Cal3" style="width: 30%;"> </td>



          </tr>
          <?php $Cont+=1; ?>
          @endforeach
        </tbody>

    </table>
     {!!Form::open(['route' => ['Irregulares.store'],'method'=>'POST'])!!}
     {!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
            {!! Form::close()!!}</div></section>
  </div>
</body>
</html>
