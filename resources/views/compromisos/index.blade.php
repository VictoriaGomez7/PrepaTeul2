<!DOCTYPE html>
<html>
<head>
	@include('ControlEscolar.CEprincipal')
	<title></title>
	
	
	@extends('layouts.app')


</head>
<body>

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
</body>

@if (session()->has('msj2'))

    <div class="alert alert-danger" role="alert" style=" position: absolute; top: 22%; left: 40%">
      <button type="button" class="close" data-dismiss="alert" ><span>&times;</span></button>
      <strong>¡Error! </strong>{{session('msj2')}}
    </div>
  @endif
</html>