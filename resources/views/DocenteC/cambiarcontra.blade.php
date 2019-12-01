@extends('layouts.app')
@include('DocenteInterfazPrincipal.InterfazPrincipal')
@section('content')

<a href="/DocenteInicio?valor={{ ($usua)}}">
  <button class="btn btn-success" style="position: absolute;top: 100%;left:75%">Cancelar</button></a>
<html>
<head>
</head>

<style>
/*Al cuerpo de la
pagina se aplica el tamaño de fuente
 */
body{
  font-size: 12px;
}
/**
 * se aplica el ancho, margen centrado
 * borde de un pixel con redondeado, y rellenado
 * a la izquierda y derecha
 */
#Contenedor{
  width: 400px;
  margin: 50px auto;
  background-color: #EEF0F3;
        border: 1px solid #C9D0D9;
  height: 170px;
  border-radius:8px;
  padding: 0px 9px 0px 9px;
}

/**
 * Aplicando al icono de usuario el color de fondo,
 * rellenado de 20px y un redondeado de 120px en forma
 * de un circulo
 */

/**
 * Se aplica al contenedor madre un margen de tamaño 10px hacia la cabecera y pie,
 * color de fuente blanco,un tamaño de fuente 50px y texto centrado.
 */

/**
 * Se aplica al contenedor donde muestra en el pie
 * la opción de olvidaste tu contraseña?
 */
.opcioncontra{
  text-align: center;
  margin-top: 20px;
  font-size: 14px;
}

/**
 * En las siguientes lineas
 * se define el diseño adaptable, para que
 * se muestre en los dispositivos móviles
 */

/******************************************/
/***    DISEÑO PARA MOVILES 320        ****/
/******************************************/
@media only screen and (max-width:320px){
#Contenedor{
  width: 100%;
  height: auto;
  margin: 0px;
}

/******************************************/
/***    DISEÑO PARA MOVILES 240        ****/
/******************************************/
@media only screen and (max-width:240px){

}


</style>

<body>

  {!!Form::open(['route' => ['Modificarcontra.store',],'method'=>'POST'])!!}

  <div style="position: absolute;top: 60%; left: 40%; width: 20%;height:30%;background-color:#aaa">
      <p style="font-size:130%">{{('Contraseña nueva: ')}}</p>
      <div style="position: absolute;top: 50%; left: 24.9%; width: 50%;height:40%;background-color:#aaa">
          <p><input type="text" required  id="contra" name="contra" style="font-size:105%; width: 95%"/></p>
          <input id="clave" name="clave" type="hidden" value={{$usua}}>
      </div>
  </div>
    <button type="submit" class="btn btn-primary" style="position: absolute;top:100%;left:65%">Modificar</button>



{!! Form::close()!!}
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <!-- Libreria java scritp de bootstrap -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</html>
@endsection()
