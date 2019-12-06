<!DOCTYPE html>
<html>
<head>
	@include('ControlEscolar.CEprincipal')
	<title></title>
	
	
	@extends('layouts.app')


</head>
<body>
<div style="position: absolute; top: 52%; left: 3%">
	<center>
		 <div style="width: 80%;  background: #000080; color: rgb(212, 172, 13);"> <label for="compromiso"  ><h2> Mis compromisos como estudiante:</h2></label>
		 </div>
	<div style=" width: 80%; background-color:#aaa">

	@include('compromisos.mostrar')
	<br>

	@if(!session('status1'))
		@include('compromisos.reinscripcionCompromisos')
	@endif

	@if(session('status1'))
		{{ $compromisoEstudiante }}
		@include('compromisos.busqueda')

	@endif
</div>
<br>
	</center>
</div>
</body>

@if (session()->has('msj2'))

    <div class="alert alert-danger" role="alert" style=" position: absolute; top: 22%; left: 40%">
      <button type="button" class="close" data-dismiss="alert" ><span>&times;</span></button>
      <strong>¡Error! </strong>{{session('msj2')}}
    </div>
  @endif
 @if (session()->has('Correcto'))

    <div class="alert alert-success" role="alert" style=" position: absolute; top: 45%; left: 40%">
      <button type="button" class="close" data-dismiss="alert" ><span>&times;</span></button>
      <strong>¡Correcto! </strong>{{session('Correcto')}}
    </div>
   @endif

  @if (session()->has('Eliminado'))

    <div class="alert alert-success" role="alert" style=" position: absolute; top: 45%; left: 40%">
      <button type="button" class="close" data-dismiss="alert" ><span>&times;</span></button>
      <strong>¡Correcto! </strong>{{session('Eliminado')}}
    </div>
   @endif

   @if (session()->has('Editado'))

    <div class="alert alert-success" role="alert" style=" position: absolute; top: 45%; left: 40%">
      <button type="button" class="close" data-dismiss="alert" ><span>&times;</span></button>
      <strong>¡Correcto! </strong>{{session('Editado')}}
    </div>
   @endif
</html>