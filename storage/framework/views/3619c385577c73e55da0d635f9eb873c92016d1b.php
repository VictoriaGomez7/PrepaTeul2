<!DOCTYPE html>
<a href="ControlEscolarInicio">
            <button class="btn btn-success" style="position: absolute;top: 115%;left:65%">Cancelar</button></a>



<?php $__env->startSection('title','Registrar Materias'); ?>

<?php echo $__env->make('ControlEscolar.CEprincipal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
    <?php $__env->startSection('frameMaterias'); ?>
    <script type="text/javascript">
           function habilitar(valor){
            if (valor=="Formación Propedéutica"){
                document.getElementById("bachillerato").disabled = false;
            }else{

                document.getElementById("bachillerato").disabled = true;
            }
           }
    </script>


        <?php if($errors->any()): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="alert alert-danger" role="alert" style="width: 50%; position:  absolute;top: 43%; left: 25%;z-index: 1;">
                        <button class="close" data-dismiss="alert"><span>&times;</span></button>
                        <strong>¡Error! </strong><?php echo e($error); ?>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

        <?php if(session()->has('msj')): ?>
            <div class="alert alert-success" role="alert" style="width: 50%; position:  absolute;top: 43%; left: 25%;z-index: 1;">
                <button class="close" data-dismiss="alert"><span>&times;</span></button>
                <strong>¡Correcto! </strong><?php echo e(session('msj')); ?>

            </div>
        <?php endif; ?>

        <?php if(session()->has('msjERROR')): ?>
            <div class="alert alert-danger" role="alert" style="width: 50%; position:  absolute;top: 43%; left: 25%;z-index: 1;">
                <button class="close" data-dismiss="alert"><span>&times;</span></button>
                <strong>¡Error! </strong><?php echo e(session('msjERROR')); ?>

            </div>
        <?php endif; ?>


        <div class="card-header text-center" style="font-size:200%;width: 50%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 52%; left: 25%;" ><?php echo e(__('Registrar Materias')); ?></div> <!-- text-center ES PARA CENTRA EL TEXTO -->
         <?php echo Form::open(['route' => ['materia.create'],'method'=>'GET']); ?>

        

            <?php echo csrf_field(); ?>

            <div style="position: absolute;top: 62%; left: 25%; width: 50%;height:50%; background-color:#aaa">

                <p style="font-size:130%; position:  absolute;top: 10%; left: 5%"><?php echo e(('Nombre:')); ?></p>
                <p style="font-size:130%; position:  absolute;top: 25%; left: 5%"><?php echo e(('Tipo:')); ?></p>
                <p style="font-size:130%; position:  absolute;top: 38%; left: 5%"><?php echo e(('Área')); ?></p>
                <p style="font-size:130%; position:  absolute;top: 44%; left: 5%"><?php echo e(('Propedéutica:')); ?></p>
                <p style="font-size:130%; position:  absolute;top: 57%; left: 5%"><?php echo e(('Semestre:')); ?></p>
                <p style="font-size:130%; position:  absolute;top: 72%; left: 5%"><?php echo e(('Horas:')); ?></p>

                <p><input type="text" placeholder="Matemáticas I" value="<?php echo e(old('nombre')); ?>" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" id="nombre" name="nombre" style="font-size:105%; width:65%; position:  absolute;top: 10%; left: 30%"/></p>

                <select name="tipo" di="tipo" required style="font-size:110%;width: 65%; position:  absolute;top: 25%; left: 30%" onchange="habilitar(this.value)">
                            <option value="<?php echo e(old('tipo')); ?>"><?php echo e(old('tipo')); ?></option>
                            <option value="Formación Propedéutica">Formación Propedéutica</option>
                            <option value="Formación Para El Trabajo">Formación Para El Trabajo</option>
                            <option value="Actividades Paraescolares">Actividades Paraescolares</option>
                            <option value="Formación Básica" selected>Formación Básica</option>
                      </select>
                <select name="bachillerato" id="bachillerato" required style="font-size:110%;width: 65%; position:  absolute;top: 42%; left: 30%" disabled="true">
                            <option value="<?php echo e(old('tipo')); ?>"><?php echo e(old('tipo')); ?></option>
                            <option value="Químico Biológica">Químico-Biológica</option>
                            <option value="Físico Matemática">Físico-Matemática</option>
                            <option value="Humanidades y Ciencias Sociales">Humanidades y Ciencias Sociales</option>
                            <option value="Económico Administrativa">Económico-Administrativa</option>
                      </select>

                <select name="semestre" required style="font-size:110%;width: 65%;;position: absolute;top:59%; left:30%;">
                            <option value="<?php echo e(old('semestre')); ?>"><?php echo e(old('semestre')); ?></option>
                            <option value="PRIMER SEMESTRE" selected>PRIMER SEMESTRE</option>
                            <option value="SEGUNDO SEMESTRE">SEGUNDO SEMESTRE</option>
                            <option value="TERCER SEMESTRE">TERCER SEMESTRE</option>
                            <option value="CUARTO SEMESTRE">CUARTO SEMESTRE</option>
                            <option value="QUINTO SEMESTRE">QUINTO SEMESTRE</option>
                            <option value="SEXTO SEMESTRE">SEXTO SEMESTRE</option>
                      </select>
                <p><input type="number" placeholder="1" value="<?php echo e(old('horas')); ?>" required min="1" max="12" id="horas" name="horas" style="font-size:105%; width: 65%; position:  absolute;top: 74%; left: 30%"/></p>


            </div>


        <?php echo Form::submit('Registrar',['class'=>'btn btn-primary', 'style'=>'position: absolute;top: 115%;left:55%']); ?>

        <?php echo Form::close(); ?>

</body>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PrepaTeul\resources\views/RegistrarMaterias/create.blade.php ENDPATH**/ ?>