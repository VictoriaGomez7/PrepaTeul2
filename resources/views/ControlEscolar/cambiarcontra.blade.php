<!doctype html>

@extends('layouts.app')

@section('title','cambiar contraseña')

{{--@include('interfazprincipal.image')--}}
@include('ControlEscolar.CEprincipal')

@section('frameTitulo')
	</header>

	<style>
/*Al cuerpo de la
pagina se aplica el tamaño de fuente
*/
body{
font-size: 12px;
}
/**
* se aplica el ancho, margen centrado
* borde de un pixel con redondeado, y rellenado
* a la izquierda y derecha
*/
#Contenedor{
width: 400px;
margin: 50px auto;
background-color: #EEF0F3;
border: 1px solid #C9D0D9;
height: 170px;
border-radius:8px;
padding: 0px 5px 0px 5px;
}


.opcioncontra{
text-align: center;
margin-top: 20px;
font-size: 14px;
}

/**
* En las siguientes lineas
* se define el diseño adaptable, para que
* se muestre en los dispositivos móviles
*/

/******************************************/
/***    DISEÑO PARA MOVILES 320        ****/
/******************************************/
@media only screen and (max-width:320px){
#Contenedor{
width: 100%;
height: auto;
margin: 0px;
}

/******************************************/
/***    DISEÑO PARA MOVILES 240        ****/
/******************************************/
@media only screen and (max-width:240px){

}


</style>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<!-- vinculo a bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div id="Contenedor" style="position: absolute; top: 40%; left: 35%">
<div class="ContentForm" style="text-align: center;" >

	<form  action="ModificarcontraCe2" method="PUT">

<div style="position: absolute;top: 15%; left: 05%; width: 90%;height:10%;">
		<div class="input-group input-group-lg" style="padding:05px;  ">
			<label   style="margin: 0px; padding: 0px;color: #4B5E7B; font-size:25px;">Cambiar Contraseña</label>

			<p></p>
			<h1></h1>
			<input type="text" class="form-control" name="contra" placeholder="Contraseña" id="contra" aria-describedby="sizing-addon1" style="z-index: 0;">

				</div>


</div>

	<button  class="btn btn-lg btn-primary btn-block btn-signin" type="submit" style="position: absolute;top:105%;left:0%">Modificar</button>



</form>
<a href="/ContraseñaCE">
	<button class="btn btn-lg btn-success btn-block btn-signin" style="position: absolute;top: 135%;left:0%;z-index: 0;">Cancelar</button></a>
</div>
</div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Libreria java scritp de bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

@endsection()




</html>
