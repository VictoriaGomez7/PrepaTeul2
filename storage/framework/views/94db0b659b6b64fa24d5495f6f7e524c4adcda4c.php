<!DOCTYPE html>
<a href="/DocenteInicios?valor=<?php echo e(($usua)); ?>">
    <button class="btn btn-success" style="position: absolute;top: 120%;left:85%;z-index: 1;">Cancelar</button></a>

<html>
	<head>
		<meta charset="utf-8">
	    <link rel="stylesheet" type="text/css" href="/css/style.css">
	    <link rel="stylesheet" type="text/css" href="/css/estilos2.css">
	    <link rel="stylesheet" type="text/css" href="/css/image.css">
		
		<title>Asignar Calificaciones</title>
	</head>

	<body>
		<?php if(session()->has('msj')): ?>
	        <div class="alert alert-success" role="alert" style="width: 90%; position:  absolute; top: 44%; left: 5%;z-index: 1;">
	            <button class="close" data-dismiss="alert"><span>&times;</span></button>
	                <strong>¡Correcto! </strong><?php echo e(session('msj')); ?>

	        </div>
    	<?php endif; ?>
		<style type="text/css">
			.NombreMateria{
				cursor: pointer;}
		</style>
		
		<?php echo $__env->make('DocenteInterfazPrincipal.InterfazPrincipal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	 	<div class="card-header text-center" style="font-size:200%;width: 20%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 55%; left: 5%;" ><?php echo e(__('Materias')); ?></div>
		<section style="background: #aaa; width:20%; height: 42%; position: absolute; top: 65%; left: 5%; overflow-y: scroll; text-align:  center;">

			<?php $__currentLoopData = $MateriasDelDocente; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $MateriasDelDocent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

				<?php echo Form::open(['route' => ['AsignarCalificacion.store'],'method'=>'POST']); ?>

				<input type="submit" value="<?php echo e($MateriasDelDocent->Materia." ".$MateriasDelDocent->Grupo); ?>" name="MateriaSeleccionada" class="NombreMateria" style="background-color: #85C1E9; border: 2px solid #0000000; width: 200px;height: 40px; margin: 5px;" readonly>
				<input type="hidden" value="<?php echo e($MateriasDelDocent->Clave_M); ?>" name="ClaveMateriaSelec" >
				<input type="hidden" value="<?php echo e($MateriasDelDocent->Grupo); ?>" name="Grupo" >
				<input type="hidden" value="<?php echo e($id); ?>" name="idDocente" >
				<input type="hidden" value="<?php echo e($usua); ?>" name="usua" >
				<?php echo Form::Close(); ?>


			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		</section>
		<?php 
			view('DocenteInterfazPrincipal.InterfazPrincipal',compact('usua'));
		?>

		<?php if($visibility==1): ?>
			<?php echo Form::open(['route'=>['AsignarCalificacion.edit',$usua],'method'=>'GET']); ?>

				<div class="card-header text-center" style="font-size:200%;width: 69%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 55%; left: 26%;" ><?php echo e(__($Materiasele)); ?></div>

				<div class="card-header text-center" style="font-size:100%;width: 70%; height:51%; background: white; overflow-y: scroll; color: rgb(212, 172, 13); position:  absolute;top: 65%; left: 25%;" >
					<table  id="alumn" class="table" style="width: 100%">
				        <tr style="font-size:100%">
				        	<th  align="center" style="width:2%"><?php echo e(('Matrícula')); ?></th>
				        	<th  align="center"><?php echo e(('Alumno')); ?></th>
				          	<th  align="center"><?php echo e(('Parcial 1')); ?></th>
				          	<th  align="center"><?php echo e(('Parcial 2')); ?></th>
				          	<th  align="center"><?php echo e(('Semestral ')); ?></th>
				          	<th  align="center"><?php echo e(('Número de Clases ')); ?></th>
				          	<th  align="center"><?php echo e(('Faltas ')); ?></th>

				        </tr>
			        
			        	<?php $contador=0;
			        		$Con_cal=0; ?>
				        	
					        <?php $__currentLoopData = $AlumnosEnMismoSemestre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $AlumnosEnMismoSemestr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

						        <input type="hidden" name="ClaveA[]" value="<?php echo e($AlumnosEnMismoSemestr[$contador]->Clave_A); ?>">
						        <input type="hidden" name="ClaveM" value="<?php echo e($Calif_Extraidas[$contador]->ClaveM); ?>">
						        <input type="hidden" name="Semestre" value="<?php echo e($Calif_Extraidas[$contador]->Semestre); ?>">
						        <input type="hidden" name="Año" value="<?php echo e($Calif_Extraidas[$contador]->Año); ?>">
						        <input type="hidden" name="Usua" value="<?php echo e(__($usua)); ?>">
						        <input type="hidden" value="<?php echo e($Grupo_Seleccionado); ?>" name="Grupo_Selec" >

							    <tr>
						            <td><?php echo e($AlumnosEnMismoSemestr[$contador]->Clave_A); ?></td>
						            <td ><?php echo e($AlumnosEnMismoSemestr[$contador]->Nombre_A); ?></td>
						            <?php if($PeriodoActivo==1): ?>
						            	<td><input type="number" step="0.1" name="Calif1[]" min="0" max="10" value="<?php echo e($Calif_Extraidas[$Con_cal]->Parcial1); ?>"> </td>

						            	<td><input hidden="" type="number" step="0.1" name="Calif2[]" min="0"  max="10" value="<?php echo e($Calif_Extraidas[$Con_cal]->Parcial2); ?>">


						            	<input disabled="" type="number" step="0.1" min="0"  max="10" name="Calif2[]" value="<?php echo e($Calif_Extraidas[$Con_cal]->Parcial2); ?>"></td>
						            	<td><input disabled="" type="number" step="0.1" min="0"  max="10" name="Semestral[]" value="<?php echo e($Calif_Extraidas[$Con_cal]->Semestral); ?>">
						            	<input hidden="" type="number" step="0.1" min="0"  max="10" name="Semestral[]" value="<?php echo e($Calif_Extraidas[$Con_cal]->Semestral); ?>"></td>
						            <?php elseif($PeriodoActivo==2): ?>
					            		<input hidden="" type="number" step="0.1" min="0"  max="10" name="Calif1[]" value="<?php echo e($Calif_Extraidas[$Con_cal]->Parcial1); ?>">
					            		<td><input disabled type="number" min="0"  max="10" step="0.1" name="Calif1[]" value="<?php echo e($Calif_Extraidas[$Con_cal]->Parcial1); ?>"> </td>
					            		<td><input type="number" step="0.1" min="0"  max="10" name="Calif2[]" value="<?php echo e($Calif_Extraidas[$Con_cal]->Parcial2); ?>"></td>
					            		<td><input disabled="" type="number" step="0.1" min="0"  max="10" name="Semestral[]" value="<?php echo e($Calif_Extraidas[$Con_cal]->Semestral); ?>" >
					            		<input hidden="" type="number" step="0.1" min="0"  max="10" name="Semestral[]" value="<?php echo e($Calif_Extraidas[$Con_cal]->Semestral); ?>" ></td>
					            	<?php elseif($PeriodoActivo==3): ?>
					            		<input hidden="" type="number" step="0.1" min="0"  	max="10" name="Calif1[]" value="<?php echo e($Calif_Extraidas[$Con_cal]->Parcial1); ?>">
							            <input hidden="" type="number" step="0.1" min="0" max="10" name="Calif2[]" value="<?php echo e($Calif_Extraidas[$Con_cal]->Parcial2); ?>">
							            <td><input hidden="" type="number" step="0.1" min="0"  max="10" name="Semestral[]" ></td>
					            		<td><input disabled type="number" step="0.1" min="0" max="10" name="Calif1[]" value="<?php echo e($Calif_Extraidas[$Con_cal]->Parcial1); ?>"> </td>
					            		<td><input disabled type="number" step="0.1" min="0" max="10" name="Calif2[]" value="<?php echo e($Calif_Extraidas[$Con_cal]->Parcial2); ?>"></td>
					            		<td><input type="number" step="0.1" min="0"  max="10" name="Semestral[]" value="<?php echo e($Calif_Extraidas[$Con_cal]->Semestral); ?>" >
					            		<input hidden="" type="number" step="0.1" min="0"  max="10" name="Semestral[]" value="<?php echo e($Calif_Extraidas[$Con_cal]->Semestral); ?>" ></td>
					            	<?php else: ?>
							            <input hidden="" type="number" step="0.1" min="0"  max="10" name="Calif1[]" value="<?php echo e($Calif_Extraidas[$Con_cal]->Parcial1); ?>">
							            <input hidden="" type="number" step="0.1" min="0" max="10" name="Calif2[]" value="<?php echo e($Calif_Extraidas[$Con_cal]->Parcial2); ?>">
							            <td><input hidden="" type="number" step="0.1" min="0"  max="10" name="Semestral[]" ></td>
					            		<td><input disabled type="number" step="0.1" min="0" max="10" name="Calif1[]" value="<?php echo e($Calif_Extraidas[$Con_cal]->Parcial1); ?>"> </td>
					            		<td><input disabled type="number" step="0.1" min="0" max="10" name="Calif2[]" value="<?php echo e($Calif_Extraidas[$Con_cal]->Parcial2); ?>"></td>
					            		<td><input disabled="" type="number" step="0.1" min="0"  max="10" name="Semestral[]" value="<?php echo e($Calif_Extraidas[$Con_cal]->Semestral); ?>" >
					            		<input hidden="" type="number" step="0.1" min="0"  max="10" name="Semestral[]" value="<?php echo e($Calif_Extraidas[$Con_cal]->Semestral); ?>"></td>
					            	<?php endif; ?>
					            	<?php $Prome=($Calif_Extraidas[$Con_cal]->Parcial1+$Calif_Extraidas[$Con_cal]->Parcial2)/2; ?>
					            	<!--<td> <?php echo e($Prome); ?> </td>-->
					            	<td><input required type="number"min="0"name="NumTotalAsis[]" style="width: 50%;" ></td>
					            	<td><input required type="number"min="0"name="Faltas[]" style="width: 50%;" ></td>
				          		</tr>
				        		<?php $contador=$contador+0;
				        		$Con_cal=$Con_cal+1; ?>
				        	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			    	</table>
			    	<input hidden="" type="number" step="0.1" min="0"  max="10" name="Periodo" value="<?php echo e($PeriodoActivo); ?>" >
				</div>
				<?php echo Form::submit('Guardar',['class'=>'btn btn-primary','style'=>'position: absolute; top: 120%;left:75%;']); ?>

			<?php echo Form::close(); ?>


		<?php elseif($visibility==2): ?>
			<div class="card-header text-center" style="font-size:135%;width: 30%; height:15%; background: #FFFFFF; color: rgb(26, 35, 126); position:  absolute;top: 77%; left: 45%;" ><?php echo e(__(' ')); ?></div>
		<?php else: ?>
			<div class="card-header text-center" style="font-size:200%;width: 69%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 55%; left: 26%;" ><?php echo e(__($Materiasele)); ?></div>
			<div class="card-header text-center" style="font-size:135%;width: 30%; height:15%; background: #839192; color: rgb(26, 35, 126); position:  absolute;top: 77%; left: 45%;" ><?php echo e(__('No hay alumnos registrados en esta materia.')); ?></div>
		<?php endif; ?>
	</body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PrepaTeul\resources\views/Calificaciones/VisualizarCalif.blade.php ENDPATH**/ ?>