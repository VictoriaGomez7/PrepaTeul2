
@extends('layouts.app')

@section('title','Tabla Calificacio Alumno')
 @include('ControlEscolar.CEprincipal')
@section('content')
@if (session()->has('msj1'))
    <div class="alert alert-success" role="alert" style="width: 80%; position:  absolute;top: 44%; left: 9%;z-index: 1;">
      <button class="close" data-dismiss="alert"><span>&times;</span></button>
        <strong>¡Correcto! </strong>{{ session('msj1') }}
    </div>
  @endif
<a href="http://127.0.0.1:8000/CONSULTACALIFICACIONESCE">
            <button class="btn btn-success" style="position: absolute;top: 170%;left:80%">Cancelar</button></a>
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

@foreach($nombreA as $nombre)
    <div class="card-header text-center" style="font-size:150%;width: 80%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 52%; left: 9%" >{{$nombre->Nombre_A}}</div>
@endforeach()

<section style="position: absolute;top:62%; left:5%;width: 80%; background:#aaa">


    <table id="alumn" class="table" style="width: 100%;" >
      <tr>
        <th>Clave</th>
         <th>Materia</th>
        <th>Parcial 1</th>
        <th>Parcial 2</th>
        <th ></th>
      </tr>
      <?php $c=0; ?>
      @foreach($AL as $alumno)
        <tr >
          {!! Form::open(['route'=>['Calificaciones.show',$alumno->id],'method'=>'PUT']) !!}
          <td>{{$alumno->ClaveM}}</td>
          <td>{{$Materia1[$c]}}</td>
          <td>{{$alumno->Parcial1}}</td>
          <td>{{$alumno->Parcial2}}</td>
          <td ><button class="btn btn-primary" style="height:30px; font-size:80%">Modificar</button></td>
          </form>
        </tr>
      <?php $c=$c+1; ?>
      @endforeach()
      {{--
      <tr>
        <td>Centro comercial Moctezuma</td>
        <td>Francisco Chang</td>
        <td>Mexico</td>
      </tr>
      <tr>
        <td>Ernst Handel</td>
        <td>Roland Mendel</td>
        <td>Austria</td>
      </tr>
      <tr>
        <td>Island Trading</td>
        <td>Helen Bennett</td>
        <td>UK</td>
      </tr>
      <tr>
        <td>Laughing Bacchus Winecellars</td>
        <td>Yoshi Tannamuri</td>
        <td>Canada</td>
      </tr>
      <tr>
        <td>Magazzini Alimentari Riuniti</td>
        <td>Giovanni Rovelli</td>
        <td>Italy</td>
      </tr>--}}
    </table>

    </body>
    </html>
</section>

@endsection()
