<?php $__env->startSection('title','Cerrar Ciclo Escolar'); ?>
 <?php echo $__env->make('ControlEscolar.CEprincipal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>

<a href="http://127.0.0.1:8000/ControlEscolarInicio">
            <button class="btn btn-success" style="position: absolute;top: 70%;left:45%">Cancelar</button></a>

<body>

    <?php if($BanMSJ==1): ?>
        <div class="alert alert-success" role="alert" style="width: 75%; position:  absolute; top: 43%; left: 15%;z-index: 1;">
        <button class="close" data-dismiss="alert"><span>&times;</span></button>
        <strong>¡Correcto! </strong><?php echo e(($msj)); ?>

        </div>
    <?php endif; ?>
    <?php if($BanMSJ==2): ?>
        <div class="alert alert-danger" role="alert" style="width: 75%; position:  absolute;top: 43%; left: 15%;z-index: 1;">
        <button type="button" class="close" data-dismiss="alert" >&times;</button>
        <strong>¡Error! </strong><?php echo e(($msj)); ?>

        </div>
    <?php endif; ?>
        
        <div class="" style="font-size:200%;width: 75%; height: 9.8%; color: red; position:  absolute;top: 52%; left: 15%;" ><?php echo e(__('Antes de dar clic en cerrar ciclo, debe estar completamente seguro de realizar dicha acción.')); ?></div> <!-- text-center ES PARA CENTRA EL TEXTO -->

        

            <?php if($bandera==True): ?>
                <?php echo Form::open(['route'=>['Cerrar_Semestre.create'],'method'=>'GET','files'=>true]); ?>

                
                        <?php echo method_field('PUT'); ?>
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-primary" href="#" style="position: absolute;top: 70%;left:35%">Cerrar Ciclo</button>
                <?php echo Form::close(); ?>

                
            <?php endif; ?>
            <?php if($bandera==False): ?>
                <div href="#" style="position: absolute;top: 70%;left:33%; width: 10%; background: #237FF4;color: rgb(255, 255, 255)">Aún no termina el segundo parcial.</div>
            <?php endif; ?>




</body>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PrepaTeul\resources\views/CerrarCiclo/index.blade.php ENDPATH**/ ?>