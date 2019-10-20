@extends('layouts.app')

@section('title','Cerrar Ciclo Escolar')
 @include('ControlEscolar.CEprincipal')
@section('content')

<a href="http://127.0.0.1:8000/ControlEscolarInicio">
            <button class="btn btn-success" style="position: absolute;top: 70%;left:45%">Cancelar</button></a>

<body>

    @if (Session()->has('msj'))
        <div class="alert alert-success" role="alert" style="width: 90%; position:  absolute; top: 43%; left: 5%;z-index: 1;">
        <button class="close" data-dismiss="alert"><span>&times;</span></button>
        <strong>¡Correcto! </strong>{{Session('msj')}}
        </div>
    @endif
    @if (session()->has('msj1'))
        <div class="alert alert-danger" role="alert" style="width: 30%; position:  absolute;top: 43%; left: 35%;z-index: 1;">
        <button type="button" class="close" data-dismiss="alert" >&times;</button>
        <strong>¡Error! </strong>{{session('msj1')}}
        </div>
    @endif
        
        <div class="" style="font-size:200%;width: 75%; height: 9.8%; color: red; position:  absolute;top: 52%; left: 15%;" >{{ __('Antes de dar clic en cerrar ciclo, debe estar completamente seguro de realizar dicha acción.') }}</div> <!-- text-center ES PARA CENTRA EL TEXTO -->

        

            @if($bandera==True)
                {!! Form::open(['route'=>['Cerrar_Semestre.create'],'method'=>'GET','files'=>true]) !!}
                {{--<form method="POST" action="Cerrar_Semestre/create" onsubmit="return confirmation()">--}}
                        @method('PUT')
                @csrf
                <button type="submit" class="btn btn-primary" href="#" style="position: absolute;top: 70%;left:35%">Cerrar Ciclo</button>
                {!! Form::close()!!}
                
            @endif()
            @if($bandera==False)
                <div href="#"style="position: absolute;top: 70%;left:35%">Aún no ha culminado el segundo periodo</div>
            @endif()


{{--@endforeach()--}}

</body>

@endsection()
