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
	<?php echo $__env->make('interfazprincipal.image', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<?php if(session()->has('msj')): ?>
        <div class="alert alert-success" role="alert" style="width: 90%; position:  absolute; top: 43%; left: 5%;z-index: 1;">
            <button class="close" data-dismiss="alert"><span>&times;</span></button>
                <strong>¡Correcto! </strong><?php echo e(session('msj')); ?>

        </div>
    <?php endif; ?>

    <?php if(session()->has('MsjERR')): ?>
        <div class="alert alert-danger" role="alert" style="width: 90%; position:  absolute;top: 43%; left: 5%;z-index: 1;">
            <button class="close" data-dismiss="alert"><span>&times;</span></button>
            <strong>¡ERROR! </strong><?php echo e(session('MsjERR')); ?>

        </div>
    <?php endif; ?>

	<header>
		
		<nav class="navegacion" style="width: 90%">
			<ul class="menu">
				<li><a href="#">Alumnos</a>
						<ul class="submenu">
						<li><a href ="inscripcion"> Inscripción</a></li>
						<li><a href="reinscripcion">Reinscripión</a></li>
						<li><a href="alumnosconsulta">Consultar</a></li>
						<li><a href="http://127.0.0.1:8000/Irregulares">Irregulares</a></li>
						<li><a href="http://127.0.0.1:8000/kardex">Kardex</a></li>
					</ul>
				</li>
				<li><a href="#">Docentes</a>
					<ul class="submenu">
						<li><a href="RegistraDocente">Registrar</a></li>
						<li><a href="docenteconsulta">Consultar</a></li>
						<li><a href="http://127.0.0.1:8000/VisualizarDocentes">Materias</a></li>
						<li><a href="http://127.0.0.1:8000/RegistrarTutores">Tutores</a></li>
					</ul>
				</li>
				<li><a href="#">Materias</a>
					<ul class="submenu">
						<li><a href="RegistraMateria">Registrar</a></li>
						<li><a href="materia">Consultar</a></li>
					</ul>
				</li>

				<li><a href="#">Calificaciones</a>
							<ul class="submenu">
							<li><a href="http://127.0.0.1:8000/CONSULTACALIFICACIONESCE">Consultar Calificaciones</a></li>
						</ul>
					</li>

				<li><a href="#">Compromisos</a>
						<ul class="submenu">
						<li><a href="compromisos">Agregar Compromisos Estudiantes</a></li>
						<li><a href="compromisosFamilia">Agregar Compromisos Familia</a></li>
						<li><a href="compro">Formatos PDF</a></li>
					</ul>
				</li>
				<li><a href="#">Asignaciones</a>
						<ul class="submenu">
							<li><a href="http://127.0.0.1:8000/grupos">Crear Grupos</a></li>
							<li><a href="http://127.0.0.1:8000/Asigna">Materias a los Docentes</a></li>
							<li><a href="http://127.0.0.1:8000/Periodos">Periodos</a></li>
							<li><a href="http://127.0.0.1:8000/Cerrar_Semestre">Cerrar Ciclo</a></li>
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

		<?php echo $__env->make('interfazprincipal.imagenn', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</header>
	<!--<img src="/images/img7.png" class="imagen">-->
	    <p align="center" style="color: black; font-size: 1.3em;position: absolute;top: 110%;left:5%; background: #EEF0F3; width: 90%">
	    	</br>
	    	Constitución #100 Teul de González Ortega.<br/>
                Zac. C.P. 99800 <br/>
                Teléfono: (467)-952-71-83 <br/>
                  Correo-e: prepateul@yahoo.com.mx
                 </p >
</body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PrepaTeul\resources\views/ControlEscolar/CEprincipal2.blade.php ENDPATH**/ ?>