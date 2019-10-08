<!DOCTYPE html>
<a href="/DocenteInicios?valor=<?php echo e(($usua)); ?>">
    <button class="btn btn-success" style="position: absolute;top: 103%;left:5%;z-index: 1;">Cancelar</button></a>

<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/estilos2.css">
    <link rel="stylesheet" type="text/css" href="/css/image.css">
	
	<title>Visualizar Listas</title>
</head>
<body>
	<style type="text/css">
			.NombreMateria{
				cursor: pointer;
			}
		</style>
	<?php echo $__env->make('DocenteInterfazPrincipal.InterfazPrincipal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	 <div class="card-header text-center" style="font-size:200%;width: 20%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 48%; left: 5%;" ><?php echo e(__('Materias')); ?></div>
	<section style="background: #aaa; width:20%; height: 42%; position: absolute; top: 58%; left: 5%; overflow-y: scroll; text-align:  center;">

		<?php $__currentLoopData = $MateriasDelDocente; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $MateriasDelDocent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<!--<?php print_r($MateriasDelDocent->Materia); ?>-->


			<?php echo Form::open(['route' => ['VisualizaMaGr.store'],'method'=>'POST']); ?>

			<input type="submit" value="<?php echo e($MateriasDelDocent->Materia." ".$MateriasDelDocent->Grupo); ?>" name="MateriaSeleccionada" class="NombreMateria" style="background-color: #85C1E9; border: 2px solid #0000000; width: 200px;height: 40px; margin: 5px;" readonly>
			<input type="hidden" value="<?php echo e($MateriasDelDocent->Clave_M); ?>" name="ClaveMateriaSelec" >
			<input type="hidden" value="<?php echo e($MateriasDelDocent->Grupo); ?>" name="Grupo" >
			<input type="hidden" value="<?php echo e($id); ?>" name="idDocente" >
			<input type="hidden" value="<?php echo e($usua); ?>" name="usua" >
			<?php echo Form::Close(); ?>


		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</section>
	<?php //print $visibility;
	//print $usua;
	view('DocenteInterfazPrincipal.InterfazPrincipal',compact('usua'));
	?>
	<?php if($visibility==1): ?>
		<div class="card-header text-center" style="font-size:200%;width: 69%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 48%; left: 26%;" ><?php echo e(__($Materiasele)); ?></div>

		<div class="card-header text-center" style="font-size:100%;width: 70%; height:50%; background: white; overflow-y: scroll; color: rgb(212, 172, 13); position:  absolute;top: 58%; left: 25%;" >
			<table  id="alumn" class="table" style="width: 100%">
		        <tr style="font-size:120%">
		          <th  align="center" style="width:2%"><?php echo e(('Matrícula')); ?></th>
		          <th  align="center"><?php echo e(('Alumno')); ?></th>
		        </tr>
		        	<?php $contador=0;?>
		        <?php $__currentLoopData = $AlumnosEnMismoSemestre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $AlumnosEnMismoSemestr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		          <tr>
		            <td><?php echo e($AlumnosEnMismoSemestr[$contador]->Clave_A); ?></td>
		            <td ><?php echo e($AlumnosEnMismoSemestr[$contador]->Nombre_A); ?></td>
		          </tr>
		         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		    </table>
		</div>

		<?php $__currentLoopData = $AlumnosEnMismoSemestre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $AlumnosEnMismoSemestr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php //print $AlumnosEnMismoSemestr[0]->Nombre_A; ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<?php elseif($visibility==2): ?>
		<div class="card-header text-center" style="font-size:135%;width: 30%; height:15%; background: #FFFFFF; color: rgb(26, 35, 126); position:  absolute;top: 70%; left: 45%;" ><?php echo e(__(' ')); ?></div>
	<?php else: ?>
		<div class="card-header text-center" style="font-size:200%;width: 69%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 48%; left: 26%;" ><?php echo e(__($Materiasele)); ?></div>
		<div class="card-header text-center" style="font-size:135%;width: 30%; height:15%; background: #839192; color: rgb(26, 35, 126); position:  absolute;top: 70%; left: 45%;" ><?php echo e(__('No hay alumnos registrados en esta materia.')); ?></div>
	<?php endif; ?>
	</div>
</body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PrepaTeul\resources\views/VisualizarMaGru/VisualizarMateGrupo.blade.php ENDPATH**/ ?>