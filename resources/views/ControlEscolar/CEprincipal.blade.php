<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
   	<link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/estilos2.css">
    <link rel="stylesheet" type="text/css" href="/css/image.css">
    <link rel="icon" href="/images/escolarcono.ico">

	<title>Control Escolar</title>
</head>
<body>
	@include('interfazprincipal.image')


	{{--<section style="width: 100%; max-width: 90%; background: #FEEEEF"> --}}
		<header >
			<nav class="navegacion" style="width: 90%">
				<ul class="menu" >
					<li><a href="#">Alumnos</a>
							<ul class="submenu">
							<li><a href ="http://127.0.0.1:8000/inscripcion"> Inscripción</a></li>
							<li><a href="http://127.0.0.1:8000/reinscripcion">Reinscripión</a></li>
							<li><a href="http://127.0.0.1:8000/alumnosconsulta">Consultar</a></li>
							<li><a href="http://127.0.0.1:8000/Irregulares">Irregulares</a></li>
							<li><a href="http://127.0.0.1:8000/kardex">Kardex</a></li>
						</ul>
					</li>
					<li><a href="#">Docentes</a>
						<ul class="submenu">
							<li><a href="http://127.0.0.1:8000/RegistraDocente">Registrar</a></li>
							<li><a href="http://127.0.0.1:8000/docenteconsulta">Consultar
							</a></li>
							<li><a href="http://127.0.0.1:8000/VisualizarDocentes">Materias
							</a></li>
							<li><a href="http://127.0.0.1:8000/RegistrarTutores">Tutores
							</a></li>

						</ul>
					</li>
					<li><a href="#">Materias</a>
						<ul class="submenu">
							<li><a href="http://127.0.0.1:8000/RegistraMateria">Registrar</a></li>
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
							<li><a href="http://127.0.0.1:8000/Cerrar_Semestre">Cerrar Ciclo</a></li>
							<li><a href="http://127.0.0.1:8000/Estadisticas">Estadisticas</a></li>
						</ul>
					</li>
					<li><a href="#">Imprimir</a>
						<ul class="submenu">
							<li><a href="http://127.0.0.1:8000/Imprimelistas">Listas</a></li>
							<li><a href="http://127.0.0.1:8000/ImprimeBoletasParciales">Boletas Parciales</a></li>
						</ul>
					</li>
                    <li><a href="#" >Control Escolar</a>
						<ul class="submenu">
							<li><a href="http://127.0.0.1:8000/interfazpri">CERRAR SESION</a>
						</ul>
					</li>
				</ul>
			</nav>
			{{--@include('interfazprincipal.imagenn')--}}
		</header>
	{{-- </section> --}}
</body>
</html>
