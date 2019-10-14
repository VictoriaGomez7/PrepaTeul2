@extends('layouts.app')

@section('title','Graficas')

@include('ControlEscolar.CEprincipal')
@section('content')
<!DOCTYPE html>
<html>
<body>
	<div class="card-header text-center" style="font-size:200%;width: 90%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 45%; left: 5%;" >{{ __('Gráficas') }}</div>

	<h2></h2>
	<p></p>
	<div style="position: absolute;top: 55%; left: 5%; width: 90%;height:7%;background-color:#aaa">
	    <p><a type="submit" target="frame1" href="http://127.0.0.1:8000/E_Genero" style="background-color: #3cb371;color: white;width:80px;height:31px ;text-align: center;font-size: 17px;margin: 4px 2px;cursor: pointer;position: absolute;top: 5%; left: 4%;">Género</a></p>
	    <br>
	    <p><a target="frame1" href="http://127.0.0.1:8000/E_Periodo" style="background-color: #3cb371;color: white;width:200px;height:31px ;text-align: center;font-size: 17px;margin: 4px 2px;cursor: pointer;position: absolute;top: 5%; left: 40%;" >Reprobados por periodo</a></p>
	    <br>
	    <p><a target="frame1" href="http://127.0.0.1:8000/E_Semestre" style="background-color: #3cb371;color: white;width:200px;height:31px ;text-align: center;font-size: 17px;margin: 4px 2px;cursor: pointer;position: absolute;top: 5%; left: 80%;">Reprobados por semestre</a></p>
	</div>
	<iframe src="http://127.0.0.1:8000/E_Espera" name="frame1" style="position: absolute;top: 62%; left:5%;border:2px solid gray;height:550px;width:1215px"></iframe>
</body>
</html>
@endsection
{{--Graficas.periodo
value="Graficas.periodo"--}}