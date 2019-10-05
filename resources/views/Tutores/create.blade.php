<!doctype html>

@extends('layouts.app')

@section('title','Registrar Tutores')

@include('ControlEscolar.CEprincipal')

<body>
    @section('frameDocentesTutores')

        @if (session()->has('msj'))
            <div class="alert alert-success" role="alert" style="width: 50%; position:  absolute;top: 43%; left: 25%;z-index: 1;">
                <button class="close" data-dismiss="alert"><span>&times;</span></button>
                <strong>¡Correcto! </strong>{{ session('msj') }}
            </div>
        @endif

        @if (session()->has('msjError'))
            <div class="alert alert-danger" role="alert" style="width: 50%; position:  absolute;top: 43%; left: 25%;z-index: 1;">
                <button class="close" data-dismiss="alert"><span>&times;</span></button>
                <strong>¡Error! </strong>{{ session('msjError') }}
            </div>
        @endif


        @if($visivility==1)
            <div class="card-header text-center" style="font-size:200%; width: 50%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 52%; left: 25%;" >{{ __('Registrar Tutores') }}</div> <!-- text-center ES PARA CENTRA EL TEXTO -->

            {!!Form::open(['route' => ['RegistrarTutores.store'],'method'=>'POST'])!!}

                @csrf

                <div style="position: absolute;top: 62%; left: 25%; width: 50%;height:70%; background-color:#aaa">

                    <p style="font-size:150%; position:  absolute;top: 5%; left: 30%">{{('Generación: ').($Generacion)}}</p>
                    <p style="font-size:130%; position:  absolute;top: 15%; left: 10%">{{('Nombre:')}}</p>
                    <p style="font-size:130%; position:  absolute;top: 15%; left: 63%">{{('Grado:')}}</p>
                    <p style="font-size:130%; position:  absolute;top: 15%; left: 80%">{{('Grupo:')}}</p>

                    <input hidden value="{{($Generacion)}}" id="Generacion" name="Generacion"/>
                    <input hidden value="{{($Generacion2)}}" id="Generacion2" name="Generacion2"/>
                    <input hidden value="{{($Generacion3)}}" id="Generacion3" name="Generacion3"/>
                    <input hidden value="{{($visivility)}}" id="visivility" name="visivility"/>


                    <p><select name="nombre1" required style="font-size:105%; width: 50%; position:  absolute;top: 25%; left: 10%">
                            @foreach($Datos_tabla_Docentes as $Docentes)
                                <option value="{{ ($Docentes->Nombre) }}">{{ $Docentes->Nombre }}</option>
                            @endforeach
                    </select></p>

                    <p><input type="text" value="PRIMERO" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" id="Grado1" name="Grado1" style="font-size:105%; width: 15%; position:  absolute;top: 25%; left: 63%" /></h1>
                    <p><input type="text" value="A" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1}" id="Grupo1" name="Grupo2" style="font-size:105%; width: 10%; position:  absolute;top: 25%; left: 80%"/></p>

                    <p><select name="nombre2" required style="font-size:105%; width: 50%; position:  absolute;top: 33%; left: 10%">
                            @foreach($Datos_tabla_Docentes as $Docentes)
                                <option value="{{ ($Docentes->Nombre) }}">{{ $Docentes->Nombre }}</option>
                            @endforeach
                    </select></p>
                    <p><input type="text" value="PRIMERO" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" id="Grado2" name="Grado2" style="font-size:105%; width: 15%; position:  absolute;top: 33%; left: 63%" /></h1>
                    <p><input type="text" value="B" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1}" id="Grupo2" name="Grupo2" style="font-size:105%; width: 10%; position:  absolute;top: 33%; left: 80%"/></p>

                    <p style="font-size:150%; position:  absolute;top: 43%; left: 30%">{{('Generación: ').($Generacion2)}}</p>

                    <p><select name="nombre3" required style="font-size:105%; width: 50%; position:  absolute;top: 53%; left: 10%">
                            @foreach($Datos_tabla_Docentes as $Docentes)
                                <option value="{{ ($Docentes->Nombre) }}">{{ $Docentes->Nombre }}</option>
                            @endforeach
                    </select></p>
                    <p><input type="text" value="SEGUNDO" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" id="Grado3" name="Grado3" style="font-size:105%; width: 15%; position:  absolute;top: 53%; left: 63%" /></h1>
                    <p><input type="text" value="A" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1}" id="Grupo3" name="Grupo3" style="font-size:105%; width: 10%; position:  absolute;top: 53%; left: 80%"/></p>

                    <p><select name="nombre4" required style="font-size:105%; width: 50%; position:  absolute;top: 61%; left: 10%">
                            @foreach($Datos_tabla_Docentes as $Docentes)
                                <option value="{{ ($Docentes->Nombre) }}">{{ $Docentes->Nombre }}</option>
                            @endforeach
                    </select></p>
                    <p><input type="text" value="SEGUNDO" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" id="Grado4" name="Grado4" style="font-size:105%; width: 15%; position:  absolute;top: 61%; left: 63%" /></h1>
                    <p><input type="text" value="B" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1}" id="Grupo4" name="Grupo4" style="font-size:105%; width: 10%; position:  absolute;top: 61%; left: 80%"/></p>

                    <p style="font-size:150%; position:  absolute;top: 71%; left: 30%">{{('Generación: ').($Generacion3)}}</p>

                    <p><select name="nombre5" required style="font-size:105%; width: 50%; position:  absolute;top: 81%; left: 10%">
                            @foreach($Datos_tabla_Docentes as $Docentes)
                                <option value="{{ ($Docentes->Nombre) }}">{{ $Docentes->Nombre }}</option>
                            @endforeach
                    </select></p>
                    <p><input type="text" value="TERCERO" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" id="Grado5" name="Grado5" style="font-size:105%; width: 15%; position:  absolute;top: 81%; left: 63%" /></h1>
                    <p><input type="text" value="A" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1}" id="Grupo5" name="Grupo5" style="font-size:105%; width: 10%; position:  absolute;top: 81%; left: 80%"/></p>

                    <p><select name="nombre6" required style="font-size:105%; width: 50%; position:  absolute;top: 90%; left: 10%">
                            @foreach($Datos_tabla_Docentes as $Docentes)
                                <option value="{{ ($Docentes->Nombre) }}">{{ $Docentes->Nombre }}</option>
                            @endforeach
                    </select></p>
                    <p><input type="text" value="TERCERO" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" id="Grado6" name="Grado6" style="font-size:105%; width: 15%; position:  absolute;top: 90%; left: 63%" /></h1>
                    <p><input type="text" value="B" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1}" id="Grupo6" name="Grupo6" style="font-size:105%; width: 10%; position:  absolute;top: 90%; left: 80%"/></p>
                </div>

               <button type="submit" class="btn btn-primary" style="position: absolute;top: 135%;left:55%">Guardar</button>
               <a href="http://127.0.0.1:8000/ControlEscolarInicio">
            <button class="btn btn-success" style="position: absolute;top: 135%;left:65%">Cancelar</button></a>
        @elseif($visivility==2)
            <div class="card-header text-center" style="font-size:200%; width: 35%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 52%; left: 5%;" >{{ ('Tutores') }}</div>

                <div style="position: absolute;top: 62%; left: 5%; width: 35%;height:65%; background-color:#aaa">

                    <TABLE id="Tutores" class="table" style="width: 95%; height: 90%; position: absolute;left: 2%">
                        <tr style="font-size:150%; color: rgb(0, 128, 0)">
                            <td align="left">{{ ('Docente') }}</td>
                            <td align="left">{{ ('Grado y Grupo') }}</td>
                        </tr>
                        <?php $cont=0 ?>
                        @foreach($Datos_tabla_tutor as $Tutor)
                            @if ($cont==0 or $cont==2 or $cont==4)
                                <tr>
                                    <td style="font-size:130%" colspan="2" align="center">{{ ('Generación ').($Tutor->Generacion) }}</td>
                                </tr>
                            @endif
                            <tr style="color: rgb(0, 0, 0)">
                                <td align="left">{{ ($Tutor->Nombre_D) }}</td>
                                <td align="left">{{ ($Tutor->Grado.' '.$Tutor->Grupo) }}</td>
                            </tr>
                            <?php $cont+=1; ?>
                        @endforeach
                    </TABLE>
                </div>

            </div>

            <div class="card-header text-center" style="font-size:200%; width: 50%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 52%; left: 45%;" >{{ __('Registrar Tutores') }}</div> <!-- text-center ES PARA CENTRA EL TEXTO -->

            {!!Form::open(['route' => ['RegistrarTutores.store'],'method'=>'POST'])!!}

                @csrf

                <div style="position: absolute;top: 62%; left: 45%; width: 50%;height:65%; background-color:#aaa">

                    <p style="font-size:150%; position:  absolute;top: 5%; left: 30%">{{('Generación: ').($Generacion)}}</p>
                    <p style="font-size:130%; position:  absolute;top: 20%; left: 10%">{{('Nombre:')}}</p>
                    <p style="font-size:130%; position:  absolute;top: 20%; left: 63%">{{('Grado:')}}</p>
                    <p style="font-size:130%; position:  absolute;top: 20%; left: 80%">{{('Grupo:')}}</p>

                    <input hidden value="{{($Generacion)}}" id="Generacion" name="Generacion" style="font-size:105%; width: 15%; position:  absolute;top: 30%; left: 63%" />

                    <input hidden value="{{($visivility)}}" id="visivility" name="visivility" style="font-size:105%; width: 15%; position:  absolute;top: 30%; left: 63%" />


                    <p><select name="nombre1" required style="font-size:105%; width: 50%; position:  absolute;top: 30%; left: 10%">
                            @foreach($Datos_tabla_Docentes_1 as $Docentes)
                                <option value="{{ ($Docentes->Nombre) }}">{{ $Docentes->Nombre }}</option>
                            @endforeach
                    </select></p>

                    <p><input type="text" value="PRIMERO" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" id="Grado1" name="Grado1" style="font-size:105%; width: 15%; position:  absolute;top: 30%; left: 63%" /></h1>
                    <p><input type="text" value="A" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1}" id="Grupo1" name="Grupo2" style="font-size:105%; width: 10%; position:  absolute;top: 30%; left: 80%"/></p>

                    <p><select name="nombre2" required style="font-size:105%; width: 50%; position:  absolute;top: 40%; left: 10%">
                            @foreach($Datos_tabla_Docentes_1 as $Docentes)
                                <option value="{{ ($Docentes->Nombre) }}">{{ $Docentes->Nombre }}</option>
                            @endforeach
                    </select></p>
                    <p><input type="text" value="PRIMERO" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" id="Grado2" name="Grado2" style="font-size:105%; width: 15%; position:  absolute;top: 40%; left: 63%" /></h1>
                    <p><input type="text" value="B" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1}" id="Grupo2" name="Grupo2" style="font-size:105%; width: 10%; position:  absolute;top: 40%; left: 80%"/></p>
                </div>

               <button type="submit" class="btn btn-primary" style="position: absolute;top: 130%;left:75%">Guardar</button>

               <a href="http://127.0.0.1:8000/ControlEscolarInicio">
            <button class="btn btn-success" style="position: absolute;top: 130%;left:85%">Cancelar</button></a>

        @elseif($visivility==3)
            <div class="card-header text-center" style="font-size:200%; width: 50%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 52%; left: 25%;" >{{ ('Tutores') }}</div>

                <div style="position: absolute;top: 62%; left: 25%; width: 50%;height:80%; background-color:#aaa">

                    <TABLE id="Tutores" class="table" style="width: 95%; position: absolute;left: 2%">
                        <tr style="font-size:140%; color: rgb(0, 128, 0)">
                            <td align="center">{{ ('Docente') }}</td>
                            <td align="center">{{ ('Grado y Grupo') }}</td>
                        </tr>
                        <?php $cont=0 ?>
                        @foreach($Datos_tabla_tutor as $Tutor)
                            @if ($cont==0 or $cont==2 or $cont==4)
                                <tr>
                                    <td style="font-size:120%" colspan="2" align="center">{{ ('Generación ').($Tutor->Generacion) }}</td>
                                </tr>
                            @endif
                            <tr style="color: rgb(0, 0, 0)">
                                <td align="center">{{ ($Tutor->Nombre_D) }}</td>
                                <td align="center">{{ ($Tutor->Grado.' '.$Tutor->Grupo) }}</td>
                            </tr>
                            <?php $cont+=1;?>
                        @endforeach
                    </TABLE>
                </div>

            </div>

            <a href="http://127.0.0.1:8000/ControlEscolarInicio">
            <button class="btn btn-success" style="position: absolute;top: 145%;left:65%">Cancelar</button></a>
                
        @endif
</body>


@endsection