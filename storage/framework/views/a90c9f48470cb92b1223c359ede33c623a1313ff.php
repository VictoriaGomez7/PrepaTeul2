<!doctype html>



<?php $__env->startSection('title','AlumnoIrregular'); ?>
<?php echo $__env->make('ControlEscolar.CEprincipal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('MostrarIrregulares'); ?>

<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<title>Alumnos</title>
<body>

  <?php if(Session()->has('msj')): ?>
    <div class="alert alert-success" role="alert" style="width: 90%; position:  absolute; top: 43%; left: 5%;z-index: 1;">
    <button class="close" data-dismiss="alert"><span>&times;</span></button>
    <strong>¡Correcto! </strong><?php echo e(Session('msj')); ?>

    </div>
  <?php endif; ?>

  <div class="card-header text-center" style="font-size:200%;width: 90%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 52%; left: 5%; " ><?php echo e(__('Alumnos Irregulares')); ?></div> <!-- text-center ES PARA CENTRA EL TEXTO -->

  <div style="background-color:#aaa; position: absolute;top: 62%; left: 5%; width: 90%">
    
    <div class="container">
    <table  id="alumn" class="table" >
      <thead>
        <tr>
          <th  align="center">Matrícula</th>
          <th  align="center">Alumno</th>
          <th  align="center">Materias reprobadas</th>
          <th></th>
        </tr>
      </thead>
        <tbody>
          <?php $Cont=0; ?>
          <?php $__currentLoopData = $Listado_Matriculas_Alumnos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alumno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <?php echo Form::open(['route' => ['Irregulares.store'],'method'=>'POST']); ?>

              <td align="justify"><?php echo e($alumno); ?></td>
              <input type="hidden" name="Clave_A" value="<?php echo e($alumno); ?>">
              <td align="justify"><?php echo e($Listado_Nombres_Alumnos[$Cont]); ?></td>
              <td align="justify"><?php echo e($Cantidad_Materias_Reprobadas[$Cont]); ?></td>
              <input type="hidden" name="Grupo_A" value="<?php echo e($Listado_Grupos[$Cont]); ?>">

              <td><?php echo Form::submit('Ver',['class'=>'btn btn-primary']); ?></td>
              <?php echo Form::close(); ?>


            </tr>
          <?php $Cont+=1; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>

    </table>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script>
      $(document).ready(function() {
        $('#alumn').DataTable({
          "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"}
        });
      });
    </script>

  </div>
  </div>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PrepaTeul\resources\views/Irregular/Mostrar.blade.php ENDPATH**/ ?>