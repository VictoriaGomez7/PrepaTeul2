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
    <title>Boletas parciales</title>
  </head>

  <body>
    <?php
      $ContB=0;
      $Cont=0;
    ?>
    @if ($Opcion==1)
      @foreach($Nombres_A as $Alum_A)
        <div class="ContenImages" id="unouno" style="width:100%">
            <img style="width:30% ;height: 100%" class="card-img-top" src="images/{{$ImagenesEnDB[0]->Imagen}}">
            <img style="width:28% ;height: 100%" class="card-img-top" src="images/{{$ImagenesEnDB[1]->Imagen}}">
            <img style="width:25% ;height: 100%" class="card-img-top" src="images/{{$ImagenesEnDB[2]->Imagen}}">
            <img style="width:15% ;height: 100%" class="card-img-top" src="images/{{$ImagenesEnDB[3]->Imagen}}">
        </div>
        
        <center style="font-size:60%">
          <h1>RESULTADOS DE EVALUACIONES.</h1>
          <h1>CICLO ESCOLAR {{$Year_1}} - {{$Year_2}}. SEM. {{$SEM}}</h1>
        </center>

        <div style="font-size:50%">
          <h1>Grado y Grupo: GRUPO {{ ($Docente_A[0]->Grado)}} {{ ($Docente_A[0]->Grupo) }}</h1>
          <h1>Tutor: {{ ($Docente_A[0]->Nombre_D)}}</h1>
          <h1>Alumno: {{ ($Alum_A) }}</h1>
        </div>
        <br>
        <br>
        <br>
        <table cellspacing="0" align="center" style="width: 80%; font-size:80%" class="table">
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
        <h1 style="font-size:100%">Observaciones:</h1>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

<center>
        <p style="text-align:justify">“Los datos personales proporcionados y contenidos en el presente formato, serán tratados de conformidad a lo que establece la Ley de Protección de Datos Personales en posesión de los sujetos obligados del Estado de Zacatecas y el aviso de privacidad de la Secretaría de Educación de Zacatecas, el cual podrá consultar en la dirección electrónica: http://www.seduzac.gob.mx/portal/avisos_privacidad.php”</p>
</center>
      @endforeach

    @elseif($Opcion==2)
      @foreach($Nombres_B as $Alum_B)
        <div class="ContenImages" id="unouno" style="width:100%">
            <img style="width:30% ;height: 100%" class="card-img-top" src="images/{{$ImagenesEnDB[0]->Imagen}}">
            <img style="width:28% ;height: 100%" class="card-img-top" src="images/{{$ImagenesEnDB[1]->Imagen}}">
            <img style="width:25% ;height: 100%" class="card-img-top" src="images/{{$ImagenesEnDB[2]->Imagen}}">
            <img style="width:15% ;height: 100%" class="card-img-top" src="images/{{$ImagenesEnDB[3]->Imagen}}">
        </div>
        
        <center style="font-size:60%">
          <h1>RESULTADOS DE EVALUACIONES.</h1>
          <h1>CICLO ESCOLAR {{$Year_1}} - {{$Year_2}}. SEM. {{$SEM}}</h1>
        </center>

        <div style="font-size:50%">
          <h1>Grado y Grupo: GRUPO {{ ($Docente_B[0]->Grado)}} {{ ($Docente_B[0]->Grupo) }}</h1>
          <h1>Tutor: {{ ($Docente_B[0]->Nombre_D)}}</h1>
          <h1>Alumno: {{ ($Alum_B) }}</h1>
        </div>
        <br>
        <br>
        <br>
        <table cellspacing="0" align="center" style="width: 80%; font-size:80%" class="table">
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
        <h1 style="font-size:100%">Observaciones:</h1>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

<center>
        <p style="text-align:justify">“Los datos personales proporcionados y contenidos en el presente formato, serán tratados de conformidad a lo que establece la Ley de Protección de Datos Personales en posesión de los sujetos obligados del Estado de Zacatecas y el aviso de privacidad de la Secretaría de Educación de Zacatecas, el cual podrá consultar en la dirección electrónica: http://www.seduzac.gob.mx/portal/avisos_privacidad.php”</p>
</center>
      @endforeach

    @elseif($Opcion==3)
      @foreach($Nombres_A as $Alum_A)
        <div class="ContenImages" id="unouno" style="width:100%">
            <img style="width:30% ;height: 100%" class="card-img-top" src="images/{{$ImagenesEnDB[0]->Imagen}}">
            <img style="width:28% ;height: 100%" class="card-img-top" src="images/{{$ImagenesEnDB[1]->Imagen}}">
            <img style="width:25% ;height: 100%" class="card-img-top" src="images/{{$ImagenesEnDB[2]->Imagen}}">
            <img style="width:15% ;height: 100%" class="card-img-top" src="images/{{$ImagenesEnDB[3]->Imagen}}">
        </div>
        
        <center style="font-size:60%">
          <h1>RESULTADOS DE EVALUACIONES.</h1>
          <h1>CICLO ESCOLAR {{$Year_1}} - {{$Year_2}}. SEM. {{$SEM}}</h1>
        </center>

        <div style="font-size:50%">
          <h1>Grado y Grupo: GRUPO {{ ($Docente_A[0]->Grado)}} {{ ($Docente_A[0]->Grupo) }}</h1>
          <h1>Tutor: {{ ($Docente_A[0]->Nombre_D)}}</h1>
          <h1>Alumno: {{ ($Alum_A) }}</h1>
        </div>
        <br>
        <br>
        <br>
        <table cellspacing="0" align="center" style="width: 80%; font-size:80%" class="table">
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
        <h1 style="font-size:100%">Observaciones:</h1>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

<center>
        <p style="text-align:justify">“Los datos personales proporcionados y contenidos en el presente formato, serán tratados de conformidad a lo que establece la Ley de Protección de Datos Personales en posesión de los sujetos obligados del Estado de Zacatecas y el aviso de privacidad de la Secretaría de Educación de Zacatecas, el cual podrá consultar en la dirección electrónica: http://www.seduzac.gob.mx/portal/avisos_privacidad.php”</p>
</center>
      @endforeach

      @foreach($Nombres_B as $Alum_B)
        <div class="ContenImages" id="unouno" style="width:100%">
            <img style="width:30% ;height: 100%" class="card-img-top" src="images/{{$ImagenesEnDB[0]->Imagen}}">
            <img style="width:28% ;height: 100%" class="card-img-top" src="images/{{$ImagenesEnDB[1]->Imagen}}">
            <img style="width:25% ;height: 100%" class="card-img-top" src="images/{{$ImagenesEnDB[2]->Imagen}}">
            <img style="width:15% ;height: 100%" class="card-img-top" src="images/{{$ImagenesEnDB[3]->Imagen}}">
        </div>
        
        <center style="font-size:60%">
          <h1>RESULTADOS DE EVALUACIONES.</h1>
          <h1>CICLO ESCOLAR {{$Year_1}} - {{$Year_2}}. SEM. {{$SEM}}</h1>
        </center>

        <div style="font-size:50%">
          <h1>Grado y Grupo: GRUPO {{ ($Docente_B[0]->Grado)}} {{ ($Docente_B[0]->Grupo) }}</h1>
          <h1>Tutor: {{ ($Docente_B[0]->Nombre_D)}}</h1>
          <h1>Alumno: {{ ($Alum_B) }}</h1>
        </div>
        <br>
        <br>
        <br>
        <table cellspacing="0" align="center" style="width: 80%; font-size:80%" class="table">
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
        <h1 style="font-size:100%">Observaciones:</h1>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

<center>
        <p style="text-align:justify">“Los datos personales proporcionados y contenidos en el presente formato, serán tratados de conformidad a lo que establece la Ley de Protección de Datos Personales en posesión de los sujetos obligados del Estado de Zacatecas y el aviso de privacidad de la Secretaría de Educación de Zacatecas, el cual podrá consultar en la dirección electrónica: http://www.seduzac.gob.mx/portal/avisos_privacidad.php”</p>
</center>
      @endforeach

    @endif
  </body>
</html>