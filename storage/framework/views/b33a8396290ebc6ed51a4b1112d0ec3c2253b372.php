<?php $__env->startSection('title','Tabla Calificacio Alumno'); ?>
 <?php echo $__env->make('ControlEscolar.CEprincipal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>
<?php if(session()->has('msj1')): ?>
    <div class="alert alert-success" role="alert" style="width: 60%; position:  absolute;top: 43%; left: 15%;z-index: 1;">
      <button class="close" data-dismiss="alert"><span>&times;</span></button>
        <strong>¡Correcto! </strong><?php echo e(session('msj1')); ?>

    </div>
  <?php endif; ?>
<a href="http://127.0.0.1:8000/CONSULTACALIFICACIONESCE">
            <button class="btn btn-success" style="position: absolute;top: 150%;left:75%">Cancelar</button></a>
		
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  position:  absolute;top:55%; left: 5%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<?php $__currentLoopData = $nombreA; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nombre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<h2 style="position: absolute;left: 5%;"><?php echo e($nombre->Nombre_A); ?></h2>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<table id="alumn" class="table" style="width: 80%;" >
  <tr>
    <th>Clave</th>
     <th>Materia</th>
    <th>Parcial 1</th>
    <th>Parcial 2</th>
    <th ></th>
  </tr>
  <?php $c=0; ?>
  <?php $__currentLoopData = $AL; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alumno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  	<tr >
      <?php echo Form::open(['route'=>['Calificaciones.show',$alumno->id],'method'=>'PUT']); ?>

	    <td><?php echo e($alumno->ClaveM); ?></td>
      <td><?php echo e($Materia1[$c]); ?></td>
	    <td><?php echo e($alumno->Parcial1); ?></td>
	    <td><?php echo e($alumno->Parcial2); ?></td>
      <td ><button class="btn btn-success" style="height: 25px;" >Modificar</button></td>
      </form>
  	</tr>
  <?php $c=$c+1; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
</table>

</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PrepaTeul\resources\views/Calificaciones/TablaC1.blade.php ENDPATH**/ ?>