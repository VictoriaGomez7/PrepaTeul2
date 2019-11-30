<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="/css/style.css">
     <link rel="stylesheet" type="text/css" href="/css/estilos2.css">
      <link rel="stylesheet" type="text/css" href="/css/image.css">
     <link rel="icon" href="/images/escolarcono.ico">
	@extends('layouts.app')

	<title>Servicios Escolares</title>
</head>
<body>
	@include('interfazprincipal.image')

	@if (session()->has('msj'))
        <div class="alert alert-success" role="alert" style="width: 90%; position:  absolute; top: 43%; left: 5%;z-index: 1;">
            <button class="close" data-dismiss="alert"><span>&times;</span></button>
                <strong>¡Correcto! </strong>{{ session('msj') }}
        </div>
    @endif

    @if (session()->has('MsjERR'))
        <div class="alert alert-danger" role="alert" style="width: 90%; position:  absolute;top: 43%; left: 5%;z-index: 1;">
            <button class="close" data-dismiss="alert"><span>&times;</span></button>
            <strong>¡ERROR! </strong>{{ session('MsjERR') }}
        </div>
    @endif

	<header>
		{{--@foreach($CE as $C)
		<div class="alert alert-success" role="alert" style="width: 90%; position:  absolute;top: 43%; left: 5%;z-index: 1;">
				<button class="close" data-dismiss="alert"><span>&times;</span></button>
				<strong>Bienvenido </strong>{{$C->Usuario}}
			</div>
		@endforeach--}}
		<nav class="navegacion" style="width: 90%">
			<ul class="menu">
				<li><a href="#">Alumnos</a>
						<ul class="submenu">
						<li><a href ="http://127.0.0.1:8000/inscripcion"> Inscripción</a></li>
						<li><a href="http://127.0.0.1:8000/reinscripcion">Reinscripión</a></li>
						<li><a href="http://127.0.0.1:8000/alumnosconsulta">Consultar</a></li>
						<li><a href="http://127.0.0.1:8000/Irregulares">Irregulares</a></li>
						<li><a href="http://127.0.0.1:8000/contrasena">Recuperar contraseña</a></li>
					</ul>
				</li>
				<li><a href="#">Docentes</a>
					<ul class="submenu">
						<li><a href="http://127.0.0.1:8000/RegistraDocente">Registrar</a></li>
						<li><a href="http://127.0.0.1:8000/docenteconsulta">Consultar</a></li>
						<li><a href="http://127.0.0.1:8000/VisualizarDocentes">Materias</a></li>
						<li><a href="http://127.0.0.1:8000/RegistrarTutores">Tutores</a></li>
						<li><a href="http://127.0.0.1:8000/contrasenaDocente">Recuperar contraseña</a></li>
					</ul>
				</li>
				<li><a href="#">Materias</a>
					<ul class="submenu">
						<li><a href="http://127.0.0.1:8000/RegistraMateria">Registrar</a></li>
						<li><a href="http://127.0.0.1:8000/Bachillerato">Bachilleratos</a></li>
						<li><a href="http://127.0.0.1:8000/Formaciones">Formaciones para el Trabajo</a></li>
						<li><a href="http://127.0.0.1:8000/materia">Consultar</a></li>
					</ul>
				</li>

				<li><a href="#">Calificaciones</a>
							<ul class="submenu">
							<li><a href="http://127.0.0.1:8000/CONSULTACALIFICACIONESCE">Consultar Calificaciones</a></li>
						</ul>
					</li>

				<li><a href="#">Compromisos</a>
						<ul class="submenu">
						<li><a href="http://127.0.0.1:8000/compromisos">Agregar Compromisos Estudiantes</a></li>
						<li><a href="http://127.0.0.1:8000/compromisosFamilia">Agregar Compromisos Familia</a></li>
						<li><a href="http://127.0.0.1:8000/compro">Formatos PDF</a></li>
					</ul>
				</li>
				<li><a href="#">Asignaciones</a>
						<ul class="submenu">
							<li><a href="http://127.0.0.1:8000/grupos">Crear Grupos</a></li>
							<li><a href="http://127.0.0.1:8000/Asigna">Materias a los Docentes</a></li>
							<li><a href="http://127.0.0.1:8000/Periodos">Periodos</a></li>
							<li><a href="http://127.0.0.1:8000/Estadisticas">Estadísticas</a></li>
							<li><a href="http://127.0.0.1:8000/Cerrar_Semestre">Cerrar Ciclo</a></li>

						</ul>
					</li>
					<li><a href="#">Imprimir</a>
						<ul class="submenu">
							<li><a href="http://127.0.0.1:8000/Imprimelistas">Listas</a></li>
							<li><a href="http://127.0.0.1:8000/ImprimeBoletasParciales">Boletas Parciales</a></li>
							<li><a href="http://127.0.0.1:8000/ImprimeCarta">Carta de Buena Conducta</a></li>
							<li><a href="http://127.0.0.1:8000/kardex">Kardex</a></li>
						</ul>
					</li>

					<li><a href="#">Logos</a>
						<ul class="submenu">
							<li><a href="http://127.0.0.1:8000/Logotipos">Cambiar</a></li>
						</ul>

                    <li><a href="#" >Servicios Escolares</a>
						<ul class="submenu">
							<li><a href="http://127.0.0.1:8000/ContraseñaCE">Cambiar Contraseña</a>
							<li><a href="http://127.0.0.1:8000/interfazpri">CERRAR SESIÓN</a>
						</ul>
					</li>
			</ul>
		</nav>

		@include('interfazprincipal.imagenn')
	</header>
	<!--<img src="/images/img7.png" class="imagen">-->

</body>
</html>
