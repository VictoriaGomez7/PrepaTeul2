<!doctype html>
<a href="http://127.0.0.1:8000/reinscripcion">
            <button class="btn btn-success" style="position: absolute;top: 150%;left:75%">Cancelar</button></a>

<body>
<?php $__currentLoopData = $CAlumno; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alumno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <script type="text/javascript">
          var Grados = function(x)
            {
                document.getElementById('grado').value=x;
            }

        var semes = function(x)
            {
                document.getElementById('semestree').value=x;
            }
        </script>



        <div class="card-header text-center" style="font-size:200%;width: 90%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 52%; left: 5%;" ><?php echo e(__('SOLICITUD DE RE-INSCRIPCIÓN')); ?></div> <!-- text-center ES PARA CENTRA EL TEXTO -->

        <?php echo Form::open(['route'=>['Reinscripcion.edit',$alumno->Clave_A],'method'=>'GET','files'=>true]); ?>

                <!--<form class="form-group" method="PUT" action="/Reinscripcion/<?php echo e($alumno->id); ?>/edit">-->
                    
            <?php echo csrf_field(); ?>

            <div style="position: absolute;top: 62%; left: 5%; width: 20%;height:53%;background-color:#aaa">
                <p style="font-size:130%"><?php echo e(('Matrícula:')); ?></p>
                <p style="font-size:130%"><?php echo e(('Nombre del alumno:')); ?></p>
                <p style="font-size:130%"><?php echo e(('Nombre de la madre:')); ?></p>
                <p style="font-size:130%"><?php echo e(('Nombre del padre:')); ?></p>
                <p style="font-size:130%"><?php echo e(('Teléfono del tutor:')); ?></p>
                <p style="font-size:130%"><?php echo e(('Teléfono del alumno:')); ?></p>
                <p style="font-size:130%"><?php echo e(('Domicilio:')); ?></p>
            </div>

            <div style="position: absolute;top: 62%; left: 24.9%; width: 25%;height:53%;background-color:#aaa">
                <p><input type="text" required readonly pattern="[1-9]{2}[0]{2}[1]{2}[0-9]{4}" id="Clave_A" name="Clave_A" value="<?php echo e($alumno->Clave_A); ?>" style="font-size:105%; width: 95%"/></p>

                <p><input type="text" required readonly id="nombr" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" name="nombre" value="<?php echo e($alumno->Nombre_A); ?>"style="font-size:105%; width: 95%;" /></h1>

                <p><input type="text" required readonly id="nombremadre" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" name="nombremadre" value="<?php echo e($alumno->Nombre_M); ?>"style="font-size:105%; width: 95%;"/></p>

                <p><input type="text" required readonly="" id="nombrpadre" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" name="nombrepadre" value="<?php echo e($alumno->Nombre_P); ?>"style="font-size:105%; width: 95%;"/></p>

                <p><input type="text"required pattern="[1-9]{1}[0-9]{9}" id="telefonotutor" name="Telefono_T"  value="<?php echo e($alumno->Telefono_T); ?>"style="font-size:105%; width: 95%;"/></p>

                <p><input type="tel" required id="telefonoalumno" name="Telefono_A"
                  pattern="[1-9]{1}[0-9]{9}" value="<?php echo e($alumno->Telefono_A); ?>"style="font-size:105%; width:95%"/></p>

                <p><input type="address" required id="domicilio" name="Domicilio" value="<?php echo e($alumno->Domicilio); ?>" style="font-size:105%; width: 95%"/></p>
            </div>

            <div style="position: absolute;top: 62%; left: 49.9%; width: 20.1%;height:53%;background-color:#aaa">
                <p style="font-size:130%"><?php echo e(('Municipio:')); ?></p>
                <p style="font-size:130%"><?php echo e(('Población:')); ?></p>
                <p style="font-size:130%"><?php echo e(('Correo electrónico:')); ?></p>
                <p style="font-size:130%"><?php echo e(('Clave CURP:')); ?> </p>
                <p style="font-size:130%"><?php echo e(('Num. de Seguro Social:')); ?></p>
                <p style="font-size:130%"><?php echo e(('Fecha de Nacimiento:')); ?></p>
                <p style="font-size:130%"><?php echo e(('Edad:')); ?></p>
            </div>

            <div style="position: absolute;top: 62%; left: 70%; width:25%;height:53%;background-color:#aaa">
                <p><input type="text" required id="municipio" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" name="Municipio" value="<?php echo e($alumno->Municipio); ?>"style="font-size:105%; width:97%"/></p>
                <p><input type="text" required id="poblacion" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" name="Poblacion" value="<?php echo e($alumno->Poblacion); ?>"style="font-size:105%; width:97%" /></p>
                <p><input type="email" id="correo" pattern="^[a-z0-9_]+(?:\.[a-z0-9_]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$" name="Email" value="<?php echo e($alumno->Email); ?>"style="font-size:105%; width:97%;"></p>

                <p><input type="text" required id="curp" pattern="^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$" name="curp" value="<?php echo e($alumno->Curp); ?>" readonly value="<?php echo e($alumno->Curp); ?>" style="font-size:105%; width:97%;"/></p>
                <p><input type="text" id="nss" min="1" max="99999999999" value="<?php echo e($alumno->NSS); ?>" name="NSS" style="font-size:105%; width:97%;"/></p>

                <p> <input type="date" name="fecha" required  readonly value="<?php echo e($alumno->Fecha_Nac); ?>" style="font-size:105%;position: absolute;top: 69%;left:0%; width:97%"> </p>


                <p> <select name="Edad" required style="position: absolute;top: 86%;left:0%; width: 20%">
                    <option value="<?php echo e($alumno->Edad); ?>"><?php echo e($alumno->Edad); ?></option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    </select>
                </p>

                <label style="position: absolute;top: 84%;left:40%;font-size:140%;">Sexo: </label>
                <label style="position: absolute;top: 85%;left:60%;font-size:130%; width: 20%"><?php echo e($alumno->Sexo); ?></label>

            </div>

            <div style="font-size:140%;width: 90%; height: 11.5%;position: absolute;top:115%;left:5%; background-color:#aaa">
                    <p style="position: absolute;top: 3px;left:170px; width: 900px"><?php echo e(('Con todo respeto solicito a Usted Sr. Director, me acepte como alumno  de esta Escuela Preparatoria a su cargo para cursar el')); ?></p>
                        <select name="Grado" readonly onchange="Grados(this.value); semes(this.options[this.selectedIndex].innerHTML);" required="true" style="font-size:80%;width: 17%;/*posicion->*/position: absolute;top:54%; left:46%;">
                            <?php
                            echo $opciones2;
                             ?>
                      </select>
                    <p style="position: absolute;top: 50%;left:64%"><?php echo e(('del')); ?></p>
                    <!--Caja del grado-->
                    <input type="text" id="grado" value="<?php echo $Gra ?>" name="Gradoo" disabled style="background-color:#aaa; position: absolute; top:51%; left: 67%; width: 8%;border: 0px;font-size:90%;text-align: center; color:black">
                    <input type="text" id="semestree" value="<?php echo e($alumno->Semestre); ?>" name="Semestre" style="background-color:#aaa; position: absolute; top:51%; left: 85%; width: 0%;border: 0px;font-size:90%;text-align: center; color:black">

                    <p style="position: absolute; top:53%; left: 75.5%;font-size:90%"> <?php echo e(('GRADO.')); ?></p>

            </div>

            <?php $__currentLoopData = $FtOBache; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $FTBH): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div style="position: absolute;top: 127%; left: 5%; width: 90%;height:15%;background-color:#aaa">
                <p style="font-size:138%"><?php echo e(('Formación para el Trabajo:')); ?></p>
                <p style="font-size:138%"><?php echo e(('Bachillerato:')); ?></p>
                <?php if($bandera==1): ?>
                <select  name="ft2" id="ft2" style="font-size:110%;width: 26.5%; position:  absolute;top: 4%; left: 22%"  >
                            <option value="<?php echo e(old('Grado')); ?>"><?php echo e(old('Grado')); ?></option>

                            <option value="Informática">Informática</option>
                            <option value="Turismo">Turismo</option>
                            <option value="Higiene y Salud Comunitaria">Higiene y Salud Comunitaria</option>

                      </select>

               <input readonly value=""  name="bach1" id="bach1" style="font-size:110%;width: 26.5%; position:  absolute;top: 53%; left: 22%" >
                <?php elseif($bandera==11): ?>
                <input readonly value="<?php echo e($FTBH->Formación_Trabajo); ?>" name="ft2" id="ft2" style="font-size:110%;width: 26.5%; position:  absolute;top: 4%; left: 22%"  >

                <input readonly value="<?php echo e($FTBH->Bachillerato); ?>"  name="bach1" id="bach1" style="font-size:110%;width: 26.5%; position:  absolute;top: 53%; left: 22%" >
                <?php elseif($bandera==2): ?>
                <input readonly value="" name="ft2" id="ft2" style="font-size:110%;width: 26.5%; position:  absolute;top: 4%; left: 22%"  >

                <select name="bach1" id="bach1" style="font-size:110%;width: 26.5%; position:  absolute;top: 53%; left: 22%" >
                            <option value="<?php echo e(old('Grado')); ?>"><?php echo e(old('Grado')); ?></option>
                            <option value="Químico Biológica">Químico Biológica</option>
                            <option value="Físico Matemática">Físico Matemática</option>
                            <option value="Ciencias sociales y humanidades">Ciencias sociales y humanidades</option>
                            <option value="Económico Administrativa">Económico Administrativa</option>
                      </select>
                <?php elseif($bandera==22): ?>
                    <input readonly value="" name="ft2" id="ft2" style="font-size:110%;width: 26.5%; position:  absolute;top: 4%; left: 22%"  >

                    <input readonly value="<?php echo e($FTBH->Bachillerato); ?>"  name="bach1" id="bach1" style="font-size:110%;width: 26.5%; position:  absolute;top: 53%; left: 22%" >

                <?php else: ?>
                <input readonly value="" name="ft2" id="ft2" style="font-size:110%;width: 26.5%; position:  absolute;top: 4%; left: 22%"  >

                    <input readonly value=""  name="bach1" id="bach1" style="font-size:110%;width: 26.5%; position:  absolute;top: 53%; left: 22%" >
                <?php endif; ?>


            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            <button type="submit" class="btn btn-primary" href="#" style="position: absolute;top: 150%;left:65%">Reinscribir</button>

        <?php echo Form::close(); ?>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</body><?php /**PATH C:\xampp\htdocs\PrepaTeul\resources\views/Reinscripciones/form.blade.php ENDPATH**/ ?>