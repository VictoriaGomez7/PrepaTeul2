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
          <?php $__currentLoopData = $ObtenerIrregulares; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alumno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <?php echo Form::open(['route' => ['Irregulares.store'],'method'=>'POST']); ?>

            <td align="justify"><?php echo e($alumno->Clave_A); ?></td>
            <input type="hidden" name="Clave_A" value="<?php echo e($alumno->Clave_A); ?>">
            <td align="justify"><?php echo e($Listado_Nombres_Alumnos[$Cont]); ?></td>
            <td align="justify"><?php echo e($Cantidad_Materias_Reprobadas[$Cont]); ?></td>

            
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

</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PrepaTeul\resources\views/Irregular/Mostrar.blade.php ENDPATH**/ ?>