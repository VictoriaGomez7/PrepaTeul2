<!DOCTYPE html>

<?php echo $__env->make('interfazprincipal.image', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<html>
<head>
	<meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="/css/style.css">
     <link rel="stylesheet" type="text/css" href="/css/estilos2.css">
      <link rel="stylesheet" type="text/css" href="/css/image.css">
     <link rel="icon" href="/images/images.ico">

	<title>Docente Inicio</title>
</head>
<body>


	<header>
		<nav class="navegacion" style="width: 90%">
			<ul class="menu">
				<li><a href="#">Listas</a>
						<ul class="submenu">
						<li><a href ="http://127.0.0.1:8000/VisualizaMaGr?valor=<?php echo e(($usua)); ?>">Visualizar</a></li>
					</ul>
				</li>
				<li><a href="#">Calificaciones</a>
						<ul class="submenu">
						<li><a href ="http://127.0.0.1:8000/AsignarCalificacion?valor=<?php echo e(($usua)); ?>">Capturar</a></li>

					</ul>
				</li>
				<li><a href="#">Asistencias</a>
						<ul class="submenu">
						<li><a href ="http://127.0.0.1:8000/Asistencias?valor=<?php echo e(($usua)); ?>">Capturar</a></li>
					</ul>
				<?php use App\Docentes;
					$Docente=Docentes::where('Clave_D',$usua)->get('Nombre');
				?>
				<li style="left: 40%;"><a  href="#" >Docente: <?php echo e($Docente[0]->Nombre); ?></a>
					<ul class="submenu">
						<li><a href="http://127.0.0.1:8000/interfazpri">CERRAR SESION</a>
					</ul>
				</li>

			</ul>
		</nav>


	</header>

</body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PrepaTeul\resources\views/DocenteInterfazPrincipal/InterfazPrincipal.blade.php ENDPATH**/ ?>