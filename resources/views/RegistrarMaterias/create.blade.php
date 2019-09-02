<!DOCTYPE html>
<a href="ControlEscolarInicio">
            <button class="btn btn-success" style="position: absolute;top: 115%;left:65%">Cancelar</button></a>

@extends('layouts.app')

@section('title','Registrar Materias')

@include('ControlEscolar.CEprincipal')

<body>
    @section('frameMaterias')
    <script type="text/javascript">
           function habilitar(valor){
            if (valor=="Formación Propedéutica"){
                document.getElementById("bachillerato").disabled = false;
            }else{

                document.getElementById("bachillerato").disabled = true;
            }
           }
    </script>


        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert" style="width: 50%; position:  absolute;top: 43%; left: 25%;z-index: 1;">
                        <button class="close" data-dismiss="alert"><span>&times;</span></button>
                        <strong>¡Error! </strong>{{ $error }}
                </div>
            @endforeach
        @endif

        @if (session()->has('msj'))
            <div class="alert alert-success" role="alert" style="width: 50%; position:  absolute;top: 43%; left: 25%;z-index: 1;">
                <button class="close" data-dismiss="alert"><span>&times;</span></button>
                <strong>¡Correcto! </strong>{{ session('msj') }}
            </div>
        @endif

        @if (session()->has('msjERROR'))
            <div class="alert alert-danger" role="alert" style="width: 50%; position:  absolute;top: 43%; left: 25%;z-index: 1;">
                <button class="close" data-dismiss="alert"><span>&times;</span></button>
                <strong>¡Error! </strong>{{ session('msjERROR') }}
            </div>
        @endif


        <div class="card-header text-center" style="font-size:200%;width: 50%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 52%; left: 25%;" >{{ __('Registrar Materias') }}</div> <!-- text-center ES PARA CENTRA EL TEXTO -->
         {!!Form::open(['route' => ['materia.create'],'method'=>'GET'])!!}
        {{--<form type="session" class="form-group" method="POST" action="/RegistrarMaterias">--}}

            @csrf

            <div style="position: absolute;top: 62%; left: 25%; width: 50%;height:50%; background-color:#aaa">

                <p style="font-size:130%; position:  absolute;top: 10%; left: 5%">{{('Nombre:')}}</p>
                <p style="font-size:130%; position:  absolute;top: 25%; left: 5%">{{('Tipo:')}}</p>
                <p style="font-size:130%; position:  absolute;top: 38%; left: 5%">{{('Área')}}</p>
                <p style="font-size:130%; position:  absolute;top: 44%; left: 5%">{{('Propedéutica:')}}</p>
                <p style="font-size:130%; position:  absolute;top: 57%; left: 5%">{{('Semestre:')}}</p>
                <p style="font-size:130%; position:  absolute;top: 72%; left: 5%">{{('Horas:')}}</p>

                <p><input type="text" placeholder="Matemáticas I" value="{{ old('nombre') }}" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" id="nombre" name="nombre" style="font-size:105%; width:65%; position:  absolute;top: 10%; left: 30%"/></p>

                <select name="tipo" di="tipo" required style="font-size:110%;width: 65%; position:  absolute;top: 25%; left: 30%" onchange="habilitar(this.value)">
                            <option value="{{ old('tipo') }}">{{ old('tipo') }}</option>
                            <option value="Formación Propedéutica">Formación Propedéutica</option>
                            <option value="Formación Para El Trabajo">Formación Para El Trabajo</option>
                            <option value="Actividades Paraescolares">Actividades Paraescolares</option>
                            <option value="Formación Básica" selected>Formación Básica</option>
                      </select>
                <select name="bachillerato" id="bachillerato" required style="font-size:110%;width: 65%; position:  absolute;top: 42%; left: 30%" disabled="true">
                            <option value="{{ old('tipo') }}">{{ old('tipo') }}</option>
                            <option value="Químico Biológica">Químico-Biológica</option>
                            <option value="Físico Matemática">Físico-Matemática</option>
                            <option value="Humanidades y Ciencias Sociales">Humanidades y Ciencias Sociales</option>
                            <option value="Económico Administrativa">Económico-Administrativa</option>
                      </select>

                <select name="semestre" required style="font-size:110%;width: 65%;;position: absolute;top:59%; left:30%;">
                            <option value="{{ old('semestre') }}">{{ old('semestre') }}</option>
                            <option value="PRIMER SEMESTRE" selected>PRIMER SEMESTRE</option>
                            <option value="SEGUNDO SEMESTRE">SEGUNDO SEMESTRE</option>
                            <option value="TERCER SEMESTRE">TERCER SEMESTRE</option>
                            <option value="CUARTO SEMESTRE">CUARTO SEMESTRE</option>
                            <option value="QUINTO SEMESTRE">QUINTO SEMESTRE</option>
                            <option value="SEXTO SEMESTRE">SEXTO SEMESTRE</option>
                      </select>
                <p><input type="number" placeholder="1" value="{{ old('horas') }}" required min="1" max="12" id="horas" name="horas" style="font-size:105%; width: 65%; position:  absolute;top: 74%; left: 30%"/></p>


            </div>


        {!!Form::submit('Registrar',['class'=>'btn btn-primary', 'style'=>'position: absolute;top: 115%;left:55%'])!!}
        {!! Form::close()!!}
</body>


@endsection