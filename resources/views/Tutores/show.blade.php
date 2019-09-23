<!doctype html>

<a href="http://127.0.0.1:8000/ControlEscolarInicio">
            <button class="btn btn-success" style="position: absolute;top: 125%;left:65%">Cancelar</button></a>

@extends('layouts.app')

@section('title','Tutores')

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

        <div class="card-header text-center" style="font-size:200%; width: 50%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 52%; left: 25%;" >{{ __('Tutores') }}</div> <!-- text-center ES PARA CENTRA EL TEXTO -->

            @csrf

            <div style="position: absolute;top: 62%; left: 25%; width: 50%;height:60%; background-color:#aaa">

                <p style="font-size:130%; position:  absolute;top: 5%; left: 10%">{{('Nombre:')}}</p>
                <p style="font-size:130%; position:  absolute;top: 5%; left: 63%">{{('Grado:')}}</p>
                <p style="font-size:130%; position:  absolute;top: 5%; left: 80%">{{('Grupo:')}}</p>



                <p><input type="text" value="{{ $Datos_tabla_tutor[0]->Nombre_D }}" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" id="nombre1" name="nombre1"  style="font-size:105%; width: 50%; position:  absolute;top: 15%; left: 10%"/></p>
                <p><input type="text" value="{{ $Datos_tabla_tutor[0]->Grado }}" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" id="Grado1" name="Grado1" style="font-size:105%; width: 15%; position:  absolute;top: 15%; left: 63%" /></h1>
                <p><input type="text" value="{{ $Datos_tabla_tutor[0]->Grupo }}" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1}" id="Grupo1" name="Grupo2" style="font-size:105%; width: 10%; position:  absolute;top: 15%; left: 80%"/></p>


                <p><input type="text" value="{{ $Datos_tabla_tutor[1]->Nombre_D }}" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" id="nombre2" name="nombre2"  style="font-size:105%; width: 50%; position:  absolute;top: 30%; left: 10%"/></p>
                <p><input type="text" value="{{ $Datos_tabla_tutor[1]->Grado }}" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" id="Grado2" name="Grado2" style="font-size:105%; width: 15%; position:  absolute;top: 30%; left: 63%" /></h1>
                <p><input type="text" value="{{ $Datos_tabla_tutor[1]->Grupo }}" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1}" id="Grupo2" name="Grupo2" style="font-size:105%; width: 10%; position:  absolute;top: 30%; left: 80%"/></p>


                <p><input type="text" value="{{ $Datos_tabla_tutor[2]->Nombre_D }}" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" id="nombre3" name="nombre3"  style="font-size:105%; width: 50%; position:  absolute;top: 45%; left: 10%"/></p>
                <p><input type="text" value="{{ $Datos_tabla_tutor[2]->Grado }}" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" id="Grado3" name="Grado3" style="font-size:105%; width: 15%; position:  absolute;top: 45%; left: 63%" /></h1>
                <p><input type="text" value="{{ $Datos_tabla_tutor[2]->Grupo }}" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1}" id="Grupo3" name="Grupo3" style="font-size:105%; width: 10%; position:  absolute;top: 45%; left: 80%"/></p>


                <p><input type="text" value="{{ $Datos_tabla_tutor[3]->Nombre_D }}" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" id="nombre4" name="nombre4"  style="font-size:105%; width: 50%; position:  absolute;top: 60%; left: 10%"/></p>
                <p><input type="text" value="{{ $Datos_tabla_tutor[3]->Grado }}" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" id="Grado4" name="Grado4" style="font-size:105%; width: 15%; position:  absolute;top: 60%; left: 63%" /></h1>
                <p><input type="text" value="{{ $Datos_tabla_tutor[3]->Grupo }}" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1}" id="Grupo4" name="Grupo4" style="font-size:105%; width: 10%; position:  absolute;top: 60%; left: 80%"/></p>

                <p><input type="text" value="{{ $Datos_tabla_tutor[4]->Nombre_D }}" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" id="nombre5" name="nombre5"  style="font-size:105%; width: 50%; position:  absolute;top: 75%; left: 10%"/></p>
                <p><input type="text" value="{{ $Datos_tabla_tutor[4]->Grado }}" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" id="Grado5" name="Grado5" style="font-size:105%; width: 15%; position:  absolute;top: 75%; left: 63%" /></h1>
                <p><input type="text" value="{{ $Datos_tabla_tutor[4]->Grupo }}" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1}" id="Grupo5" name="Grupo5" style="font-size:105%; width: 10%; position:  absolute;top: 75%; left: 80%"/></p>


                <p><input type="text" value="{{ $Datos_tabla_tutor[5]->Nombre_D }}" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" id="nombre6" name="nombre6"  style="font-size:105%; width: 50%; position:  absolute;top: 90%; left: 10%"/></p>
                <p><input type="text" value="{{ $Datos_tabla_tutor[5]->Grado }}" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" id="Grado6" name="Grado6" style="font-size:105%; width: 15%; position:  absolute;top: 90%; left: 63%" /></h1>
                <p><input type="text" value="{{ $Datos_tabla_tutor[5]->Grupo }}" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1}" id="Grupo6" name="Grupo6" style="font-size:105%; width: 10%; position:  absolute;top: 90%; left: 80%"/></p>
            </div>

</body>


@endsection