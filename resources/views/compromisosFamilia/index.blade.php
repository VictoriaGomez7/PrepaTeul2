<!DOCTYPE html>
<html>

<head>
	@include('ControlEscolar.CEprincipal')
	<title></title>
	
	@extends('layouts.app')

</head>

<body>
	<center>
	 <div style="width: 80%; height: 50px; background: #000080; color: rgb(212, 172, 13);">	<h2> Nuestros Compromisos Como Familia:</h2></div>
<div style=" width: 80%; background-color:#aaa">

	@include('compromisosFamilia.mostrar')

	@if(!session('status1'))
		@include('compromisosFamilia.reinscripcionCompromisos')
	@endif

	@if(session('status1'))
		{{ $compromisoEstudiante }}
		@include('compromisosFamilia.busqueda')

	@endif
	<br>
	</center>
</div>
</body>
 @if (session()->has('msj2'))

    <div class="alert alert-danger" role="alert" style=" position: absolute; top: 22%; left: 40%; z-index: 1;">
      <button type="button" class="close" data-dismiss="alert" ><span>&times;</span></button>
      <strong>¡Error! </strong>{{session('msj2')}}
    </div>
  @endif
</html>