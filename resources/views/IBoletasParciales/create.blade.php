<!doctype html>

<a href="http://127.0.0.1:8000/ControlEscolarInicio">
            <button class="btn btn-success" style="position: absolute;top: 134%;left:90%">Cancelar</button></a>

@extends('layouts.app')

@section('title','Imprimir Boletas Parciales')

@include('ControlEscolar.CEprincipal')

<body>
    <style type="text/css">
            .SemestreSeleccionado{
                cursor: pointer;}
    </style>

    @section('frameBoletasParciales')
    

        @if (session()->has('msj'))
            <div class="alert alert-success" role="alert" style="width: 90%; position:  absolute; top: 43%; left: 5%;z-index: 1;">
                <button class="close" data-dismiss="alert"><span>&times;</span></button>
                <strong>¡Correcto! </strong>{{ session('msj') }}
            </div>
        @endif

        @if (session()->has('msjE'))
            <div class="alert alert-danger" role="alert" style="width: 90%; position:  absolute; top: 43%; left: 5%;z-index: 1;">
                <button class="close" data-dismiss="alert"><span>&times;</span></button>
                <strong>Error! </strong>{{ session('msjE') }}
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


    <div class="card-header text-center" style="font-size:200%;width: 20%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 52%; left: 5%;" >{{ __('Semestre') }}</div>
    <section style="background: #aaa; width:20%; height: 42%; position: absolute; top: 62%; left: 5%; overflow-y: scroll; text-align:  center;">
    
        @if($Sem_Activado==1)
            {!!Form::open(['route' => ['ImprimeBoletasParciales.store'],'method'=>'POST'])!!}
                <input type="submit" value="SEGUNDO SEMESTRE" name="SemestreSelect" class="SemestreSeleccionado" style="background-color: #85C1E9; border: 2px solid #0000000; width: 200px;height: 40px; margin: 5px;" readonly>
                <input type="submit" value="CUARTO SEMESTRE" name="SemestreSelect" class="SemestreSeleccionado" style="background-color: #85C1E9; border: 2px solid #0000000; width: 200px;height: 40px; margin: 5px;" readonly>
                <input type="submit" value="SEXTO SEMESTRE" name="SemestreSelect" class="SemestreSeleccionado" style="background-color: #85C1E9; border: 2px solid #0000000; width: 200px;height: 40px; margin: 5px;" readonly>
            {!! Form::Close() !!}
        @elseif($Sem_Activado==2)
            {!!Form::open(['route' => ['ImprimeBoletasParciales.store'],'method'=>'POST'])!!}
                <input type="submit" value="PRIMER SEMESTRE" name="SemestreSelect" class="SemestreSeleccionado" style="background-color: #85C1E9; border: 2px solid #0000000; width: 200px;height: 40px; margin: 5px;" readonly>
                <input type="submit" value="TERCER SEMESTRE" name="SemestreSelect" class="SemestreSeleccionado" style="background-color: #85C1E9; border: 2px solid #0000000; width: 200px;height: 40px; margin: 5px;" readonly>
                <input type="submit" value="QUINTO SEMESTRE" name="SemestreSelect" class="SemestreSeleccionado" style="background-color: #85C1E9; border: 2px solid #0000000; width: 200px;height: 40px; margin: 5px;" readonly>
            {!! Form::Close() !!}
        @endif

    </section>
    
    @if($visibility==1)
        <div class="card-header text-center" style="font-size:200%;width: 69%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 52%; left: 26%;" >{{ ($Semestre_Seleccionado)}}</div>

        {!!Form::open(['route' => ['ImprimeBoletasParciales.create'],'method'=>'get'])!!}
            <input type="hidden" value="{{$Sem_Activado}}" name="Semestre" >
            <input type="hidden" value="{{$Semestre_Seleccionado}}" name="SemestreSelect" >

            <div class="card-header text-center" style="font-size:100%;width: 70%; height:70%; background: white; overflow-y: scroll; color: rgb(212, 172, 13); position:  absolute;top: 62%; left: 25%;" >
                <table  id="alumn" class="table" style="width: 100%">
                    <tr style="font-size:120%; color: rgb(212, 172, 13)">
                        <td align="left">{{ ('No.') }}</th>
                        <td align="left">{{ ('Matrícula') }}</th>
                        <td align="left">{{ ('Alumno') }}</th>
                        <td align="left">{{ ('Generar') }}</th>
                    </tr>
                    <tr style="font-size:120%" >
                        <td align="center" style="background:#F0F8FF; color: rgb(0, 128, 0)" colspan="4">{{ ('Grupo A') }}</th>
                    </tr>

                    <?php $contador_A=0;?>
                    @foreach($Matriculas_Alumnos_Grupo_A as $Alumnos_Grupo_A)
                      <tr style="color: rgb(0, 0, 0)">
                        <td >{{ $contador_A+1 }}</td>
                        <td >{{ $Alumnos_Grupo_A }}</td>
                        <td >{{ $Nombres_Alumnos_Grupo_A[$contador_A]}}</td>
                        <td><input type="checkbox" id="checkbox_A" name="checkbox_A[]" value="{{ ($Alumnos_Grupo_A) }}"></td>
                      </tr>
                    <?php $contador_A+=1;?>
                    @endforeach

                    <tr style="font-size:120%">
                        <td align="center" style="background:#F0F8FF; color: rgb(0, 128, 0)" colspan="4">{{ ('Grupo B') }}</th>
                    </tr>
                    <?php $contador_B=0;?>
                    @foreach($Matriculas_Alumnos_Grupo_B as $Alumnos_Grupo_B)
                      <tr style="color: rgb(0, 0, 0)">
                        <td >{{ $contador_B+1 }}</td>
                        <td >{{ $Alumnos_Grupo_B }}</td>
                        <td >{{ $Nombres_Alumnos_Grupo_B[$contador_B]}}</td>
                        <td><input type="checkbox" id="checkbox_B" name="checkbox_B[]" value="{{ ($Alumnos_Grupo_B) }}"></td>
                      </tr>
                    <?php $contador_B+=1;?>
                    @endforeach
                </table>
            </div>

            <button type="submit" class="btn btn-primary" style="position: absolute;top: 134%;left:75%">Generar</button>

        {!! Form::Close() !!}
        
    @elseif($visibility==2)
        <div class="card-header text-center" style="font-size:135%;width: 30%; height:15%; background: #FFFFFF; color: rgb(26, 35, 126); position:  absolute;top: 70%; left: 45%;" >{{ __(' ') }}</div>
    @else
        <div class="card-header text-center" style="font-size:200%;width: 69%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 52%; left: 26%;" >{{ __(ep)}}</div>
        <div class="card-header text-center" style="font-size:135%;width: 30%; height:15%; background: #839192; color: rgb(26, 35, 126); position:  absolute;top: 70%; left: 45%;" >{{ __('No hay alumnos registrados en esta materia.') }}</div>
    @endif
    </div>
</body>
</html>