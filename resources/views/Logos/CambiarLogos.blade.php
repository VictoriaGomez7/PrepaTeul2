

@extends('layouts.app')

@section('title','Cambiar Logos')

@include('ControlEscolar.CEprincipal')

<!DOCTYPE HTML>
@if (session()->has('Msj'))
    <div class="alert alert-success" role="alert" style="width: 50%; position:  absolute;top: 60%; left: 25%;z-index: 4;">
      <button class="close" data-dismiss="alert"><span>&times;</span></button>
      <strong>¡Correcto! </strong>{{ session('Msj') }}
    </div>
  @endif
<body>
	 <div class="alert alert-danger" role="alert" style="width: 90%; position:  absolute; top: 47%; left: 5%;z-index: 1;">
            
                <strong>AVISO: Procure seleccionar imágenes en formato JPG o PNG, no colocar imagenes de peso mayor a 1.5 MB, el tamaño de la misma puede afectar la visualización del sistema. </strong>
            </div>
	<div style="position:  absolute;top: 70%; left: 2%;">
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
			{!!Form::submit('Cambiar Imágenes',['class'=>'btn btn-primary','style'=>'position: absolute; right: 1.5%; top: 85%;'])!!}
		{!! Form::close()!!}
		</div>
	</div>
	

</body>