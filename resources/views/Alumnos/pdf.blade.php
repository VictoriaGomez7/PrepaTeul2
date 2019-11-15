@if (session()->has('msj'))
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <div class="alert alert-danger" role="alert">
      <button type="button" class="close" data-dismiss="alert" >&times;</button>
      <strong>¡Error!</strong>{{session('msj')}}
    </div>
@endif
<html>
    <head>
        <title>Kardex </title>
    </head>

    <body>

      <!-- ESTO ES PARA AGREGAR LAS IMAGENES DE LOS LOGOS -->
      <img src="{{public_path('images\logo_Zacatecas.jpg')}}" style="width: 300px; height: 100px;position: absolute;top: 4px; left: 28%">
      <br>
      <br>
      <br><br><br>
       
      <center>
        <h3>SISTEMA EDUCATIVO NACIONAL</h3>
        <h3 style="position: absolute;top: 135px;left: 100px">KÁRDEX DEL ALUMNO DE EDUCACIÓN MEDIA SUPERIOR</h3>
        <br>
      </center>
        <p style="position: absolute;top: 175px;left: 10px"><font size="2">ESCULEA PREPARATORIA ESTATAL "GONZÁLEZ ORTEGA"</font></p>
        <p style="position: absolute;top: 160px;left: 550px"><font size="2">32EBH0011K</font></p>

        <p style="position: absolute;top: 160px;left: 10px">_____________________________________________________________________________________</p>
        <p style="position: absolute;top: 180px;left: 550px"><font size="0">CLAVE DEL CT</font></p>

<!-- aqui ir el municipio la entidad y la curp-->
        

        <p style="position: absolute;top: 195px;left: 10px">_____________________________________________________________________________________</p>
        @foreach($infoA as $infor)
        <p style="position: absolute;top: 195px;left: 10px"><font size="2">{{$infor->Municipio}}</font></p>
       @endforeach()
        <p style="position: absolute;top: 215px;left: 10px"><font size="0">MUNICIPIO</font></p>
        @foreach($infoA as $infor)
        <p style="position: absolute;top: 195px;left: 240px"><font size="2">Zacatecas</font></p>
       @endforeach()
        <p style="position: absolute;top: 215px;left: 240px"><font size="0">ENTIDAD</font></p>

       @foreach($infoA as $infor)
        <p style="position: absolute;top: 195px;left: 450px"><font size="2">{{$infor->Curp}}</font></p>
       @endforeach()
        <p style="position: absolute;top: 215px;left: 400px"><font size="0">CLAVE UNICA DE REGISTRO DE POBLACIÓN (CURP)</font></p>
        
        <p style="position: absolute;top: 235px;left: 10px">_____________________________________________________________________________________</p>
        @foreach($NombreA as $nalum)
        <p style="position: absolute;top: 235px;left: 10px"><font size="2">{{$nalum->ApellidoP}}</font></p>
        @endforeach()
        
        <p style="position: absolute;top: 255px;left: 10px"><font size="0">PRIMER APELLIDO</font></p>
        @foreach($NombreA as $nalum)
        <p style="position: absolute;top: 235px;left: 255px"><font size="2">{{$nalum->ApellidoM}}</font></p>
       @endforeach()
        <p style="position: absolute;top: 255px;left: 255px"><font size="0">SEGUNDO APELLIDO</font></p>
        
        @foreach($NombreA as $nalum)
        <p style="position: absolute;top: 235px;left: 500px"><font size="2">{{$nalum->Nombre}}</font></p>
       @endforeach()
        <p style="position: absolute;top: 255px;left: 500px"><font size="0">NOMBRE(S)</font></p>
        <p style="position: absolute;top: 275px;left: 10px">_____________________________________________________________________________________</p>
        
        
        @foreach($bachi as $ba)
        @if($ba->Bachillerato=="")
          <p style="position: absolute;top: 275px;left: 10px"><font size="2">BACHILLERATO GENERAL</font></p>
        @else
            <p style="position: absolute;top: 275px;left: 10px"><font size="2">BACHILLERATO GENERAL-{{$ba->Bachillerato}}</font></p>
        @endif()
       @endforeach()
        <p style="position: absolute;top: 295px;left: 10px"><font size="0">BACHILLERATO Y MODALIDAD</font></p>
        
        @foreach($bachi as $ba)
          <p style="position: absolute;top: 275px;left: 500px"><font size="2">{{$ba->Clave_A}}</font></p>
       @endforeach()
        <p style="position: absolute;top: 295px;left: 500px"><font size="0">MATRICULA</font></p>

        <p style="position: absolute;top: 320px;left: 10px"><font size="1">I PRIMER SEMESTRE</font></p>

        <p style="position: absolute;top: 320px;left: 180px"><font size="1">PERIODO ESCOLAR:</font></p>
        @foreach($Peri as $Pe)
        <p style="position: absolute;top: 318px;left: 574px"><font size="2">{{$Pe->PRIMERO}}</font></p>
        @endforeach()

        <p style="position: absolute;top: 320px;left: 430px"><font size="1">GRUPO:</font></p>

        @foreach($Grup as $GR)
        <p style="position: absolute;top: 318px;left: 474px"><font size="2">{{$GR->Grupo}}</font></p>
        @endforeach()
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
<!--______ Tabla 1_________-->
        <form name="frame" style="width: 80%">
        <table style="width: 100%; border-collapse: collapse">
          <tr>
            <th  align="left" rowspan="2" style=" border: 1px solid black;width: 43%"><font size="1">ASIGNATURAS</font></th>

            <th  align="left" rowspan="2" style="border: 1px solid black;"><font size="0">CALIFI CACIÓN FINAL</font></th>

            <th   align="left"  rowspan="2" style="border: 1px solid black;"><font size="0">% DE ASISTEN CIAS</font></th>

            <th align="center" colspan="6" style="border: 1px solid black;"><font size="1">PERIODO DE REGULARIZACIÓN</font></th>

            <!--th align="center" rowspan="12" style="border: 1px solid black">ABALADO</th-->
          </tr>
            <!--rowspan="2" -->
          <tr>
            <td align="left" style="border: 1px solid black;"><font size="0">FECHA</font></td>
            <td align="left" style="border: 1px solid black;"><font size="0">CALF.</font></td>
            <td align="left" style="border: 1px solid black;"><font size="0">FECHA</font></td>
            <td align="left" style="border: 1px solid black;"><font size="0">CALF.</font></td>
            <td align="left" style="border: 1px solid black;"><font size="0">FECHA</font></td>
            <td align="left" style="border: 1px solid black;"><font size="0">CALF.</font></td>
          </tr>
        @if($var1==1)
          @foreach($Primer as $Pr)
            <tr>
              @if($Pr->Oportunidades==null and $Pr->Calificacion>0)
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Pr->Clave_M}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Pr->Calificacion}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              @elseif($Pr->Oportunidades==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Pr->Clave_M}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Pr->Fecha}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Pr->Calificacion}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td> 
                  @elseif($Pr->Oportunidades==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Pr->Clave_M}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Pr->Fecha}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Pr->Calificacion}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                  @elseif($Pr->Oportunidades>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Pr->Clave_M}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Pr->Fecha}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Pr->Calificacion}}</font></td>
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">{{$Pr->Clave_M}}</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              @endif()
            </tr>
          @endforeach()
        @else
          @foreach($MATPrimer as $MATPr)
           <tr>
              <td align="left" style="border: 1px solid black;"><font size="1">{{$MATPr->Nombre}}</font></td>
              <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
            </tr>
          @endforeach()
        @endif()
      </table>
    </form>
    <!--_____________2do Semestre-->
    <br>
    <p style="position: absolute;left: 10px"><font size="1">II SEGUNDO SEMESTRE</font></p>

        <p style="position: absolute;left: 180px"><font size="1">PERIODO ESCOLAR:</font></p>
        @foreach($Peri as $Pe)
        <p style="position: absolute;left: 574px"><font size="2">{{$Pe->PRIMERO}}</font></p>
        @endforeach()

        <p style="position: absolute;left: 430px"><font size="1">GRUPO:</font></p>

        @foreach($Grup as $GR)
        <p style="position: absolute;left: 474px"><font size="2">{{$GR->Grupo}}</font></p>
        @endforeach()
        <br>
        <br>
<!--______ Tabla 2_________-->
        <form name="frame" style="width: 80%">
        <table style="width: 100%; border-collapse: collapse">
          <tr>
            <th  align="left" rowspan="2" style=" border: 1px solid black;width: 43%"><font size="1">ASIGNATURAS</font></th>

            <th  align="left" rowspan="2" style="border: 1px solid black;"><font size="0">CALIFI CACIÓN FINAL</font></th>

            <th   align="left"  rowspan="2" style="border: 1px solid black;"><font size="0">% DE ASISTEN CIAS</font></th>

            <th align="center" colspan="6" style="border: 1px solid black;"><font size="1">PERIODO DE REGULARIZACIÓN</font></th>

            <!--th align="center" rowspan="12" style="border: 1px solid black">ABALADO</th-->
          </tr>
            <!--rowspan="2" -->
          <tr>
            <td align="left" style="border: 1px solid black;"><font size="0">FECHA</font></td>
            <td align="left" style="border: 1px solid black;"><font size="0">CALF.</font></td>
            <td align="left" style="border: 1px solid black;"><font size="0">FECHA</font></td>
            <td align="left" style="border: 1px solid black;"><font size="0">CALF.</font></td>
            <td align="left" style="border: 1px solid black;"><font size="0">FECHA</font></td>
            <td align="left" style="border: 1px solid black;"><font size="0">CALF.</font></td>
          </tr>
        @if($var2==1)
          @foreach($Segund as $Sg)
            <tr>
              @if($Sg->Oportunidades==null and $Sg->Calificacion>0)
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Sg->Clave_M}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Sg->Calificacion}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              @elseif($Sg->Oportunidades==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Sg->Clave_M}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Sg->Fecha}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Sg->Calificacion}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td> 
                  @elseif($Sg->Oportunidades==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Sg->Clave_M}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Sg->Fecha}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Sg->Calificacion}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                  @elseif($Sg->Oportunidades>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Sg->Clave_M}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Sg->Fecha}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Sg->Calificacion}}</font></td>
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">{{$Sg->Clave_M}}</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              @endif()
            </tr>
          @endforeach()
        @else
          @foreach($MATSegund as $MATSg)
           <tr>
              <td align="left" style="border: 1px solid black;"><font size="1">{{$MATSg->Nombre}}</font></td>
              <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
            </tr>
          @endforeach()
        @endif()
      </table>
    </form>
    <br>
    
    <!--_____________3er Semestre-->
    <br>
    

    <p style="position: absolute;left: 10px"><font size="1">III TERCER SEMESTRE</font></p>

        <p style="position: absolute;left: 180px"><font size="1">PERIODO ESCOLAR:</font></p>
        @foreach($Peri as $Pe)
        <p style="position: absolute;left: 574px"><font size="2">{{$Pe->PRIMERO}}</font></p>
        @endforeach()

        <p style="position: absolute;left: 430px"><font size="1">GRUPO:</font></p>

        @foreach($Grup as $GR)
        <p style="position: absolute;left: 474px"><font size="1">{{$GR->Grupo}}</font></p>
        @endforeach()
        <br>
        <br>
        <form name="frame" style="width: 80%">
        <table style="width: 100%; border-collapse: collapse">
          <tr>
            <th  align="left" rowspan="2" style=" border: 1px solid black;width: 43%"><font size="1">ASIGNATURAS</font></th>

            <th  align="left" rowspan="2" style="border: 1px solid black;"><font size="0">CALIFI CACIÓN FINAL</font></th>

            <th   align="left"  rowspan="2" style="border: 1px solid black;"><font size="0">% DE ASISTEN CIAS</font></th>

            <th align="center" colspan="6" style="border: 1px solid black;"><font size="1">PERIODO DE REGULARIZACIÓN</font></th>

            <!--th align="center" rowspan="12" style="border: 1px solid black">ABALADO</th-->
          </tr>
            <!--rowspan="2" -->
          <tr>
            <td align="left" style="border: 1px solid black;"><font size="0">FECHA</font></td>
            <td align="left" style="border: 1px solid black;"><font size="0">CALF.</font></td>
            <td align="left" style="border: 1px solid black;"><font size="0">FECHA</font></td>
            <td align="left" style="border: 1px solid black;"><font size="0">CALF.</font></td>
            <td align="left" style="border: 1px solid black;"><font size="0">FECHA</font></td>
            <td align="left" style="border: 1px solid black;"><font size="0">CALF.</font></td>
          </tr>
        @if($var3==1)
          @foreach($Terce as $Tr)
            <tr>
              @if($Tr->Oportunidades==null and $Tr->Calificacion>0)
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Tr->Clave_M}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Tr->Calificacion}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              @elseif($Tr->Oportunidades==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Tr->Clave_M}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Tr->Fecha}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Tr->Calificacion}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td> 
                  @elseif($Tr->Oportunidades==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Tr->Clave_M}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Tr->Fecha}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Tr->Calificacion}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                  @elseif($Tr->Oportunidades>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Tr->Clave_M}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Tr->Fecha}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Tr->Calificacion}}</font></td>
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">{{$Tr->Clave_M}}</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              @endif()
            </tr>
          @endforeach()
        @else
          @foreach($MATTerce as $MATTr)
           <tr>
              <td align="left" style="border: 1px solid black;"><font size="1">{{$MATTr->Nombre}}</font></td>
              <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
            </tr>
          @endforeach()
        @endif()
      </table>
    </form>
    <br>

     <!--_____________4to Semestre-->
    <br>
    

    <p style="position: absolute;left: 10px"><font size="1">IV CUARTO SEMESTRE</font></p>

        <p style="position: absolute;left: 180px"><font size="1">PERIODO ESCOLAR:</font></p>
        @foreach($Peri as $Pe)
        <p style="position: absolute;left: 574px"><font size="2">{{$Pe->PRIMERO}}</font></p>
        @endforeach()

        <p style="position: absolute;left: 430px"><font size="1">GRUPO:</font></p>

        @foreach($Grup as $GR)
        <p style="position: absolute;left: 474px"><font size="1">{{$GR->Grupo}}</font></p>
        @endforeach()
        <br>
        <br>
        <form name="frame" style="width: 80%">
        <table style="width: 100%; border-collapse: collapse">
          <tr>
            <th  align="left" rowspan="2" style=" border: 1px solid black;width: 43%"><font size="1">ASIGNATURAS</font></th>

            <th  align="left" rowspan="2" style="border: 1px solid black;"><font size="0">CALIFI CACIÓN FINAL</font></th>

            <th   align="left"  rowspan="2" style="border: 1px solid black;"><font size="0">% DE ASISTEN CIAS</font></th>

            <th align="center" colspan="6" style="border: 1px solid black;"><font size="1">PERIODO DE REGULARIZACIÓN</font></th>

            <!--th align="center" rowspan="12" style="border: 1px solid black">ABALADO</th-->
          </tr>
            <!--rowspan="2" -->
          <tr>
            <td align="left" style="border: 1px solid black;"><font size="0">FECHA</font></td>
            <td align="left" style="border: 1px solid black;"><font size="0">CALF.</font></td>
            <td align="left" style="border: 1px solid black;"><font size="0">FECHA</font></td>
            <td align="left" style="border: 1px solid black;"><font size="0">CALF.</font></td>
            <td align="left" style="border: 1px solid black;"><font size="0">FECHA</font></td>
            <td align="left" style="border: 1px solid black;"><font size="0">CALF.</font></td>
          </tr>
        @if($var4==1)
          @foreach($Cuart as $Cu)
            <tr>
              @if($Cu->Oportunidades==null and $Cu->Calificacion>0)
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Cu->Clave_M}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Cu->Calificacion}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              @elseif($Cu->Oportunidades==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Cu->Clave_M}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Cu->Fecha}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Cu->Calificacion}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td> 
                  @elseif($Cu->Oportunidades==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Cu->Clave_M}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Cu->Fecha}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Cu->Calificacion}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                  @elseif($Cu->Oportunidades>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Cu->Clave_M}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Cu->Fecha}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Cu->Calificacion}}</font></td>
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">{{$Cu->Clave_M}}</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              @endif()
            </tr>
          @endforeach()
        @else
          @foreach($MATCuart as $MATCu)
           <tr>
              <td align="left" style="border: 1px solid black;"><font size="1">{{$MATCu->Nombre}}</font></td>
              <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
            </tr>
          @endforeach()
        @endif()
      </table>
    </form>
    <br>

     <!--_____________5to Semestre-->
    <br>
    

    <p style="position: absolute;left: 10px"><font size="1">V QUINTO SEMESTRE</font></p>

        <p style="position: absolute;left: 180px"><font size="1">PERIODO ESCOLAR:</font></p>
        @foreach($Peri as $Pe)
        <p style="position: absolute;left: 574px"><font size="2">{{$Pe->PRIMERO}}</font></p>
        @endforeach()

        <p style="position: absolute;left: 430px"><font size="1">GRUPO:</font></p>

        @foreach($Grup as $GR)
        <p style="position: absolute;left: 474px"><font size="1">{{$GR->Grupo}}</font></p>
        @endforeach()
        <br>
        <br>
        <form name="frame" style="width: 80%">
        <table style="width: 100%; border-collapse: collapse">
          <tr>
            <th  align="left" rowspan="2" style=" border: 1px solid black;width: 43%"><font size="1">ASIGNATURAS</font></th>

            <th  align="left" rowspan="2" style="border: 1px solid black;"><font size="0">CALIFI CACIÓN FINAL</font></th>

            <th   align="left"  rowspan="2" style="border: 1px solid black;"><font size="0">% DE ASISTEN CIAS</font></th>

            <th align="center" colspan="6" style="border: 1px solid black;"><font size="1">PERIODO DE REGULARIZACIÓN</font></th>

            <!--th align="center" rowspan="12" style="border: 1px solid black">ABALADO</th-->
          </tr>
            <!--rowspan="2" -->
          <tr>
            <td align="left" style="border: 1px solid black;"><font size="0">FECHA</font></td>
            <td align="left" style="border: 1px solid black;"><font size="0">CALF.</font></td>
            <td align="left" style="border: 1px solid black;"><font size="0">FECHA</font></td>
            <td align="left" style="border: 1px solid black;"><font size="0">CALF.</font></td>
            <td align="left" style="border: 1px solid black;"><font size="0">FECHA</font></td>
            <td align="left" style="border: 1px solid black;"><font size="0">CALF.</font></td>
          </tr>
        @if($var5==1)
          @foreach($Quint as $Qi)
            <tr>
              @if($Qi->Oportunidades==null and $Qi->Calificacion>0)
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Qi->Clave_M}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Qi->Calificacion}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              @elseif($Qi->Oportunidades==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Qi->Clave_M}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Qi->Fecha}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Qi->Calificacion}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td> 
                  @elseif($Qi->Oportunidades==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Qi->Clave_M}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Qi->Fecha}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Qi->Calificacion}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                  @elseif($Qi->Oportunidades>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Qi->Clave_M}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Qi->Fecha}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Qi->Calificacion}}</font></td>
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">{{$Qi->Clave_M}}</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              @endif()
            </tr>
          @endforeach()
        @else
          @if($seme==1)
            @foreach($MATQuint as $MATQi)
             <tr>
                <td align="left" style="border: 1px solid black;"><font size="1">{{$MATQi->Nombre}}</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              </tr>
            @endforeach()
            @foreach($MATQuint3 as $MATQi3)
             <tr>
                <td align="left" style="border: 1px solid black;"><font size="1">{{$MATQi3->Nombre}}</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              </tr>
            @endforeach()
            @foreach($MATQuint2 as $MATQi2)
             <tr>
                <td align="left" style="border: 1px solid black;"><font size="1">{{$MATQi2->Nombre}}</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              </tr>
            @endforeach()
            
          @else()
            @foreach($MATQuint as $MATQi)
             <tr>
                <td align="left" style="border: 1px solid black;"><font size="1">{{$MATQi->Nombre}}</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              </tr>
            @endforeach()
            @for($i=0;$i<5;$i++ )
             <tr>
                <td align="left" style="border: 1px solid black;"><font size="1">--</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              </tr>
            @endfor()
            @foreach($MATQuint2 as $MATQi2)
             <tr>
                <td align="left" style="border: 1px solid black;"><font size="1">{{$MATQi2->Nombre}}</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              </tr>
            @endforeach()
            
          @endif()
        @endif()
      </table>
    </form>
    <br>

    <!--_____________6to Semestre-->
    <br>
    

    <p style="position: absolute;left: 10px"><font size="1">VI SEXTO SEMESTRE</font></p>

        <p style="position: absolute;left: 180px"><font size="1">PERIODO ESCOLAR:</font></p>
        @foreach($Peri as $Pe)
        <p style="position: absolute;left: 574px"><font size="2">{{$Pe->PRIMERO}}</font></p>
        @endforeach()

        <p style="position: absolute;left: 430px"><font size="1">GRUPO:</font></p>

        @foreach($Grup as $GR)
        <p style="position: absolute;left: 474px"><font size="1">{{$GR->Grupo}}</font></p>
        @endforeach()
        <br>
        <br>
        <form name="frame" style="width: 80%">
        <table style="width: 100%; border-collapse: collapse">
          <tr>
            <th  align="left" rowspan="2" style=" border: 1px solid black;width: 43%"><font size="1">ASIGNATURAS</font></th>

            <th  align="left" rowspan="2" style="border: 1px solid black;"><font size="0">CALIFI CACIÓN FINAL</font></th>

            <th   align="left"  rowspan="2" style="border: 1px solid black;"><font size="0">% DE ASISTEN CIAS</font></th>

            <th align="center" colspan="6" style="border: 1px solid black;"><font size="1">PERIODO DE REGULARIZACIÓN</font></th>

            <!--th align="center" rowspan="12" style="border: 1px solid black">ABALADO</th-->
          </tr>
            <!--rowspan="2" -->
          <tr>
            <td align="left" style="border: 1px solid black;"><font size="0">FECHA</font></td>
            <td align="left" style="border: 1px solid black;"><font size="0">CALF.</font></td>
            <td align="left" style="border: 1px solid black;"><font size="0">FECHA</font></td>
            <td align="left" style="border: 1px solid black;"><font size="0">CALF.</font></td>
            <td align="left" style="border: 1px solid black;"><font size="0">FECHA</font></td>
            <td align="left" style="border: 1px solid black;"><font size="0">CALF.</font></td>
          </tr>
        @if($var6==1)
          @foreach($Sex as $Sx)
            <tr>
              @if($Sx->Oportunidades==null and $Sx->Calificacion>0)
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Sx->Clave_M}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Sx->Calificacion}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              @elseif($Sx->Oportunidades==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Sx->Clave_M}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Sx->Fecha}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Sx->Calificacion}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td> 
                  @elseif($Sx->Oportunidades==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Sx->Clave_M}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Sx->Fecha}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Sx->Calificacion}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                  @elseif($Sx->Oportunidades>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Sx->Clave_M}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Sx->Fecha}}</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1">{{$Sx->Calificacion}}</font></td>
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">{{$Sx->Clave_M}}</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              @endif()
            </tr>
          @endforeach()
        @else
          @if($seme==1)
            @foreach($MATSex as $MATSx)
             <tr>
                <td align="left" style="border: 1px solid black;"><font size="1">{{$MATSx->Nombre}}</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              </tr>
            @endforeach()
            @foreach($MATQuint3 as $MATSx3)
             <tr>
                <td align="left" style="border: 1px solid black;"><font size="1">{{$MATSx3->Nombre}}</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              </tr>
            @endforeach()
            @foreach($MATQuint2 as $MATSx2)
             <tr>
                <td align="left" style="border: 1px solid black;"><font size="1">{{$MATSx2->Nombre}}</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              </tr>
            @endforeach()
            
          @else()
            @foreach($MATQuint as $MATSx)
             <tr>
                <td align="left" style="border: 1px solid black;"><font size="1">{{$MATSx->Nombre}}</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              </tr>
            @endforeach()
            @for($i=0;$i<5;$i++ )
             <tr>
                <td align="left" style="border: 1px solid black;"><font size="1">--</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              </tr>
            @endfor()
            @foreach($MATQuint2 as $MATSx2)
             <tr>
                <td align="left" style="border: 1px solid black;"><font size="1">{{$MATSx2->Nombre}}</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></font></td>
              </tr>
            @endforeach()
          @endif()
        @endif()
      </table>
    </form>
    <br>