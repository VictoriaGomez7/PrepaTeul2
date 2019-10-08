<?php $__env->startSection('title','Cerrar Ciclo Escolar'); ?>
 <?php echo $__env->make('ControlEscolar.CEprincipal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>

<a href="http://127.0.0.1:8000/ControlEscolarInicio">
            <button class="btn btn-success" style="position: absolute;top: 80%;left:35%">Cancelar</button></a>

<body>

    <?php if(Session()->has('msj')): ?>
        <div class="alert alert-success" role="alert" style="width: 90%; position:  absolute; top: 43%; left: 5%;z-index: 1;">
        <button class="close" data-dismiss="alert"><span>&times;</span></button>
        <strong>¡Correcto! </strong><?php echo e(Session('msj')); ?>

        </div>
    <?php endif; ?>
    <?php if(session()->has('msj1')): ?>
        <div class="alert alert-danger" role="alert" style="width: 30%; position:  absolute;top: 43%; left: 35%;z-index: 1;">
        <button type="button" class="close" data-dismiss="alert" >&times;</button>
        <strong>¡Error! </strong><?php echo e(session('msj1')); ?>

        </div>
    <?php endif; ?>
        
        <div class="" style="font-size:200%;width: 90%; height: 9.8%; color: black; position:  absolute;top: 52%; left: 5%;" ><?php echo e(__('Antes de dar clic en cerrar ciclo, debe estar completamente seguro de realizar dicha acción')); ?></div> <!-- text-center ES PARA CENTRA EL TEXTO -->

        

            <?php if($bandera==True): ?>
                <?php echo Form::open(['route'=>['Cerrar_Semestre.create'],'method'=>'GET','files'=>true]); ?>

                
                        <?php echo method_field('PUT'); ?>
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-primary" href="#" style="position: absolute;top: 70%;left:35%">Cerrar Ciclo</button>
                <?php echo Form::close(); ?>

                
            <?php endif; ?>
            <?php if($bandera==False): ?>
                <div href="#"style="position: absolute;top: 70%;left:35%">Aún no ha culminado el segundo periodo</div>
            <?php endif; ?>




</body>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PrepaTeul\resources\views/CerrarCiclo/index.blade.php ENDPATH**/ ?>