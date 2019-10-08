<?php $__env->startSection('title','Materia De Los Docentes'); ?>

<?php echo $__env->make('ControlEscolar.CEprincipal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>
	<div class="card-header text-center" style="font-size:200%;width: 90%; height: 12%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 54%; left: 5%;" ><?php echo e(__('Materias por Docente')); ?></div>

	<div class="row"style="width: 90%; margin-top:2%;position: absolute;top: 62%;left:6%">

		<?php $var1=array(); ?>
		<?php $__currentLoopData = $Docents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Docentes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php $__currentLoopData = $Relacion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Rela): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php if($Rela->Clave_D == $Docentes->Nombre ): ?>
			
			
			
			<?php if(in_array($Docentes->Nombre, $var1)==False): ?>
			<?php array_push($var1, $Docentes->Nombre); ?>
		<div class="col-sm" style="background:#aaa">
			
				<div class="card text-center" style="width:32rem; margin-top: 50px;">
					
				  <div class="card-body">  	
			
				    <h5 class="card-title" style="color: rgb(212, 172, 13)"><?php echo e($Docentes->Nombre); ?></h5>
				    <p class="card text" style="position: absolute;left:5%;color: rgb(212, 172, 13);border-color:white">Materia</p>
				    <p class="card text" style="position: absolute;left:61.5%;color: rgb(212, 172, 13);border-color:white" >Grupo</p>
				    <br>

				    <?php $__currentLoopData = $Relacion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Rela): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php if($Rela->Clave_D == $Docentes->Nombre ): ?>
				    
					<div style="position: absolute;lef:5%,">
				    	
				    	<p class="card-text"><?php echo e($Rela->Materia); ?></P>
				    </div>
				    <div style="position: absolute;left:61.5%">
				    	<p class="card-text"><?php echo e($Rela->Grupo); ?></P>

				    </div>
				    <br>
				    	<?php endif; ?>
				    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				    

				  	
			
				  </div>
				</div>
			</div>
			<?php endif; ?>
			<?php endif; ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
	<div>
		<br>
	</div>	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PrepaTeul\resources\views/DocentesMaterias/index.blade.php ENDPATH**/ ?>