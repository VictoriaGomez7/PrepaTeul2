<!DOCTYPE html>
<a href="/DocenteInicios?valor={{ ($usua) }}">
    <button class="btn btn-success" style="position: absolute;top: 105%;left:50%;z-index: 1;">Cancelar</button></a>

@extends('layouts.app')

@section('title','Docente')

{{--@include('interfazprincipal.image')--}}
@include('DocenteInterfazPrincipal.InterfazPrincipal')
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
<body>
 <div class="card-header text-center" style="font-size:200%;width: 90%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 52%; left: 5%;" >{{ __('Asistencias') }}</div> <!-- text-center ES PARA CENTRA EL TEXTO -->
<div style="position: absolute;top: 62%; left: 5%; width: 90%;height:50%; border: 2px solid gray;">
  <b style="position: absolute;top: 2%; left: 13.5%; width: 25%;height:53%;">Materias</b>
              <select name="transporte" size="10" onChange="mostrar(this.value);"style="position: absolute;top: 10%; left: 5%; width: 25%;height:53%;">
              <!--<option value="otro">Seleccione uno</option>-->


               @foreach($CDocente as $doc)
               <?php $new7=$doc->Grupo; ?>
               <?php $new2=$doc->id; ?>
                <option value="<?php echo $new2; ?>">{{$doc->Materia}} {{$doc->Grupo}}</option>
               @endforeach
               </select>

              <script type="text/javascript">
function mostrar(id) {
  @foreach($CDocente as $doc)
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

@foreach($Mat_grup as $materia)
@foreach($CMateria as $mat)
@foreach($CDocente as $doc)
@if( $materia->Clave == $doc->ClaveMateria)

<?php $new4=$doc->ClaveMateria.$doc->Grupo; ?>
<?php $new=$doc->ClaveMateria .'_'. $doc->Grupo .'_'. $usua; ?>
<?php $new5=$new; ?>

<div class="element" id="{{$doc->id}}" style="display: none; position: absolute;top: 5%; left: 35%; width: 60%;height:70%;">
    <table id="alumn" class="table">
      <thead>
        <tr>
          <th  align="center">Clave</th>
          <th  align="center">Materia</th>
          <th  align="center">Tipo</th>
          <th  align="center">Horas</th>
          <th  align="center">Grupo</th>
          <th></th>

        </tr>
      </thead>
        <tbody>
          <tr>

            <form class="form-group" method="GET" action="/Asistencias/<?php echo($new) ?>">
              <td align="center">{{ $mat->Clave }}</td>
              <td align="center">{{ $mat->Nombre}}</td>
              <td align="center">{{ $mat->Tipo}}</td>
              <td align="center">{{ $mat->Horas}}</td>
              <td align="center">{{ $doc->Grupo}}</td>
              <td><button class="btn btn-success">Asistencias</button></td>
            </form>
            {!!Form::open(['route' => ['Asistencias.store','id'=>$new5],'method'=>'POST'])!!}
            <td>{!!Form::submit('Reporte',['class'=>'btn btn-primary'])!!}</td>
            {!! Form::close()!!}
          </tr>
        </tbody>

    </table>



<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script>
$(document).ready(function() {
  $('#alumn').DataTable({
    "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
    }
  });
});
</script>
  </div>

@endif
@endforeach
@endforeach
@endforeach

  </body>
   <!-- vinculando a libreria Jquery-->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <!-- Libreria java scritp de bootstrap -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@endsection
