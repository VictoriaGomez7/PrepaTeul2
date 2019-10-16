<!DOCTYPE html>
@extends('layouts.app')
@include('interfazprincipal.image')
<html>
<head>
	<meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="/css/style.css">
     <link rel="stylesheet" type="text/css" href="/css/estilos2.css">
      <link rel="stylesheet" type="text/css" href="/css/image.css">
     <link rel="icon" href="/images/images.ico">

	<title>Alumno Inicio</title>
</head>
<body>

	<header>
		<?php use App\Alumno;
			$Alumnos=Alumno::where('Clave_A',$usua)->get('Nombre_A');
			$usua=$_GET['valor'];
		?>
		<nav class="navegacion" style="width: 90%">
			<ul class="menu">
				<li><a href="#">Calificaciones</a>
						<ul class="submenu">
						<li><a href ="http://127.0.0.1:8000/CONSULTACALIFICACIONESAL?valor={{$usua}}">Visualizar</a></li>
					</ul>
				</li>
				<li><a href="#">Contraseña</a>
						<ul class="submenu">
						<li><a href ="http://127.0.0.1:8000/Modificarcontra?valor={{$usua}}">Cambiar</a></li>

					</ul>
					<li style="left: 40%;"><a  href="#" >Alumno: {{$Alumnos[0]->Nombre_A}}</a>
						<ul class="submenu">
							<li><a href="http://127.0.0.1:8000/interfazpri">CERRAR SESION</a>
						</ul>
					</li>


			</ul>
		</nav>


	</header>

</body>
</html>
