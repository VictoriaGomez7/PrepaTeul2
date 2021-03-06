<!doctype html>

<a href="http://127.0.0.1:8000/ControlEscolarInicio">
    <button class="btn btn-success" style="position: absolute;top: 218%;left:75%">Cancelar</button></a>

<script type="text/javascript">
    var Grado = function(x)
    {
        document.getElementById('grado').value=x;
    }

    var semes = function(x){
        document.getElementById('semestree').value=x;
    }
</script>

@extends('layouts.app')

@section('title','Inscripción Alumnos')

@include('ControlEscolar.CEprincipal')

<body>
    @section('frameTitulo')
    <script type="text/javascript">
       function habilitar(valor){
        if (valor=="SEGUNDO"){
            document.getElementById("ft1").disabled = false;
        }else{

            document.getElementById("ft1").disabled = true;
        }
       }

       function habilitar2(valor){
        if (valor=="TERCER"){
            document.getElementById("bach1").disabled = false;
        }else{

            document.getElementById("bach1").disabled = true;
        }
       }
        function ObtenerEdad(fecha){
            var hoy = new Date();
            var cumpleanos = new Date(fecha);
            var edad_o = hoy.getFullYear() - cumpleanos.getFullYear();
            var m = hoy.getMonth() - cumpleanos.getMonth();

            if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
                edad_o--;
            }

            document.getElementById("edad").value=edad_o;
        }
            
    </script>

        @if (session()->has('msj'))
            <div class="alert alert-success" role="alert" style="width: 90%; position:  absolute; top: 44%; left: 5%;z-index: 1;">
                <button class="close" data-dismiss="alert"><span>&times;</span></button>
                <strong>¡Correcto! </strong>{{ session('msj') }}
            </div>
        @endif

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert" style="width: 50%; position:  absolute;top: 44%; left: 25%;z-index: 1;">
                        <button class="close" data-dismiss="alert"><span>&times;</span></button>
                        <strong>¡Error! </strong>{{ $error }}
                </div>
            @endforeach
        @endif



        <div class="card-header text-center" style="font-size:200%;width: 90%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 52%; left: 5%;" >{{ __('SOLICITUD DE INSCRIPCIÓN') }}</div> <!-- text-center ES PARA CENTRA EL TEXTO -->


        <!--<form class="form-group" method="POST" action="/Inscripcion">-->
            {!! Form::open(['route'=>'Alumnos.store','method'=>'POST'])!!}

            @csrf

            <div style="font-size:95%;position: absolute;top: 62%; left: 5%; width: 20%;height:60%; background-color:#aaa">
                <p style="font-size:130%">{{('Matrícula:')}}</p>
                <p style="font-size:130%">{{('Nombre del alumno:')}}</p>
                <p style="font-size:130%">{{('Apellido paterno:')}}</p>
                <p style="font-size:130%">{{('Apellido materno:')}}</p>
                <p style="font-size:130%">{{('Nombre de la madre:')}}</p>
                <p style="font-size:130%">{{('Nombre del padre:')}}</p>
                <p style="font-size:130%">{{('Teléfono del tutor:')}}</p>
                <p style="font-size:130%">{{('Teléfono del alumno:')}}</p>

            </div>

            <div style="position: absolute;top: 62%; left: 25%; width: 26%;height:60%;  background-color:#aaa">
                <p><input type="text" placeholder="1800110001" value="{{ old('Clave_A') }}" required pattern="[1-9]{2}[0]{2}[1]{2}[0-9]{4}" id="id" name="matricula" style="font-size:105%; width: 95%"/></p>
                <p><input type="text" placeholder="Karla Ximena" value="{{ old('nombre') }}" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" id="nombre" name="nombre" style="font-size:105%; width: 95%;" /></h1>
                <p><input type="text" placeholder="Velazquez" value="{{ old('ApellidoP') }}" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" id="ApellidoP" name="ApellidoP" style="font-size:105%; width: 95%;" /></h1>
                <p><input type="text" placeholder="Torres" value="{{ old('ApellidoM') }}" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" id="ApellidoM" name="ApellidoM" style="font-size:105%; width: 95%;" /></h1>
                <p><input type="text" placeholder="Torres Cortes Maria" value="{{ old('nombremadre') }}" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" id="nombremadre" name="nombremadre" style="font-size:105%; width: 95%;"/></p>
                <p><input type="text" placeholder="Velazquez Luna Abel" value="{{ old('nombrepadre') }}" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" id="nombrepadre" name="nombrepadre" style="font-size:105%; width: 95%;"/></p>
                <p><input type="tel" placeholder="4671001421" value="{{ old('telefonotutor') }}" required pattern="[0-9]{10}" id="telefonotutor" name="telefonotutor" style="font-size:105%; width: 95%;"/></p>
                <p><input type="tel" placeholder="4671082547" value="{{ old('telefonoalumno') }}" required pattern="[0-9]{10}" id="telefonoalumno" name="telefonoalumno" style="font-size:105%; width:95%"/></p>
            </div>

            <div style="font-size:95%;position: absolute;top: 62%; left: 50%; width: 20%;height:60%;background-color:#aaa">
                <p style="font-size:130%">{{('Domicilio:')}}</p>
                <p style="font-size:130%">{{('Municipio:')}}</p>
                <p style="font-size:130%">{{('Población:')}}</p>
                <p style="font-size:130%">{{('Correo electrónico:')}}</p>
                <p style="font-size:130%">{{('Clave CURP:')}} </p>
                <p style="font-size:130%">{{('Núm. de Seguro Social:')}}</p>
                <p style="font-size:130%">{{('Fecha de Nacimiento:')}}</p>
                <p style="font-size:130%">{{('Edad:')}}</p>
            </div>

            <div style="position: absolute;top: 62%; left: 70%; width:25%;height:60%;background-color:#aaa">
                <p><input type="text" placeholder="Matamoros #35" value="{{ old('domicilio') }}" required id="domicilio" name="domicilio" style="font-size:105%; width: 95%"/></p>
                <p><input type="text" placeholder="Teul de González Ortega, Zac." value="{{ old('municipio') }}" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" id="municipio" name="municipio" style="font-size:105%; width:97%"/></p>
                <p><input type="text" placeholder="Teul de González Ortega, Zac." value="{{ old('poblacion') }}" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" id="poblacion" name="poblacion" style="font-size:105%; width:97%" /></p>
                <p><input type="email" placeholder="ximena@gmail.com"  value="{{ old('correo') }}" pattern="^[a-z0-9_]+(?:\.[a-z0-9_]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$" id="correo" name="correo" style="font-size:105%; width:97%;"/></p>
                <p><input type="text" placeholder="VETC030913MZSLRMA6"  value="{{ old('curp') }}" required pattern="^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$" id="curp" name="curp" style="font-size:105%; width:97%;"/></p>
                <p><input type="text" placeholder="23145678903" value="{{ old('nss') }}" pattern="[0-9]{11}" id="nss" name="nss" style="font-size:105%; width:97%;"/></p>

                <p> <input type="date" value="{{ old('fecha') }}" min="1990-01-01" id="fecha" name="fecha" required style="width: 93%" onchange="ObtenerEdad(this.value)"></p>

                <p><input type="text" name="edad" id="edad" readonly style="width: 25%; background: #FFFFFF"></p>

                <label style="position: absolute;top: 74%;left:37%;font-size:140%;">Sexo: </label>
                <label style="position: absolute;top: 74%;left:66%;font-size:130%; width: 20%">F</label>
                <input type="radio" name="sexo" required value="Mujer" style="width: 6%;height: 6%; position: absolute;top: 75%;left:59%" @if(old('sexo')) checked @endif>
                <label style="position: absolute;top: 74%;left:83%;font-size:130%; width: 20%" @if(old('sexo')) checked @endif>M</label>
                <input type="radio" name="sexo" required value="Hombre" style="width: 6%;height: 6%; position: absolute;top: 75%;left:75%;">
            </div>

            <div style="font-size:140%;width: 90%; height: 11.5%;position: absolute;top: 130%;left:5%; background-color:#aaa  ">
                    <p style="position: absolute;top: 3%;left:14%; width: 80%">{{('Con todo respeto solicito a Usted Sr. Director, me acepte como alumno  de esta Escuela Preparatoria a su cargo para cursar el')}}</p>
                        <select name="semestres" id="semestres" required onchange="Grado(this.value); semes(this.options[this.selectedIndex].innerHTML);habilitar(this.value),habilitar2(this.value)" style="font-size:80%;width: 17%;/*posicion->*/position: absolute;top:54%; left:46%;">
                            <option value="{{ old('semestres') }}">{{ old('semestres') }}</option>
                            <option value="PRIMER">PRIMER SEMESTRE</option>
                            <option value="PRIMER">SEGUNDO SEMESTRE</option>
                            <option value="SEGUNDO">TERCER SEMESTRE</option>
                            <option value="SEGUNDO">CUARTO SEMESTRE</option>
                            <option value="TERCER">QUINTO SEMESTRE</option>
                            <option value="TERCER">SEXTO SEMESTRE</option>
                      </select>

                    <p style="position: absolute;top: 50%;left:64%">{{('del')}}</p>
                    <!--Caja del grado-->
                    <input type="text" id="grado" value="{{ old('Gradoo') }}" name="Gradoo" disabled style="background-color:#aaa; position: absolute; top:51%; left: 67%; width: 8%;border: 0px;font-size:90%;text-align: center; color:black">
                    <input type="text" value="{{ old('semestree') }}" id="semestree" name="semestree" style="background-color:#aaa; position: absolute; top:51%; left: 85%; width: 0%;border: 0px;font-size:90%;text-align: center; color:black">

                    <p style="position: absolute; top:53%; left: 75.5%;font-size:90%"> {{('GRADO.')}}</p>
            </div>
            <div style="position: absolute;top: 115%; left: 5%; width: 90%;height:16%;background-color:#aaa">
                <p style="font-size:130%">{{('Formación para el Trabajo:')}}</p>
                <p style="font-size:130%">{{('Bachillerato:')}}</p>
                <select required name="ft1" id="ft1" style="font-size:110%;width: 26.5%; position:  absolute;top: 4%; left: 22%"  disabled="true">
                            <option value="{{ old('Grado') }}">{{ old('Grado') }}</option>
                            <?php 
                                echo $opcionesFormacion;
                             ?>
                      </select>

                <select name="bach1" id="bach1" style="font-size:110%;width: 26.5%; position:  absolute;top: 53%; left: 22%" disabled="true" required>
                            <option value="{{ old('Grado') }}">{{ old('Grado') }}</option>
                           <?php 
                                echo $opcionesBachillerato;
                            ?>
                      </select>


            </div>


            <div class="card-header text-center" style="font-size:180%;width: 90%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 142%; left: 5%;" >{{ __('Requisitos') }}</div>

            <!-- ********************** PARTE DE DONDE SE AGREGA PARA LOS REQUISITOS ********************************-->
            <div style="position: absolute;top: 152%; left: 5%; width: 70%;height:65%;background-color:#aaa">
                <p style="font-size:138%">{{('A) Certificado de Secundaria.')}}</p>
                <p style="font-size:138%">{{('B) Acta de Nacimiento.')}}</p>
                <p style="font-size:138%">{{('C) CURP.')}}</p>
                <p style="font-size:138%">{{('D) Carta de Conducta.')}} </p>
                <p style="font-size:138%">{{('E) 6 Fotografías tamaño infantil, blanco y negro (no instantáneas).')}}</p>
                <p style="font-size:138%">{{('F) Ser alumno regular del grado anterior.')}}</p>
                <p style="font-size:138%">{{('G) Cubrir cuota semestral.')}}</p>
                <p style="font-size:138%">{{('H) Firmar de conformidad padres y alumno  en la hoja de solicitud de inscripción.')}}</p>
            </div>

            <div style="position: absolute;top: 152%; left: 75%; width: 20%; height:65%;background-color:#aaa">
                <p><select id="A" name="A" value="No" required style="width: 18%;height: 9%; position: absolute;top: 0%;left:10%">
                    <option value="{{ old('A') }}">{{ old('A') }}</option>
                    <option selected value="Si">SI</option>
                    <option value="No">NO</option>
                </select></p>
                <p><select required id="B" name="B" style="width: 18%;height: 9%; position: absolute;top: 12%;left:10%">
                    <option value="{{ old('B') }}">{{ old('B') }}</option>
                    <option selected value="Si">SI</option>
                    <option value="No">NO</option>
                </select></p>
                <p><select required id="C" name="C" style="width: 18%;height: 9%; position: absolute;top: 23%;left:10%">
                    <option value="{{ old('C') }}">{{ old('C') }}</option>
                    <option selected value="Si">SI</option>
                    <option value="No">NO</option>
                </select></p>

                <p><select required id="D" name="D" style="width: 18%;height: 9%; position: absolute;top: 34%;left:10%">
                    <option value="{{ old('D') }}">{{ old('D') }}</option>
                    <option selected value="Si">SI</option>
                    <option value="No">NO</option>
                </select></p>
                <p><select required name="E" style="width: 18%;height: 9%; position: absolute;top: 46%;left:10%">
                    <option value="{{ old('E') }}">{{ old('E') }}</option>
                    <option selected value="Si">SI</option>
                    <option value="No">NO</option>
                </select></p>
                <p><select required id="F" name="F" style="width: 18%;height: 9%; position: absolute;top: 59%;left:10%">
                    <option value="{{ old('F') }}">{{ old('F') }}</option>
                    <option selected value="Si">SI</option>
                    <option value="No">NO</option>
                </select></p>
                <p><select required id="G" name="G" style="width: 18%;height: 9%; position: absolute;top: 72%;left:10%">
                    <option value="{{ old('G') }}">{{ old('G') }}</option>
                    <option selected value="Si">SI</option>
                    <option value="No">NO</option>
                </select></p>
                <p><select required id="H" name="H" style="width: 18%;height: 9%; position: absolute;top: 85%;left:10%">
                    <option value="{{ old('H') }}">{{ old('H') }}</option>
                    <option selected value="Si">SI</option>
                    <option value="No">NO</option>
                </select></p>

            </div>

            <button type="submit" class="btn btn-primary" style="position: absolute;top: 218%;left:65%">Inscribir</button>

            
        <!--</form>-->
        {!! Form::close()!!}
</body>



@endsection
