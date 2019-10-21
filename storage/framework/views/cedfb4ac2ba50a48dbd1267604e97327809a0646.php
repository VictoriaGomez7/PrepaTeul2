<!DOCTYPE html>

<html>

    <head>
     <script src="http://code.jquery.com//jquery.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

          
          <?php echo $__env->make('ControlEscolar.CEprincipal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          
    </head>
<body>

    
        <?php if(session()->has('msj2')): ?>
    <div class="alert alert-danger" role="alert" style="width: 50%; position:  relative;text-align: center; left: 25%;">
      <button type="button" class="close" data-dismiss="alert" >&times;</button>
      <strong>¡Error! </strong><?php echo e(session('msj2')); ?>

    </div>
  <?php endif; ?>

 <section style="width: 100%; max-width: 100%; height:100%;max-height: 100%; background: #FFFFFF">
   <?php
          if(isset($semestre)){ 
         ?>
        <div class="card-header text-center" style="font-size:200%;width: 90%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 52%; left: 5%;" ><?php echo e(__('Grupos del '.$semestre)); ?>

        </div> <div style="position: absolute;top: 62%; left:5%; width: 90%; background-color:#aaa">
          <?php echo Form::open(['route'=>['grupos.show', $semestre ],'method'=>'GET','files'=>false]); ?>     <?php echo e(csrf_field()); ?>

        
         <table width="100%" left="5px" align="center" border="">
          <tr>
           <td  align="center" width="25%">Grupo A

           </td>
            <td  align="center" width="25%">Grupo B</td>
            <td  align="center" width="25%">Hombres</td>
            <td  align="center" width="25%">Mujeres</td>
          </tr>
          <tr>
            <td  align="center"> </td>
            <td  align="center"></td>
            <td  align="center"> </td>
            <td  align="center"></td>
          </tr>
          <tr>
            <td align="justify">
          <table>
              <?php
            
            foreach ($listaA as $r) {
                ?>
                <tr><td>
               <label for="eliminar<?php echo e($r->Clave_A); ?>"> <?php echo e($r->Nombre_A); ?></label>
                <input type="submit" name="eliminar<?php echo e($r->Clave_A); ?>" value="Mover" > 
              </td></tr>
                <?php
              }  
          ?>
        </table>
        
            </td>
            <td align="justify">
          
                  <table>
              <?php
            
            foreach ($listaB as $r) {
                ?>
                <tr><td>
               <label for="eliminar<?php echo e($r->Clave_A); ?>"> <?php echo e($r->Nombre_A); ?></label>
                <input type="submit" name="eliminar<?php echo e($r->Clave_A); ?>" value="Mover" > 
                </td></tr>
                <?php
              }  
          ?>
          </table>
      
            </td>
            <td  align="center">
          <table>
          <?php
            
            foreach ($alumnosHombres as $r) {
                ?>
                <tr><td>
               <label for="<?php echo e($r->Clave_A); ?>"> <?php echo e($r->Nombre_A); ?></label>
               <select name="combo<?php echo e($r->Clave_A); ?>" >
                  <option value="A" >A</option>
                  <option value="B" >B</option>
              </select>
                <input type="submit" name="<?php echo e($r->Clave_A); ?>" value="Aceptar" > 
                </td></tr>
                <?php
              }  
          ?>
        </table>
        </td>
        <td  align="center">
             <?php
         
            foreach ($alumnosMujeres as $r) {
                ?>
               <label for="<?php echo e($r->Clave_A); ?>"> <?php echo e($r->Nombre_A); ?></label>
               <select name="combo<?php echo e($r->Clave_A); ?>" >
                  <option value="A">A</option>
                  <option value="B">B</option>
              </select>
                <input type="submit" name="<?php echo e($r->Clave_A); ?>" value="Aceptar" > 
                <br><br>

                <?php
              }  
          ?>

        </td>
        </tr>
        </table>
       <input type="submit" name="A" value="Guardar" class="btn btn-primary" top="20%" align="center" style="position: absolute;left: 45%">
             
        </div>
         <?php 
          }else{
        ?>
        <?php } ?>
              
      </div>

      <?php echo Form::close(); ?>

      </section>

    </body>
    </html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PrepaTeul\resources\views/grupos/creaGrupos.blade.php ENDPATH**/ ?>