

@extends('layouts.app')

@section('title','Inscripción Alumnos')

@include('ControlEscolar.CEprincipal')

<!DOCTYPE HTML>
@if (session()->has('Msj'))
    <div class="alert alert-success" role="alert" style="width: 50%; position:  absolute;top: 53%; left: 25%;z-index: 1;">
      <button class="close" data-dismiss="alert"><span>&times;</span></button>
      <strong>¡Correcto! </strong>{{ session('Msj') }}
    </div>
  @endif
<body>
	<div class="Contenedor de imagenes" style="right: 20%; top: 80%; width: 100%; border: 4; ">	
	{!!Form::open(['route' => ['Logotipos.store'],'method'=>'POST','enctype'=>'multipart/form-data'])!!}

	<div class="imagen01" align="center">
		<img class="card-img-top" src="images/{{$ImagenesEnDB[0]->Imagen}}" style="width: 15%;" >
		<input type="file" name="Imagen1" class="btn btn-success">
	
		<img class="card-img-top" src="images/{{$ImagenesEnDB[1]->Imagen}}"  style="width: 15%;">
		<input type="file" name="Imagen2" class="btn btn-success"></div>
	<div class="imagen03" align="center">
		<img class="card-img-top" src="images/{{$ImagenesEnDB[2]->Imagen}}"  style="width: 15%;">
		<input type="file" name="Imagen3" class="btn btn-success">
	
		<img class="card-img-top" src="images/{{$ImagenesEnDB[3]->Imagen}}"  style="width: 15%;">
		<input type="file" name="Imagen4" class="btn btn-success"></div>
		{!!Form::submit('Cambiar Imagenes',['class'=>'btn btn-primary','style'=>'position: absolute; right: 1.2%; top: 80%;'])!!}
	{!! Form::close()!!}
	</div>

</body>