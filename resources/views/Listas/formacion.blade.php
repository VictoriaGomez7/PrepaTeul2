<!DOCTYPE html>

<a href="http://127.0.0.1:8000/Imprimelistas">
            <button class="btn btn-success" style="font-size:120%; position: absolute;top: 115%;left:67%">Cancelar</button></a>
<html>

    <head>
     <script src="http://code.jquery.com//jquery.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

          {{--@include('interfazprincipal.image')--}}
          @include('ControlEscolar.CEprincipal')
          @extends('layouts.app')
    </head>
<body>
  @if (session()->has('msj2'))
    <div class="alert alert-danger" role="alert" style="width: 40%; position:  absolute;top: 44%; left: 30%;">
      <button type="button" class="close" data-dismiss="alert" >&times;</button>
      <strong>¡Error! </strong>{{session('msj2')}}
    </div>
  @endif

 <section style="width: 100%; max-width: 100%; height:100%;max-height: 100%; background: #FFFFFF">

        <div class="card-header text-center" style="font-size:200%;width: 50%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 52%; left: 25%;" >Formación Para El Trabajo
        </div> <div style="position: absolute;top: 62%; left: 25%; width: 50%;height:50%; background-color:#aaa">

{!! Form::open(['route'=>['Imprimelistas.edit', $semestre],'method'=>'GET','files'=>false]) !!}     {{ csrf_field() }}
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

            alert('Unicamente los alumnos de Tercero y Cuarto Semestre  tienen asignado una Formación Para el Trabajo');

        }


         if(resultado=='bachillerato'  && (resultado2=='PRIMER SEMESTRE' ||
          resultado2=="SEGUNDO SEMESTRE" || resultado2=='TERCER SEMESTRE' ||
          resultado2=="CUARTO SEMESTRE")){

            alert('Unicamente los alumnos de Quinto y Sexto Semestre  tienen asignado una Área Propedéutica');
        }
          //alert(resultado);
         // alert(resultado2);
      }
    </script>


    <?php 
      echo $radios;

     ?>
     <input type="submit"  name="formacion" value="Aceptar" class="btn btn-primary" style="font-size:120%; position :absolute;top: 106%; left: 65%" >

     {!! form::close() !!}
    </div>
  </section>
</body>
</html>
