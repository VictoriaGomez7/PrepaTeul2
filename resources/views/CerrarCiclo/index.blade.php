@extends('layouts.app')

@section('title','Reinscripción Alumno')
 @include('ControlEscolar.CEprincipal')
@section('content')

<a href="http://127.0.0.1:8000/reinscripcion">
            <button class="btn btn-success" style="position: absolute;top: 80%;left:35%">Cancelar</button></a>
@if (session()->has('msj'))
            <div class="alert alert-success" role="alert" style="width: 90%; position:  absolute; top: 43%; left: 5%;z-index: 1;">
                <button class="close" data-dismiss="alert"><span>&times;</span></button>
                <strong>¡Correcto! </strong>{{ session('msj') }}
            </div>
        @endif
<body>

    
        
        <div class="" style="font-size:200%;width: 90%; height: 9.8%; color: black; position:  absolute;top: 52%; left: 5%;" >{{ __('Antes de dar clic en Cerrar Ciclo, debe estar completamente seguro de realizar dicha acción') }}</div> <!-- text-center ES PARA CENTRA EL TEXTO -->

        

            @if($bandera==True)
            {!! Form::open(['route'=>['Cerrar_Semestre.create'],'method'=>'GET','files'=>true]) !!}
            {{--<form method="POST" action="Cerrar_Semestre/create" onsubmit="return confirmation()">--}}
                    @method('PUT')
            @csrf
            <button type="submit" class="btn btn-primary" href="#" style="position: absolute;top: 70%;left:35%">Cerrar Ciclo</button>
            {!! Form::close()!!}
            
            @endif()
            @if($bandera==False)
            <a href="#"style="position: absolute;top: 70%;left:35%">Aún no ha culminado el segundo periodo</a>
            @endif()


{{--@endforeach()--}}

</body>

@endsection()