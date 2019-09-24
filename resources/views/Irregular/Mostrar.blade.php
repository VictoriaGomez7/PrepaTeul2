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
  <div class="container">
    <table  id="alumn" class="table" >
      <thead>
        <tr>
          <th  align="center">Matrícula</th>
          <th  align="center">Alumno</th>
          <th  align="center">Semestre</th>
          <th  align="center">Grupo</th>
          <th  align="center">Materias reprobadas</th>
          <th></th>
        </tr>
      </thead>
        <tbody>
          <?php $Cont=0; ?>
          @foreach($ObtenerIrregulares as $alumno)
          <tr>
            {!!Form::open(['route' => ['Irregulares.store'],'method'=>'POST'])!!}
            <td align="justify">{{ $alumno->Clave_A }}</td>
            <input type="hidden" name="Clave_A" value="{{$alumno->Clave_A }}">
            <td align="justify">{{ $Listado_Nombres_Alumnos[$Cont] }}</td>
            <td align="justify">{{ $Listado_Semestres[$Cont] }}</td>
            <td align="justify">{{ $Listado_Grupos[$Cont] }}</td>
            <td align="justify">{{ $Cantidad_Materias_Reprobadas[$Cont]}}</td>

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

</body>
</html>
@endsection
