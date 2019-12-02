<style media="screen">
  th, td {
     width: 25%;
     vertical-align: top;
     border: 1px solid #000;
     border-collapse: collapse;
     padding: 0.3em;
     caption-side: bottom;
  }
  caption {
    padding: 0.3em;
    color: #fff;
    background: #000;
  }
  th {
     background: #eee;
  }
</style>

<html>
  <head>
    <title>Boletas</title>
  </head>

  <body>
    <?php
      $ContB=0;
      $Cont=0;
    ?>
    @if ($Opcion==1)
      @foreach($Nombres_A as $Alum_A)
        <!-- ESTO ES PARA AGREGAR LAS IMAGENES DE LOS LOGOS -->
        <img src="{{public_path('images\logo_Zacatecas.jpg')}}" style="width: 25%; height: 20%;position: absolute;top: 2%; left: 3%">
        <img src="{{public_path('images/logo_Prepas.png')}}" style="width: 20%; height: 30%; position: absolute;top: 2%; left: 68%"> <!-- EL left es de manera horizontal-->
        <img src="{{public_path('images/logo_Prepa_Teul.jpg')}}" style="width: 10%; height: 10%; position: absolute;top: 2%; left: 88%"> <!-- EL left es de manera horizontal-->
        <img src="{{public_path('images/datos_Prepa_Negro.jpg')}}" style="width: 36%; height: 30%; position: absolute;top: 0.5%; left: 30%"> <!-- EL left es de manera horizontal-->
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <center style="font-size:65%;">
          <h1>RESULTADOS DE EVALUACIONES.</h1>
          <h1>CICLO ESCOLAR {{$Year_1}} - {{$Year_2}}. SEM. {{$SEM}}</h1>
        </center>
        <br>
        <h1 style="font-size:130%;">Grado y Grupo: GRUPO {{ ($Docente_A[0]->Grado)}} {{ ($Docente_A[0]->Grupo) }}</h1>
        <h1 style="font-size:130%;">Tutor: {{ ($Docente_A[0]->Nombre_D)}}</h1>
        <h1 style="font-size:130%;">Alumno: {{ ($Alum_A) }}</h1>
        <table cellspacing="0" align="center" style="width: 80%; font-size:110%" class="table">
          <tr>
            <td align="center" >Asignatura</td>
            <td align="center" style="width: 8%">Parcial 1</td>
            <td align="center" style="width: 8%">Parcial 2</td>
          </tr>
          @foreach($Materias as $Mat)
            <tr style="color: rgb(0, 0, 0)">
              <td >{{ $Mat->Nombre }}</td>
              <td align="center" style="width: 8%">{{($Cal_Alu_A[$Cont])}}</td>
              <?php $Cont+=1; ?>
              <td align="center" style="width: 8%">{{($Cal_Alu_A[$Cont])}}</td>
              <?php $Cont+=1; ?>
            </tr>
          @endforeach
        </table>
        <br>
        <h1 style="font-size:110%;">Observaciones:</h1>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
      @endforeach

    @elseif($Opcion==2)
      @foreach($Nombres_B as $Alum_B)
        <!-- ESTO ES PARA AGREGAR LAS IMAGENES DE LOS LOGOS -->
        <img src="{{public_path('images\logo_Zacatecas.jpg')}}" style="width: 25%; height: 20%;position: absolute;top: 2%; left: 3%">
        <img src="{{public_path('images/logo_Prepas.png')}}" style="width: 20%; height: 30%; position: absolute;top: 2%; left: 68%"> <!-- EL left es de manera horizontal-->
        <img src="{{public_path('images/logo_Prepa_Teul.jpg')}}" style="width: 10%; height: 10%; position: absolute;top: 2%; left: 88%"> <!-- EL left es de manera horizontal-->
        <img src="{{public_path('images/datos_Prepa_Negro.jpg')}}" style="width: 36%; height: 30%; position: absolute;top: 0.5%; left: 30%"> <!-- EL left es de manera horizontal-->
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <center style="font-size:65%;">
          <h1>RESULTADOS DE EVALUACIONES.</h1>
          <h1>CICLO ESCOLAR {{$Year_1}} - {{$Year_2}}. SEM. {{$SEM}}</h1>
        </center>
        <br>
        <h1 style="font-size:130%;">Grado y Grupo: GRUPO {{ ($Docente_B[0]->Grado)}} {{ ($Docente_B[0]->Grupo) }}</h1>
        <h1 style="font-size:130%;">Tutor: {{ ($Docente_B[0]->Nombre_D)}}</h1>
        <h1 style="font-size:130%;">Alumno: {{ ($Alum_B) }}</h1>
        <table cellspacing="0" align="center" style="width: 80%; font-size:110%" class="table">
          <tr>
            <td align="center" >Asignatura</td>
            <td align="center" style="width: 8%">Parcial 1</td>
            <td align="center" style="width: 8%">Parcial 2</td>
          </tr>
          @foreach($Materias as $Mat)
            <tr style="color: rgb(0, 0, 0)">
              <td >{{ $Mat->Nombre }}</td>
              <td align="center" style="width: 8%">{{($Cal_Alu_B[$ContB])}}</td>
              <?php $ContB+=1; ?>
              <td align="center" style="width: 8%">{{($Cal_Alu_B[$ContB])}}</td>
              <?php $ContB+=1; ?>
            </tr>
          @endforeach
        </table>
        <br>
        <h1 style="font-size:110%;">Observaciones:</h1>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
      @endforeach

    @elseif($Opcion==3)
      @foreach($Nombres_A as $Alum_A)
        <!-- ESTO ES PARA AGREGAR LAS IMAGENES DE LOS LOGOS -->
        <img src="{{public_path('images\logo_Zacatecas.jpg')}}" style="width: 25%; height: 20%;position: absolute;top: 2%; left: 3%">
        <img src="{{public_path('images/logo_Prepas.png')}}" style="width: 20%; height: 30%; position: absolute;top: 2%; left: 68%"> <!-- EL left es de manera horizontal-->
        <img src="{{public_path('images/logo_Prepa_Teul.jpg')}}" style="width: 10%; height: 10%; position: absolute;top: 2%; left: 88%"> <!-- EL left es de manera horizontal-->
        <img src="{{public_path('images/datos_Prepa_Negro.jpg')}}" style="width: 36%; height: 30%; position: absolute;top: 0.5%; left: 30%"> <!-- EL left es de manera horizontal-->
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <center style="font-size:65%;">
          <h1>RESULTADOS DE EVALUACIONES.</h1>
          <h1>CICLO ESCOLAR {{$Year_1}} - {{$Year_2}}. SEM. {{$SEM}}</h1>
        </center>
        <br>
        <h1 style="font-size:130%;">Grado y Grupo: GRUPO {{ ($Docente_A[0]->Grado)}} {{ ($Docente_A[0]->Grupo) }}</h1>
        <h1 style="font-size:130%;">Tutor: {{ ($Docente_A[0]->Nombre_D)}}</h1>
        <h1 style="font-size:130%;">Alumno: {{ ($Alum_A) }}</h1>
        <table cellspacing="0" align="center" style="width: 80%; font-size:110%" class="table">
          <tr>
            <td align="center" >Asignatura</td>
            <td align="center" style="width: 8%">Parcial 1</td>
            <td align="center" style="width: 8%">Parcial 2</td>
          </tr>
          @foreach($Materias as $Mat)
            <tr style="color: rgb(0, 0, 0)">
              <td >{{ $Mat->Nombre }}</td>
              <td align="center" style="width: 8%">{{($Cal_Alu_A[$Cont])}}</td>
              <?php $Cont+=1; ?>
              <td align="center" style="width: 8%">{{($Cal_Alu_A[$Cont])}}</td>
              <?php $Cont+=1; ?>
            </tr>
          @endforeach
        </table>
        <br>
        <h1 style="font-size:110%;">Observaciones:</h1>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
      @endforeach

      @foreach($Nombres_B as $Alum_B)
        <!-- ESTO ES PARA AGREGAR LAS IMAGENES DE LOS LOGOS -->
        <img src="{{public_path('images\logo_Zacatecas.jpg')}}" style="width: 25%; height: 20%;position: absolute;top: 2%; left: 3%">
        <img src="{{public_path('images/logo_Prepas.png')}}" style="width: 20%; height: 30%; position: absolute;top: 2%; left: 68%"> <!-- EL left es de manera horizontal-->
        <img src="{{public_path('images/logo_Prepa_Teul.jpg')}}" style="width: 10%; height: 10%; position: absolute;top: 2%; left: 88%"> <!-- EL left es de manera horizontal-->
        <img src="{{public_path('images/datos_Prepa_Negro.jpg')}}" style="width: 36%; height: 30%; position: absolute;top: 0.5%; left: 30%"> <!-- EL left es de manera horizontal-->
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <center style="font-size:65%;">
          <h1>RESULTADOS DE EVALUACIONES.</h1>
          <h1>CICLO ESCOLAR {{$Year_1}} - {{$Year_2}}. SEM. {{$SEM}}</h1>
        </center>
        <br>
        <h1 style="font-size:130%;">Grado y Grupo: GRUPO {{ ($Docente_B[0]->Grado)}} {{ ($Docente_B[0]->Grupo) }}</h1>
        <h1 style="font-size:130%;">Tutor: {{ ($Docente_B[0]->Nombre_D)}}</h1>
        <h1 style="font-size:130%;">Alumno: {{ ($Alum_B) }}</h1>
        <table cellspacing="0" align="center" style="width: 80%; font-size:110%" class="table">
          <tr>
            <td align="center" >Asignatura</td>
            <td align="center" style="width: 8%">Parcial 1</td>
            <td align="center" style="width: 8%">Parcial 2</td>
          </tr>
          @foreach($Materias as $Mat)
            <tr style="color: rgb(0, 0, 0)">
              <td >{{ $Mat->Nombre }}</td>
              <td align="center" style="width: 8%">{{($Cal_Alu_B[$ContB])}}</td>
              <?php $ContB+=1; ?>
              <td align="center" style="width: 8%">{{($Cal_Alu_B[$ContB])}}</td>
              <?php $ContB+=1; ?>
            </tr>
          @endforeach
        </table>
        <br>
        <h1 style="font-size:110%;">Observaciones:</h1>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
      @endforeach

    @endif
<pre align="center">“Los datos personales proporcionados y contenidos en el presente formato, 
serán tratados de conformidad a lo que establece la Ley de Protección de
Datos Personales en posesión de los sujetos obligados del Estado de 
Zacatecas y el aviso de privacidad de la Secretaría de Educación de 
Zacatecas, el cual podrá consultar en la dirección electrónica: 
http://www.seduzac.gob.mx/portal/avisos_privacidad.php”</pre>
  </body>
</html>