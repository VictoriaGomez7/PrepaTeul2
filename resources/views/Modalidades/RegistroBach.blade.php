
{{--<a href="interfazprinci">
    <button class="btn btn-success" style="position: absolute;top: 110%;left:5%">Atras</button></a>--}}
@include('ControlEscolar.CEprincipal')
@extends('layouts.app')

@section('title','Docente')

{{--@include('interfazprincipal.image')--}}

@section('content')

  @if (session()->has('msj'))
    <div class="alert alert-warning" role="alert" style="width: 50%; position:  absolute;top: 43%; left: 25%;z-index: 1;">
      <button class="close" data-dismiss="alert"><span>&times;</span></button>
      <strong>¡Incorrecto! </strong>{{ session('msj') }}
    </div>
  @endif
  @if (session()->has('msj1'))
    <div class="alert alert-success" role="alert" style="width: 50%; position:  absolute;top: 43%; left: 25%;z-index: 1;">
      <button class="close" data-dismiss="alert"><span>&times;</span></button>
      <strong>¡Correcto! </strong>{{ session('msj1') }}
    </div>
  @endif

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <!-- vinculo a bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


</head>

<body>

  <div class="card-header text-center" style="font-size:200%;width: 50%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 52%; left: 25%;" >{{ __('Registro de bachilleratos') }}</div> <!-- text-center ES PARA CENTRA EL TEXTO -->
    <div style="position: absolute;top: 62%; left: 25%; width: 50%;height:40%; background-color:#aaa">
{!! Form::open(['route'=>'Bachillerato.create','method'=>'GET'])!!}

            @csrf
      <label style="font-size:150%;position: absolute;top: 5%; left: 15%; width: 30%;height:65%;">Nombre:</label>
  <input 
   id="Nombre_B" name="Nombre_B" required="true" style="font-size:150%;position: absolute;top: 5%; left: 30%; width: 30%;"
    />


    <button class="btn btn-success" style="font-size:100%;position: absolute;top: 5%; left: 63%;">Guardar</button>
{!! Form::close()!!}
  <select name="periodo" id="periodo" size="10" onChange="mostrar(this.value);" style="font-size:150%;position: absolute;top: 30%; left: 5%; width: 30%;height:65%;">
<!--<option value="ningun" >Seleccione un periodo</option>-->
@foreach($bach as $doc)
    <option value="{{$doc->id}}">{{$doc->Nombre_B}}</option>

    
    @endforeach
    </select>

<script type="text/javascript">
function mostrar(id) {
  @foreach($bach as $doc)
  <?php $new1=$doc->id; ?>
  if (id == "<?php echo $new1; ?>") {
    $("#<?php echo $new1; ?>").show();


  }
  if (id != "<?php echo $new1; ?>") {
    $("#<?php echo $new1; ?>").hide();
  }
  @endforeach

}
</script>
  


@foreach($bach as $doc)

<div class="element" id="{{$doc->id}}" style="display: none; position: absolute;top: 30%; left: 40%; width: 60%;height:70%;">
<form class="form-group" method="GET" action="/Bachillerato/{{$doc->id}}/edit">
            @csrf


  <label style="font-size:130%; position: absolute;top: 10%; left: -6%;">Nombre:</label>
  <input 
   id="Nombre_B" name="Nombre_B" required="true" value="{{$doc->Nombre_B}}" style="font-size:130%; position: absolute;top: 10%; left: 15%;"
    />
    <input name='id' value='{{$doc->id}} 'style="visibility:hidden;"></input>
<button class="btn btn-primary" style="position: absolute;top: 30%; left: 20%;">Modificar</button>

</form>

{!!Form::open(['route' => ['Bachillerato.destroy',$doc->Nombre_B],'method'=>'DELETE'])!!}
    {!!Form::submit('Eliminar',['class'=>'btn btn-danger','style'=>'position: absolute;top: 30%; left: 45%;'])!!}
    {!! Form::close()!!}

  </div>
@endforeach


</div>







</div>



  </body>
   <!-- vinculando a libreria Jquery-->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <!-- Libreria java scritp de bootstrap -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@endsection