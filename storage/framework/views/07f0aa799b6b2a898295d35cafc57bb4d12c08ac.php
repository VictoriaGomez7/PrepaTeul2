<!DOCTYPE html>

<a href="ControlEscolarInicio">
            <button class="btn btn-success" style="font-size:120%; position: absolute;top: 116%;left:67%">Cancelar</button></a>
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
<?php if(session()->has('msj')): ?>
        <div class="alert alert-success" role="alert" style="width: 50%; position:  relative;text-align: center; left: 25%;">
            <button class="close" data-dismiss="alert"><span>&times;</span></button>
            <strong>¡Correcto! </strong><?php echo e(session('msj')); ?>

        </div>
    <?php endif; ?>
 <section style="width: 100%; max-width: 100%; height:100%;max-height: 100%; background: #FFFFFF">

        <div class="card-header text-center" style="font-size:200%;width: 50%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 54%; left: 25%;" ><?php echo e(__(' Asignar Grupos')); ?></div>

        <div style="position: absolute;top: 64%; left: 25%; width: 50%;height:50%; background-color:#aaa">

<?php echo Form::open(['route'=>['grupos.show','a'],'method'=>'GET','files'=>false]); ?>     <?php echo e(csrf_field()); ?>

  <script type="text/javascript">
      function verifica(){
        var opciones1=document.getElementsByName('grupoAB');
        var resultado="";
        for (var i =0; i<opciones1.length; i++) {
          if(opciones1[i].checked){
            resultado=opciones1[i].value;
          }
          
        }



        var opciones2=document.getElementsByName('semestre');
        var resultado2="";
        for (var i =0; i<opciones2.length; i++) {
          if(opciones2[i].checked){
            resultado2=opciones2[i].value;
          }
          
        }
        if(resultado=='formacion'  && (resultado2=='PRIMER SEMESTRE' || 
          resultado2=="SEGUNDO SEMESTRE")){

            alert('Unicamente los alumnos de tercer semestre en adelante tienen asignada formacion profecional');
           
        }


         if(resultado=='bachillerato'  && (resultado2=='PRIMER SEMESTRE' || 
          resultado2=="SEGUNDO SEMESTRE" || resultado2=='TERCER SEMESTRE' || 
          resultado2=="CUARTO SEMESTRE")){

            alert('Unicamente los alumnos de quinto y sexto semestre  tienen asignado un bachillerato');
        }
          //alert(resultado);
         // alert(resultado2);
      }
    </script>
  

    <label style="font-size:130%; position:  absolute;top: 10%; left: 38%" >
          <input type="radio" name="semestre" onclick="verifica()" class="with-gap" value="PRIMER SEMESTRE" required="true" >
      <span>PRIMER SEMESTRE</span>
    </label>

    <label style="font-size:130%; position:  absolute;top: 25%; left: 38%">
          <input type="radio" name="semestre" onclick="verifica()" class="with-gap"  value="SEGUNDO SEMESTRE" >
      <span>SEGUNDO SEMESTRE</span>
    </label>


    <label style="font-size:130%; position:  absolute;top: 40%; left: 38%">
          <input type="radio" name="semestre" onclick="verifica()" class="with-gap" value="TERCER SEMESTRE" >
      <span>TERCER SEMESTRE</span>
    </label>

       <label style="font-size:130%; position:  absolute;top: 55%; left: 38%" >
          <input type="radio" name="semestre" onclick="verifica()" class="with-gap" value="CUARTO SEMESTRE" required="true" >
      <span>CUARTO SEMESTRE</span>
    </label>

    <label style="font-size:130%; position:  absolute;top: 70%; left: 38%">
          <input type="radio" name="semestre" onclick="verifica()" class="with-gap" value="QUINTO SEMESTRE" >
      <span>QUINTO SEMESTRE</span>
    </label>


    <label style="font-size:130%; position:  absolute;top: 85%; left: 38%">
          <input type="radio" name="semestre" onclick="verifica()" class="with-gap" value="SEXTO SEMESTRE" >
      <span>SEXTO SEMESTRE</span>
    </label>

     <input type="submit"  name="aceptar" value="Aceptar" class="btn btn-primary" style="font-size:120%; position :absolute;top: 105%; left: 65%" >

     <?php echo form::close(); ?>

    </div>
  </section>
</body>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PrepaTeul\resources\views/Grupos/index.blade.php ENDPATH**/ ?>