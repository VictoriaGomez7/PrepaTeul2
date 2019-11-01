<!DOCTYPE html>

<a href="http://127.0.0.1:8000/Alumnosinicio">
  <button class="btn btn-success" style="position: absolute;top: 83%;left:50%; width:10%">Cancelar</button></a>

<html>

  @include('ControlEscolar.CEprincipal')
<body>


  @if (session()->has('MsjERR'))
    <div class="alert alert-danger" role="alert" style="width: 42%; position:  absolute;top: 45%; left: 29%;z-index: 1;">
      <button class="close" data-dismiss="alert"><span>&times;</span></button>
      <strong>¡ERROR! </strong>{{ session('MsjERR') }}
    </div>
  @endif

 <section style="width: 100%; max-width: 100%; height:100%;max-height: 100%; background: #FFFFFF">

        <div class="card-header text-center" style="font-size:220%;width: 40%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 54%; left: 30%;" > 
          {{ "Alumno" }}


           </div>
            <div style="position: absolute;top: 64%; left: 30%; width: 40%; background-color:#aaa">
              <br>
              <center>
                 {!! Form::open(['route'=>['ImprimeCarta.show','a'],'method'=>'GET','files'=>false]) !!}     {{ csrf_field() }}
                 <div style="background-color:#aaa; position: absolute; top: 20%; left: 5%">
                  <p style="font-size:130%">{{('Matrícula:')}}</p> </div>
              <input type="input" class="form-control" placeholder="Matricula" name="cajaAlumno" style="width:50%;">
              
              <input type="submit" class="btn btn-primary" name="aceptar"  value="Generar carta" style="width:25%; position: absolute; top: 140%; left: 15%">
              {!! Form::close() !!}
              </center>
              <br>
           </div>
         </section>
       </body>
</html>
