<!doctype html>

<a href="http://127.0.0.1:8000/ControlEscolarInicio">
            <button class="btn btn-success" style="position: absolute;top: 130%;left:75%">Cancelar</button></a>

@extends('layouts.app')

@section('title','Imprimir Boletas Parciales')

@include('ControlEscolar.CEprincipal')

<body>
    @section('frameBoletasParciales')
    

        @if (session()->has('msj'))
            <div class="alert alert-success" role="alert" style="width: 90%; position:  absolute; top: 43%; left: 5%;z-index: 1;">
                <button class="close" data-dismiss="alert"><span>&times;</span></button>
                <strong>¡Correcto! </strong>{{ session('msj') }}
            </div>
        @endif

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert" style="width: 50%; position:  absolute;top: 43%; left: 25%;z-index: 1;">
                        <button class="close" data-dismiss="alert"><span>&times;</span></button>
                        <strong>¡Error! </strong>{{ $error }}
                </div>
            @endforeach
        @endif



        <div class="card-header text-center" style="font-size:200%;width: 90%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 52%; left: 5%;" >{{ __('Imprimir Boletas Parciales') }}</div>

        <div style="position: absolute;top: 62%; left: 5%; width: 90%;height:53%; background-color:#aaa">
                <p style="font-size:130%">{{('Matrícula:')}}</p>
                <p style="font-size:130%">{{('Nombre del alumno:')}}</p>
                <p style="font-size:130%">{{('Nombre de la madre:')}}</p>
                <p style="font-size:130%">{{('Nombre del padre:')}}</p>
                <p style="font-size:130%">{{('Teléfono del tutor:')}}</p>
                <p style="font-size:130%">{{('Teléfono del alumno:')}}</p>
                <p style="font-size:130%">{{('Domicilio:')}}</p>
        </div>
</body>
@endsection