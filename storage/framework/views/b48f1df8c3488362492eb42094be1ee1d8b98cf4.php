<!DOCTYPE html>
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
	<?php echo $__env->make('interfazprincipal.image', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<?php
		$usua=$_GET['valor'];
	?>

	<?php if(session()->has('MsjERR')): ?>
        <div class="alert alert-danger" role="alert" style="width: 90%; position:  absolute;top: 45%; left: 5%;z-index: 1;">
            <button class="close" data-dismiss="alert"><span>&times;</span></button>
            <strong>¡ERROR! </strong><?php echo e(session('MsjERR')); ?>

        </div>
    <?php endif; ?>

    <?php if(session()->has('MsjC')): ?>
        <div class="alert alert-success" role="alert" style="width: 90%; position:  absolute;top: 45%; left: 5%;z-index: 1;">
            <button class="close" data-dismiss="alert"><span>&times;</span></button>
            <strong>Correcto! </strong><?php echo e(session('MsjC')); ?>

        </div>
    <?php endif; ?>

	<header>
		<nav class="navegacion" style="width: 90%">
			<ul class="menu">
				<li><a href="#">Listas</a>
						<ul class="submenu">
						<li><a href ="http://127.0.0.1:8000//VisualizaMaGr?valor=<?php echo e(($usua)); ?>">Visualizar</a></li>
					</ul>
				</li>
				<li><a href="#">Calificaciones</a>
						<ul class="submenu">
						<li><a href ="http://127.0.0.1:8000/AsignarCalificacion?valor=<?php echo e(($usua)); ?>">Capturar</a></li>

					</ul>
				</li>
				<li><a href="#">Asistencias</a>
						<ul class="submenu">
						<li><a href ="http://127.0.0.1:8000//Asistencias?valor=<?php echo e(($usua)); ?>">Capturar</a></li>
					</ul>
				</li>
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

		<?php echo $__env->make('interfazprincipal.imagenn', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</header>

	<p align="center" style="color: black; font-size: 1.3em;position: absolute;top: 110%;left:5%; background: #EEF0F3; width: 90%">
		</br>
		Constitución #100 Teul de González Ortega.<br/>
	    Zac. C.P. 99800 <br/>
	    Teléfono: (467)-952-71-83 <br/>
	    Correo-e: prepateul@yahoo.com.mx
    </p >

</body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PrepaTeul\resources\views/DocenteInterfazPrincipal/InterfazPrincipal3.blade.php ENDPATH**/ ?>