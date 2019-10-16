<!DOCTYPE html>
<html>

    <head>
     <script src="http://code.jquery.com//jquery.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

          {{--@include('interfazprincipal.image')--}}
          @include('DocenteInterfazPrincipal.InterfazPrincipal')
    </head>
<body>

    
  @if ($Vmsj==1)
    <div class="alert alert-success" role="alert" style="width: 50%; position:  absolute;top: 44%; left: 25%;z-index: 1;">
      <button class="close" data-dismiss="alert"><span>&times;</span></button>
        <strong>¡Correcto! </strong>{{ ($msj) }}
    </div>
  @endif

  @if ($Vmsj==2)
    <div class="alert alert-alert" role="alert" style="width: 50%; position:  absolute;top: 44%; left: 25%;z-index: 1;">
      <button class="close" data-dismiss="alert"><span>&times;</span></button>
        <strong>¡Correcto! </strong>{{ ($msj) }}
    </div>
  @endif

  @if (session()->has('msj'))
    <div class="alert alert-success" role="alert" style="width: 50%; position:  relative;text-align: center; left: 25%;">
        <button class="close" data-dismiss="alert"><span>&times;</span></button>
        <strong>¡Correcto! </strong>{{ session('msj') }}
    </div>
    @endif
 <section style="width: 100%; max-width: 100%; height:100%;max-height: 100%; background: #FFFFFF">

        <div class="card-header text-center" style="font-size:200%;width: 50%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 52.5%; left: 25%;" >Materias

           </div> <div style="position: absolute;top: 62%; left: 25%; width: 50%; background-color:#aaa">
            
            <br><center>
               <?php
            
            foreach ($materias as $materia) {

               
                ?>

                {!! Form::open(['route'=>['EvaluacionConducta.store'],'GET'=>'UPDATE','files'=>false]) !!} 
              {{ csrf_field() }}
                
                 <input type="submit" name="boton" class="btn btn-primary" value="{{$materia->Clave_M}}>{{$materia->Nombre}}>{{$materia->Semestre}}>{{$materia->Grupo}}"><br><br>
                  <input type="input" name="caja" value="{{$usua}}" hidden="true">

                 {!! Form::close() !!}
                <?php
              }  
          ?>
       
              </center>
              
              </div>
            </section>
          </body>
          </html>
