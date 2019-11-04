<!doctype html>

@extends('layouts.app')

@section('title','AlumnoIrregular')
@include('ControlEscolar.CEprincipal')
@section('MostrarIrregulares')

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<title>Alumnos</title>
<body>

  @if (Session()->has('msj'))
    <div class="alert alert-success" role="alert" style="width: 90%; position:  absolute; top: 43%; left: 5%;z-index: 1;">
    <button class="close" data-dismiss="alert"><span>&times;</span></button>
    <strong>¡Correcto! </strong>{{Session('msj')}}
    </div>
  @endif

  <div class="card-header text-center" style="font-size:200%;width: 90%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 52%; left: 5%; " >{{ __('Alumnos Irregulares') }}</div> <!-- text-center ES PARA CENTRA EL TEXTO -->

  <div style="background-color:#aaa; position: absolute;top: 62%; left: 5%; width: 90%">
    
    <div class="container">
    <table  id="alumn" class="table" >
      <thead>
        <tr>
          <th  align="center">Matrícula</th>
          <th  align="center">Alumno</th>
          <th  align="center">Materias reprobadas</th>
          <th></th>
        </tr>
      </thead>
        <tbody>
          <?php $Cont=0; ?>
          @foreach($Listado_Matriculas_Alumnos as $alumno)
            <tr>
              {!!Form::open(['route' => ['Irregulares.store'],'method'=>'POST'])!!}
              <td align="justify">{{ $alumno}}</td>
              <input type="hidden" name="Clave_A" value="{{$alumno}}">
              <td align="justify">{{ $Listado_Nombres_Alumnos[$Cont] }}</td>
              <td align="justify">{{ $Cantidad_Materias_Reprobadas[$Cont]}}</td>
              <input type="hidden" name="Grupo_A" value="{{$Listado_Grupos[$Cont]}}">

              <td>{!!Form::submit('Ver',['class'=>'btn btn-primary'])!!}</td>
              {!! Form::close()!!}

            </tr>
          <?php $Cont+=1; ?>
          @endforeach
        </tbody>

    </table>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script>
      $(document).ready(function() {
        $('#alumn').DataTable({
          "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"}
        });
      });
    </script>

  </div>
  </div>
</body>
</html>
@endsection
