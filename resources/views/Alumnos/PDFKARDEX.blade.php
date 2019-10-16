@if (session()->has('msj'))
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <div class="alert alert-danger" role="alert">
      <button type="button" class="close" data-dismiss="alert" >&times;</button>
      <strong>¡Error!</strong>{{session('msj')}}
    </div>
@endif
{{--<style media="screen">


}
th, td {
   width: 25%;
   text-align: justify;
   vertical-align: top;
   border: 2px solid #000;
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
</style>--}}
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
            <p style="position: absolute;top: 275px;left: 10px"><font size="2">{{$ba->Bachillerato}}</font></p>
        @endif()
       @endforeach()
        <p style="position: absolute;top: 295px;left: 10px"><font size="0">BACHILLERATO Y MODALIDAD</font></p>
        
        @foreach($bachi as $ba)
          <p style="position: absolute;top: 275px;left: 500px"><font size="2">{{$ba->Clave_A}}</font></p>
       @endforeach()
        <p style="position: absolute;top: 295px;left: 500px"><font size="0">MATRICULA</font></p>

        <p style="position: absolute;top: 320px;left: 10px"><font size="1">I PRIMER SEMESTRE</font></p>

        <p style="position: absolute;top: 320px;left: 180px"><font size="1">PERIODO ESCOLAR:</font></p>

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
        <form name="frame" style="width: 80%">
        <table style="width: 100%; border-collapse: collapse">
          <tr>
            <th  align="left" rowspan="2" style=" border: 1px solid black;width: 43%"><font size="1">ASIGNATURAS</font></th>

            <th  align="left" rowspan="2" style="border: 1px solid black;"><font size="0">CALIFI CACIÓN FINAL</font></th>

            <th   align="left"  rowspan="2" style="border: 1px solid black;"><font size="0">% DE ASISTEN CIAS</font></th>

            <th align="center" colspan="6" style="border: 1px solid black;"><font size="1">PERIODO DE REGURRALIZACIÓN</font></th>

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

          <?php
            $B=false;
          ?>


          @foreach($kard as $kar)
            @if($kar->Clave_M=='FB-MAT1')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>  
              @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="1">MATEMATICAS I</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                @elseif($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">MATEMATICAS I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">MATEMATICAS I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">MATEMATICAS I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">MATEMATICAS I</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
              @endif()          
          </tr>
          <?php
            $B=false;
          ?>
          @foreach($kard as $kar)
            @if($kar->Clave_M=='FB-QUI1')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
                <?php $Ca=$kar->Calificacion ?>
                <?php $F=$kar->Fecha ?>
                <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="1">QUÍMICA I</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @elseif($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">QUÍMICA I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">QUÍMICA I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">QUÍMICA I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                      <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                @endif()
               @else
                  <td align="left" style="border: 1px solid black;"><font size="1">QUÍMICA I</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td> 
              @endif() 
            </tr>
          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='FB-ETI1')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null and $Ma=='FB-ETI1' )
                  <td align="left" style="border: 1px solid black;"><font size="1">ÉTICA I</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">ÉTICA I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">ÉTICA I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">ÉTICA I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td> 
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">ÉTICA I</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
              @endif()  
            </tr>
          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='FB-MEI')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="1">METODOLOGÍA DE LA INVESTIGACIÓN</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">METODOLOGÍA DE LA INVESTIGACIÓN</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">METODOLOGÍA DE LA INVESTIGACIÓN</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">METODOLOGÍA DE LA INVESTIGACIÓN</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">METODOLOGÍA DE LA INVESTIGACION</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
             @endif()

          </tr>
          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='FB-TLR1')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="1">TALLER DE LECTURA Y REDACCIÓN I</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">TALLER DE LECTURA Y REDACCION I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">TALLER DE LECTURA Y REDACCION I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">TALLER DE LECTURA Y REDACCION I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">TALLER DE LA LECTURA Y REDACCION I</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
            @endif()  
          </tr>
          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='FB-ING1')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="1">INGLÉS I</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">INGLÉS I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">INGLÉS I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">INGLÉS I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">INGLÉS I</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
              @endif()  
            </tr>
          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='FB-INF1')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null and $MA='FB-INF1')
                  <td align="left" style="border: 1px solid black;"><font size="1">INFORMÁTICA I</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">INFORMÁTICA I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">INFORMÁTICA I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">INFORMÁTICA I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">INFORMÁTICA I</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
              @endif()  
            </tr>
          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='AP-ORE1')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true and $Ma=='AP-ORE1')
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="1">ORIENTACIÓN EDUCATIVA I</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">ORIENTACIÓN EDUCATIVA I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">ORIENTACIÓN EDUCATIVA I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">ORIENTACIÓN EDUCATIVA I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">ORIENTACIÓN EDUCATIVA I</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
            @endif()  
          </tr>
          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='AP-ADR1')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES DEPORTIVAS Y RECREATIVAS I</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES DEPORTIVAS Y RECREATIVAS I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES DEPORTIVAS Y RECREATIVAS I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES DEPORTIVAS Y RECREATIVAS I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES DEPORTIVAS Y RECREATIVAS I</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
            @endif()  
          </tr>
          <?php
            $B10=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='AP-AAC1')
                <?php $Ma10=$kar->Clave_M ?>
                <?php $B10=true ?>
               <?php $Ca10=$kar->Calificacion ?>
               <?php $F10=$kar->Fecha ?>
               <?php $OP10=$kar->Oportunidades ?>
            @endif()
          @endforeach()

          <tr>
            @if($B10==true)
                @if($OP10==null and $Ma10=='AP-AAC1')
                  <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES ARTÍSTICAS Y CULTURALES I</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca10 ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @elseif($OP10==1.00)
                    <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES ARTISTICAS Y CULTURALES I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F10 ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca10 ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP10==2.00)
                    <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES ARTISTICAS Y CULTURALES I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F10 ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca10 ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP10>=3.00)
                    <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES ARTISTICAS Y CULTURALES I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F10 ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca10 ?></td>
                  @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES ARTISTICAS Y CULTURALES I</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
            @endif()  
          </tr>
        </table>


          
{{-- _______________________________SEGUNDO_________________________________________________--}}
        <br>
        <p style="position: absolute;left: 10px"><font size="1">II SEGUNDO SEMESTRE</font></p>
        <p style="position: absolute;left: 180px"><font size="1">PERIODO ESCOLAR:</font></p>
        @foreach($Grup as $GR)
        <p style="position: absolute;left: 474px"><font size="2">{{$GR->Grupo}}</font></p>
        @endforeach()
        <p style="position: absolute;left: 430px"><font size="1">GRUPO:</font></p>
        
        <br><br>
        <table style="width: 100%; border-collapse: collapse">
          <tr>
            <th  align="left" rowspan="2" style=" border: 1px solid black;width: 43%"><font size="1">ASIGNATURAS</font></th>

            <th  align="left" rowspan="2" style="border: 1px solid black;"><font size="0">CALIFI CACIÓN FINAL</font></th>

            <th   align="left"  rowspan="2" style="border: 1px solid black;"><font size="0">% DE ASISTEN CIAS</font></th>

            <th align="center" colspan="6" style="border: 1px solid black;"><font size="1">PERIODO DE REGURRALIZACIÓN</font></th>

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

          <?php
            $B=false;
          ?>


          @foreach($kard as $kar)
            @if($kar->Clave_M=='FB-MAT2')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>  
              @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="1">MATEMATICAS II</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                @elseif($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">MATEMATICAS II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">MATEMATICAS II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">MATEMATICAS II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">MATEMATICAS II</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
              @endif()          
          </tr>
          <?php
            $B=false;
          ?>
          @foreach($kard as $kar)
            @if($kar->Clave_M=='FB-QUI2')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
                <?php $Ca=$kar->Calificacion ?>
                <?php $F=$kar->Fecha ?>
                <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="1">QUÍMICA II</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @elseif($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">QUÍMICA II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">QUÍMICA II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">QUÍMICA II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                      <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                @endif()
               @else
                  <td align="left" style="border: 1px solid black;"><font size="1">QUÍMICA II</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td> 
              @endif() 
            </tr>
          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='FB-ETI2')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null and $Ma=='FB-ETI2' )
                  <td align="left" style="border: 1px solid black;"><font size="1">ÉTICA II</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">ÉTICA II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">ÉTICA II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">ÉTICA II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td> 
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">ÉTICA II</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
              @endif()  
            </tr>
          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='FB-ILCS')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="1">INTRODUCCIÓN A LAS CIENCIAS SOCIALES</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">INTRODUCCIÓN A LAS CIENCIAS SOCIALES</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">INTRODUCCIÓN A LAS CIENCIAS SOCIALES</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">INTRODUCCIÓN A LAS CIENCIAS SOCIALES</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">INTRODUCCIÓN A LAS CIENCIAS SOCIALES</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
             @endif()

          </tr>
          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='FB-TLR2')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="1">TALLER DE LECTURA Y REDACCIÓN II</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">TALLER DE LECTURA Y REDACCION II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">TALLER DE LECTURA Y REDACCION II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">TALLER DE LECTURA Y REDACCION II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">TALLER DE LA LECTURA Y REDACCION II</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
            @endif()  
          </tr>
          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='FB-ING2')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="1">INGLÉS II</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">INGLÉS II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">INGLÉS II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">INGLÉS II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">INGLÉS II</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
              @endif()  
            </tr>
          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='FB-INF2')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null and $MA='FB-INF1')
                  <td align="left" style="border: 1px solid black;"><font size="1">INFORMÁTICA II</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">INFORMÁTICA II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">INFORMÁTICA II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">INFORMÁTICA II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">INFORMÁTICA II</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
              @endif()  
            </tr>
          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='AP-ORE1')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true and $Ma=='AP-ORE1')
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="1">ORIENTACIÓN EDUCATIVA II</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">ORIENTACIÓN EDUCATIVA II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">ORIENTACIÓN EDUCATIVA II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">ORIENTACIÓN EDUCATIVA II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">ORIENTACIÓN EDUCATIVA II</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
            @endif()  
          </tr>
          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='AP-ADR2')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES DEPORTIVAS Y RECREATIVAS II</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES DEPORTIVAS Y RECREATIVAS II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES DEPORTIVAS Y RECREATIVAS II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES DEPORTIVAS Y RECREATIVAS II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES DEPORTIVAS Y RECREATIVAS II</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
            @endif()  
          </tr>
          <?php
            $B10=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='AP-AAC2')
                <?php $Ma10=$kar->Clave_M ?>
                <?php $B10=true ?>
               <?php $Ca10=$kar->Calificacion ?>
               <?php $F10=$kar->Fecha ?>
               <?php $OP10=$kar->Oportunidades ?>
            @endif()
          @endforeach()

          <tr>
            @if($B10==true)
                @if($OP10==null and $Ma10=='AP-AAC2')
                  <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES ARTÍSTICAS Y CULTURALES II</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca10 ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @elseif($OP10==1.00)
                    <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES ARTISTICAS Y CULTURALES II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F10 ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca10 ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP10==2.00)
                    <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES ARTISTICAS Y CULTURALES II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F10 ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca10 ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP10>=3.00)
                    <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES ARTISTICAS Y CULTURALES II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F10 ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca10 ?></td>
                  @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES ARTISTICAS Y CULTURALES II</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
            @endif()  
          </tr>
        </table>
{{--_________________________________TERCER__________________________________________________________--}}
        <br>
        <p style="position: absolute;left: 10px"><font size="1">III TERCER SEMESTRE</font></p>
        <p style="position: absolute;left: 180px"><font size="1">PERIODO ESCOLAR:</font></p>

         @foreach($Grup as $GR)
          <p style="position: absolute;left: 474px"><font size="2">{{$GR->Grupo}}</font></p>
        @endforeach()
        <p style="position: absolute;left: 430px"><font size="1">GRUPO:</font></p>
        <br><br>
        <table style="width: 100%; border-collapse: collapse">
          <tr>
            <th  align="left" rowspan="2" style=" border: 1px solid black;width: 43%"><font size="1">ASIGNATURAS</font></th>

            <th  align="left" rowspan="2" style="border: 1px solid black;"><font size="0">CALIFI CACIÓN FINAL</font></th>

            <th   align="left"  rowspan="2" style="border: 1px solid black;"><font size="0">% DE ASISTEN CIAS</font></th>

            <th align="center" colspan="6" style="border: 1px solid black;"><font size="1">PERIODO DE REGURRALIZACIÓN</font></th>

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
          <?php
            $B=false;
          ?>


          @foreach($kard as $kar)
            @if($kar->Clave_M=='FB-MAT3')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>  
              @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="1">MATEMATICAS III</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                @elseif($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">MATEMATICAS III</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">MATEMATICAS III</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">MATEMATICAS III</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">MATEMATICAS III</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
              @endif()          
          </tr>
          <?php
            $B=false;
          ?>
          @foreach($kard as $kar)
            @if($kar->Clave_M=='FB-BIO1')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
                <?php $Ca=$kar->Calificacion ?>
                <?php $F=$kar->Fecha ?>
                <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="1">BIOLOGÍA I</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @elseif($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">BIOLOGÍA I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">BIOLOGÍA I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">BIOLOGÍA I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                      <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                @endif()
               @else
                  <td align="left" style="border: 1px solid black;"><font size="1">BIOLOGÍA I</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td> 
              @endif() 
            </tr>
          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='FB-FIS1')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null and $Ma=='FB-FIS1' )
                  <td align="left" style="border: 1px solid black;"><font size="1">FÍSICA I</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">FÍSICA I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">FÍSICA I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">FÍSICA I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td> 
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">FÍSICA I</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
              @endif()  
            </tr>
          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='FB-HIM1')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="1">HISTORIA DE MÉXICO I</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">HISTORIA DE MÉXICO I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">HISTORIA DE MÉXICO I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">HISTORIA DE MÉXICO I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">HISTORIA DE MÉXICO I</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
             @endif()

          </tr>
          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='FB-LIT1')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="1">LITERATURA I</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">LITERATURA I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">LITERATURA I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">LITERATURA I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">LITERATURA I</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
            @endif()  
          </tr>
          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='FB-ING3')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="1">INGLÉS III</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">INGLÉS III</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">INGLÉS III</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">INGLÉS III</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">INGLÉS III</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
              @endif()  
            </tr>
          <?php
            $B=false;
          ?>
          @foreach($bachi as $ba)
            <?php $Ft=$ba->Formación_Trabajo ?>
          @endforeach()

          @foreach($kard as $kar)
            @if($kar->Clave_M=='FT-FPT')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null and $MA='FT-FPT')
                  <td align="left" style="border: 1px solid black;"><font size="1">FORMACIÓN PARA EL TRABAJO</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">FORMACIÓN PARA EL TRABAJO</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">FORMACIÓN PARA EL TRABAJO</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">FORMACIÓN PARA EL TRABAJO</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">FORMACIÓN PARA EL TRABAJO</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
              @endif()  
            </tr>
          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='AP-ORE3')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true and $Ma=='AP-ORE1')
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="1">ORIENTACIÓN EDUCATIVA III</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">ORIENTACIÓN EDUCATIVA III</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">ORIENTACIÓN EDUCATIVA III</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">ORIENTACIÓN EDUCATIVA III</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">ORIENTACIÓN EDUCATIVA III</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
            @endif()  
          </tr>
          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='AP-ADR3')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES DEPORTIVAS Y RECREATIVAS III</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES DEPORTIVAS Y RECREATIVAS III</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES DEPORTIVAS Y RECREATIVAS III</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES DEPORTIVAS Y RECREATIVAS III</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES DEPORTIVAS Y RECREATIVAS III</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
            @endif()  
          </tr>
          <?php
            $B10=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='AP-AAC3')
                <?php $Ma10=$kar->Clave_M ?>
                <?php $B10=true ?>
               <?php $Ca10=$kar->Calificacion ?>
               <?php $F10=$kar->Fecha ?>
               <?php $OP10=$kar->Oportunidades ?>
            @endif()
          @endforeach()

          <tr>
            @if($B10==true)
                @if($OP10==null and $Ma10=='AP-AAC3')
                  <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES ARTÍSTICAS Y CULTURALES III</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca10 ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @elseif($OP10==1.00)
                    <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES ARTISTICAS Y CULTURALES III</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F10 ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca10 ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP10==2.00)
                    <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES ARTISTICAS Y CULTURALES III</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F10 ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca10 ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP10>=3.00)
                    <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES ARTISTICAS Y CULTURALES III</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F10 ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca10 ?></td>
                  @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES ARTISTICAS Y CULTURALES III</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
            @endif()  
          </tr>
        </table>

        
 {{-- _________________________________Cuarto___________________________________ --}}
        <br>
        <p style="position: absolute;left: 10px"><font size="1">IV CUARTO SEMESTRE</font></p>
        <p style="position: absolute;left: 180px"><font size="1">PERIODO ESCOLAR:</font></p>
         @foreach($Grup as $GR)
        <p style="position: absolute;left: 474px"><font size="2">{{$GR->Grupo}}</font></p>
        @endforeach()
        <p style="position: absolute;left: 430px"><font size="1">GRUPO:</font></p>
        <br><br>
        <table style="width: 100%; border-collapse: collapse">
          <tr>
            <th  align="left" rowspan="2" style=" border: 1px solid black;width: 43%"><font size="1">ASIGNATURAS</font></th>

            <th  align="left" rowspan="2" style="border: 1px solid black;"><font size="0">CALIFI CACIÓN FINAL</font></th>

            <th   align="left"  rowspan="2" style="border: 1px solid black;"><font size="0">% DE ASISTEN CIAS</font></th>

            <th align="center" colspan="6" style="border: 1px solid black;"><font size="1">PERIODO DE REGURRALIZACIÓN</font></th>

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
        <?php
            $B=false;
          ?>


          @foreach($kard as $kar)
            @if($kar->Clave_M=='FB-MAT4')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>  
              @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="1">MATEMATICAS IV</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                @elseif($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">MATEMATICAS IV</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">MATEMATICAS IV</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">MATEMATICAS IV</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">MATEMATICAS IV</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
              @endif()          
          </tr>
          <?php
            $B=false;
          ?>
          @foreach($kard as $kar)
            @if($kar->Clave_M=='FB-BIO2')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
                <?php $Ca=$kar->Calificacion ?>
                <?php $F=$kar->Fecha ?>
                <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="1">BIOLOGÍA II</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @elseif($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">BIOLOGÍA II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">BIOLOGÍA II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">BIOLOGÍA II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                      <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                @endif()
               @else
                  <td align="left" style="border: 1px solid black;"><font size="1">BIOLOGÍA II</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td> 
              @endif() 
            </tr>
          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='FB-FIS2')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null and $Ma=='FB-FIS2' )
                  <td align="left" style="border: 1px solid black;"><font size="1">FÍSICA II</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">FÍSICA II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">FÍSICA II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">FÍSICA II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td> 
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">FÍSICA II</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
              @endif()  
            </tr>
          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='FB-HIM2')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="1">HISTORIA DE MÉXICO II</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">HISTORIA DE MÉXICO II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">HISTORIA DE MÉXICO II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">HISTORIA DE MÉXICO II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">HISTORIA DE MÉXICO II</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
             @endif()

          </tr>
          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='FB-LIT2')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="1">LITERATURA II</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">LITERATURA II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">LITERATURA II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">LITERATURA II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">LITERATURA II</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
            @endif()  
          </tr>
          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='FB-ING4')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="1">INGLÉS IV</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">INGLÉS IV</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">INGLÉS IV</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">INGLÉS IV</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">INGLÉS IV</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
              @endif()  
            </tr>
          <?php
            $B=false;
          ?>
          @foreach($bachi as $ba)
            <?php $Ft=$ba->Formación_Trabajo ?>
          @endforeach()

          @foreach($kard as $kar)
            @if($kar->Clave_M=='FT-FPT1')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null and $MA='FT-FPT1')
                  <td align="left" style="border: 1px solid black;"><font size="1">FORMACIÓN PARA EL TRABAJO I</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">FORMACIÓN PARA EL TRABAJO I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">FORMACIÓN PARA EL TRABAJO I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">FORMACIÓN PARA EL TRABAJO I</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">FORMACIÓN PARA EL TRABAJO I</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
              @endif()  
            </tr>
          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='AP-ORE4')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true and $Ma=='AP-ORE4')
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="1">ORIENTACIÓN EDUCATIVA IV</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">ORIENTACIÓN EDUCATIVA IV</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">ORIENTACIÓN EDUCATIVA IV</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">ORIENTACIÓN EDUCATIVA IV</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">ORIENTACIÓN EDUCATIVA IV</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
            @endif()  
          </tr>
          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='AP-ADR4')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES DEPORTIVAS Y RECREATIVAS IV</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES DEPORTIVAS Y RECREATIVAS IV</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES DEPORTIVAS Y RECREATIVAS IV</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES DEPORTIVAS Y RECREATIVAS IV</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES DEPORTIVAS Y RECREATIVAS IV</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
            @endif()  
          </tr>
          <?php
            $B10=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='AP-AAC4')
                <?php $Ma10=$kar->Clave_M ?>
                <?php $B10=true ?>
               <?php $Ca10=$kar->Calificacion ?>
               <?php $F10=$kar->Fecha ?>
               <?php $OP10=$kar->Oportunidades ?>
            @endif()
          @endforeach()

          <tr>
            @if($B10==true)
                @if($OP10==null and $Ma10=='AP-AAC4')
                  <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES ARTÍSTICAS Y CULTURALES IV</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca10 ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @elseif($OP10==1.00)
                    <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES ARTISTICAS Y CULTURALES IV</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F10 ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca10 ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP10==2.00)
                    <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES ARTISTICAS Y CULTURALES IV</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F10 ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca10 ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP10>=3.00)
                    <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES ARTISTICAS Y CULTURALES IV</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F10 ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca10 ?></td>
                  @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES ARTISTICAS Y CULTURALES IV</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
            @endif()  
          </tr>
        </table>
{{--_________________________________QUINTO__________________________________________________________--}}
        <br>
        <p style="position: absolute;left: 10px"><font size="1">V QUINTO SEMESTRE</font></p>
        <p style="position: absolute;left: 180px"><font size="1">PERIODO ESCOLAR:</font></p>
         @foreach($Grup as $GR)
        <p style="position: absolute;left: 474px"><font size="2">{{$GR->Grupo}}</font></p>
        @endforeach()
        <p style="position: absolute;left: 430px"><font size="1">GRUPO:</font></p>
        <br><br>
        <table style="width: 100%; border-collapse: collapse">
          <tr>
            <th  align="left" rowspan="2" style=" border: 1px solid black;width: 43%"><font size="1">ASIGNATURAS</font></th>

            <th  align="left" rowspan="2" style="border: 1px solid black;"><font size="0">CALIFI CACIÓN FINAL</font></th>

            <th   align="left"  rowspan="2" style="border: 1px solid black;"><font size="0">% DE ASISTEN CIAS</font></th>

            <th align="center" colspan="6" style="border: 1px solid black;"><font size="1">PERIODO DE REGURRALIZACIÓN</font></th>

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

          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='FB-ETG')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>  
              @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="1">ETIMOLOGÍA GRECOLATINAS</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                @elseif($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">ETIMOLOGÍA GRECOLATINAS</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">ETIMOLOGÍA GRECOLATINAS</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">ETIMOLOGÍA GRECOLATINAS</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">ETIMOLOGÍA GRECOLATINAS</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
              @endif()          
          </tr>
          <?php
            $B=false;
          ?>
          @foreach($kard as $kar)
            @if($kar->Clave_M=='FB-GEO')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
                <?php $Ca=$kar->Calificacion ?>
                <?php $F=$kar->Fecha ?>
                <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="1">GEOGRAFÍA</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @elseif($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">GEOGRAFÍA</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">GEOGRAFÍA</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">GEOGRAFÍA</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                      <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                @endif()
               @else
                  <td align="left" style="border: 1px solid black;"><font size="1">GEOGRAFÍA</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td> 
              @endif() 
            </tr>
          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='FB-ESM')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null and $Ma=='FB-ESM' )
                  <td align="left" style="border: 1px solid black;"><font size="1">ESTRUCTURA SOCIOECONÓMICA DE MÉXICO</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">ESTRUCTURA SOCIOECONÓMICA DE MÉXICO</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">ESTRUCTURA SOCIOECONÓMICA DE MÉXICO</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">ESTRUCTURA SOCIOECONÓMICA DE MÉXICO</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td> 
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">ESTRUCTURA SOCIOECONÓMICA DE MÉXICO</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
              @endif()  
            </tr>

          <?php
            $B=false;
          ?>
          @foreach($bachi as $ba)
            <?php $Ft=$ba->Formación_Trabajo ?>
          @endforeach()

          @foreach($kard as $kar)
            @if($kar->Clave_M=='FT-FPT2')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null and $MA='FT-FPT2')
                  <td align="left" style="border: 1px solid black;"><font size="1">FORMACIÓN PARA EL TRABAJO II</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">FORMACIÓN PARA EL TRABAJO II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">FORMACIÓN PARA EL TRABAJO II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">FORMACIÓN PARA EL TRABAJO II</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">FORMACIÓN PARA EL TRABAJO II</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
              @endif()  
            </tr>
{{--_______________________________________________________________--}}
          @foreach($bachi as $ba)
              @if($ba->Bachillerato=='Físico Matemática')
                    <?php $M1='Temas Selectos de Física I' ?>
                    <?php $M2='Cálculo Diferencial' ?>
                    <?php $M3='Sociología I' ?>
                    <?php $M4='Probabilidad y Estadística I' ?>
                    <?php $C1='FM-TSF1' ?>
                    <?php $C2='FM-CAD' ?>
                    <?php $C3='FM-SOC1' ?>
                    <?php $C4='FM-PRE1' ?>
              @elseif($ba->Bachillerato=='Químico Biológica')
                    <?php $M1='Temas Selectos de Química I' ?>
                    <?php $M2='Temas Selectos de Biologída I' ?>
                    <?php $M3='Ciencias de la Salud I' ?>
                    <?php $M4='Probabilidad y Estadística I' ?>
                    <?php $C1='QB-TSQ1' ?>
                    <?php $C2='QB-TSB1' ?>
                    <?php $C3='QB-CIS1' ?>
                    <?php $C4='QB-PRE1' ?>
              @elseif($ba->Bachillerato=='Humanidades y Ciencias Sociales')
                    <?php $M1='Sociología I' ?>
                    <?php $M2='Psicología I' ?>
                    <?php $M3='Derecho I' ?>
                    <?php $M4='Probabilidad y Estadística I' ?>
                    <?php $C1='HCS-SOC1' ?>
                    <?php $C2='HCS-PSI1' ?>
                    <?php $C3='HCS-DER1' ?>
                    <?php $C4='HCS-PRE1' ?>
              @elseif($ba->Bachillerato=='Económico Administrativa')
                    <?php $M1='Administración I' ?>
                    <?php $M2='Economía I' ?>
                    <?php $M3='Matemáticas Financieras I' ?>
                    <?php $M4='Probabilidad y Estadística I' ?>
                    <?php $C1='EA-ADM1' ?>
                    <?php $C2='EA-ECO1' ?>
                    <?php $C3='EA-MAF1' ?>
                    <?php $C4='EA-PRE1' ?>
              @elseif($ba->Bachillerato=='')
                    <?php $M1='--' ?>
                    <?php $M2='--' ?>
                    <?php $M3='--' ?>
                    <?php $M4='--' ?>
                    <?php $C1='--' ?>
                    <?php $C2='--' ?>
                    <?php $C3='--' ?>
                    <?php $C4='--' ?>
              @endif()
          @endforeach()
          <?php
            $B=false;
          ?>
          @foreach($kard as $kar)
            @if($kar->Clave_M==$C1)
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M1?></font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $M1?></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M1?></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M1?></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M1?></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
             @endif()

          </tr>
          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M==$C2)
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M2?></font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M2?></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M2?></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M2?></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M2?></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
            @endif()  
          </tr>
          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M==$C3)
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M3?></font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M3?></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M3?></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M3?></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M3?></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
              @endif()  
            </tr>

         <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M==$C4)
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M4?></font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M4?></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M4?></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M4?></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M4?></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
              @endif()  
            </tr>
    {{--_____________________________________________________--}}
          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='AP-ORE5')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true and $Ma=='AP-ORE5')
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="1">ORIENTACIÓN EDUCATIVA V</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">ORIENTACIÓN EDUCATIVA V</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">ORIENTACIÓN EDUCATIVA V</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">ORIENTACIÓN EDUCATIVA V</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">ORIENTACIÓN EDUCATIVA V</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
            @endif()  
          </tr>
          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='AP-ADR5')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES DEPORTIVAS Y RECREATIVAS V</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES DEPORTIVAS Y RECREATIVAS V</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES DEPORTIVAS Y RECREATIVAS V</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES DEPORTIVAS Y RECREATIVAS V</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES DEPORTIVAS Y RECREATIVAS V</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
            @endif()  
          </tr>
          <?php
            $B10=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='AP-AAC5')
                <?php $Ma10=$kar->Clave_M ?>
                <?php $B10=true ?>
               <?php $Ca10=$kar->Calificacion ?>
               <?php $F10=$kar->Fecha ?>
               <?php $OP10=$kar->Oportunidades ?>
            @endif()
          @endforeach()

          <tr>
            @if($B10==true)
                @if($OP10==null and $Ma10=='AP-AAC5')
                  <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES ARTÍSTICAS Y CULTURALES V</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca10 ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @elseif($OP10==1.00)
                    <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES ARTISTICAS Y CULTURALES V</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F10 ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca10 ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP10==2.00)
                    <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES ARTISTICAS Y CULTURALES V</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F10 ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca10 ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP10>=3.00)
                    <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES ARTISTICAS Y CULTURALES V</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F10 ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca10 ?></td>
                  @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES ARTISTICAS Y CULTURALES V</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
            @endif()  
          </tr>
        </table>

        {{-- _________________________________SEXTO___________________________________ --}}
        <br><br><br><br>
        <p style="position: absolute;left: 10px"><font size="1">VI SEXTO SEMESTRE</font></p>
        <p style="position: absolute;left: 180px"><font size="1">PERIODO ESCOLAR:</font></p>
        @foreach($Grup as $GR)
        <p style="position: absolute;left: 474px"><font size="2">{{$GR->Grupo}}</font></p>
        @endforeach()
        <p style="position: absolute;left: 430px"><font size="1">GRUPO:</font></p>
        <br><br>
        <table style="width: 100%; border-collapse: collapse">
          <tr>
            <th  align="left" rowspan="2" style=" border: 1px solid black;width: 43%"><font size="1">ASIGNATURAS</font></th>

            <th  align="left" rowspan="2" style="border: 1px solid black;"><font size="0">CALIFI CACIÓN FINAL</font></th>

            <th   align="left"  rowspan="2" style="border: 1px solid black;"><font size="0">% DE ASISTEN CIAS</font></th>

            <th align="center" colspan="6" style="border: 1px solid black;"><font size="1">PERIODO DE REGURRALIZACIÓN</font></th>

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

          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='FB-FIL')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>  
              @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="1">FILOSOFIA</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                @elseif($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">FILOSOFIA</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">FILOSOFIA</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">FILOSOFIA</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">FILOSOFIA</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
              @endif()          
          </tr>
          <?php
            $B=false;
          ?>
          @foreach($kard as $kar)
            @if($kar->Clave_M=='FB-EMA')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
                <?php $Ca=$kar->Calificacion ?>
                <?php $F=$kar->Fecha ?>
                <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="1">ECOLOGIA Y MEDIO AMBIENTE</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @elseif($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">ECOLOGIA Y MEDIO AMBIENTE</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">ECOLOGIA Y MEDIO AMBIENTE</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">ECOLOGIA Y MEDIO AMBIENTE</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                      <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                @endif()
               @else
                  <td align="left" style="border: 1px solid black;"><font size="1">ECOLOGIA Y MEDIO AMBIENTE</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td> 
              @endif() 
            </tr>
          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='FB-HUC')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null and $Ma=='FB-ESM' )
                  <td align="left" style="border: 1px solid black;"><font size="1">HISTORIA UNIVERSAL CONTEMPORANEA</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">HISTORIA UNIVERSAL CONTEMPORANEA</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">HISTORIA UNIVERSAL CONTEMPORANEA</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">HISTORIA UNIVERSAL CONTEMPORANEA</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td> 
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">HISTORIA UNIVERSAL CONTEMPORANEA</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
              @endif()  
            </tr>

          <?php
            $B=false;
          ?>
          @foreach($bachi as $ba)
            <?php $Ft=$ba->Formación_Trabajo ?>
          @endforeach()

          @foreach($kard as $kar)
            @if($kar->Clave_M=='FT-FPT3')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null and $MA='FT-FPT3')
                  <td align="left" style="border: 1px solid black;"><font size="1">FORMACIÓN PARA EL TRABAJO III</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">FORMACIÓN PARA EL TRABAJO III</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">FORMACIÓN PARA EL TRABAJO III</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">FORMACIÓN PARA EL TRABAJO III</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">FORMACIÓN PARA EL TRABAJO III</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
              @endif()  
            </tr>
{{--_______________________________________________________________--}}
          @foreach($bachi as $ba)
              @if($ba->Bachillerato=='Físico Matemática')
                    <?php $M1='Temas Selectos de Física II' ?>
                    <?php $M2='Cálculo Integral' ?>
                    <?php $M3='Sociología II' ?>
                    <?php $M4='Probabilidad y Estadística II' ?>
                    <?php $C1='FM-TSF2' ?>
                    <?php $C2='FM-CAI' ?>
                    <?php $C3='FM-SOC2' ?>
                    <?php $C4='FM-PRE2' ?>
              @elseif($ba->Bachillerato=='Químico Biológica')
                    <?php $M1='Temas Selectos de Química II' ?>
                    <?php $M2='Temas Selectos de Biologída II' ?>
                    <?php $M3='Ciencias de la Salud II' ?>
                    <?php $M4='Probabilidad y Estadística II' ?>
                    <?php $C1='QB-TSQ2' ?>
                    <?php $C2='QB-TSB2' ?>
                    <?php $C3='QB-CIS2' ?>
                    <?php $C4='QB-PRE2' ?>
              @elseif($ba->Bachillerato=='Humanidades y Ciencias Sociales')
                    <?php $M1='Sociología II' ?>
                    <?php $M2='Psicología II' ?>
                    <?php $M3='Derecho II' ?>
                    <?php $M4='Probabilidad y Estadística II' ?>
                    <?php $C1='HCS-SOC2' ?>
                    <?php $C2='HCS-PSI2' ?>
                    <?php $C3='HCS-DER2' ?>
                    <?php $C4='HCS-PRE2' ?>
              @elseif($ba->Bachillerato=='Económico Administrativa')
                    <?php $M1='Administración II' ?>
                    <?php $M2='Economía II' ?>
                    <?php $M3='Matemáticas Financieras II' ?>
                    <?php $M4='Probabilidad y Estadística II' ?>
                    <?php $C1='EA-ADM2' ?>
                    <?php $C2='EA-ECO2' ?>
                    <?php $C3='EA-MAF2' ?>
                    <?php $C4='EA-PRE2' ?>
              @elseif($ba->Bachillerato=='')
                    <?php $M1='--' ?>
                    <?php $M2='--' ?>
                    <?php $M3='--' ?>
                    <?php $M4='--' ?>
                    <?php $C1='--' ?>
                    <?php $C2='--' ?>
                    <?php $C3='--' ?>
                    <?php $C4='--' ?>
              @endif()
          @endforeach()
          <?php
            $B=false;
          ?>
          @foreach($kard as $kar)
            @if($kar->Clave_M==$C1)
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M1?></font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $M1?></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M1?></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M1?></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M1?></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
             @endif()

          </tr>
          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M==$C2)
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M2?></font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M2?></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M2?></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M2?></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M2?></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
            @endif()  
          </tr>
          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M==$C3)
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M3?></font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M3?></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M3?></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M3?></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M3?></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
              @endif()  
            </tr>

         <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M==$C4)
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M4?></font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M4?></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M4?></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M4?></font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="2"><?php echo $M4?></font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
              @endif()  
            </tr>

          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='AP-ORE6')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true and $Ma=='AP-ORE6')
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="1">ORIENTACIÓN EDUCATIVA VI</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">ORIENTACIÓN EDUCATIVA VI</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">ORIENTACIÓN EDUCATIVA VI</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">ORIENTACIÓN EDUCATIVA VI</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">ORIENTACIÓN EDUCATIVA VI</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
            @endif()  
          </tr>
          <?php
            $B=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='AP-ADR6')
                <?php $Ma=$kar->Clave_M ?>
                <?php $B=true ?>
               <?php $Ca=$kar->Calificacion ?>
               <?php $F=$kar->Fecha ?>
               <?php $OP=$kar->Oportunidades ?>
            @endif()
          @endforeach()
          <tr>
            @if($B==true)
                @if($OP==null)
                  <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES DEPORTIVAS Y RECREATIVAS VI</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @else
                  @if($OP==1)
                    <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES DEPORTIVAS Y RECREATIVAS VI</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP==2)
                    <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES DEPORTIVAS Y RECREATIVAS VI</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP>=3)
                    <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES DEPORTIVAS Y RECREATIVAS VI</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca ?></td>
                  @endif()
                @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES DEPORTIVAS Y RECREATIVAS VI</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
            @endif()  
          </tr>
          <?php
            $B10=false;
          ?>

          @foreach($kard as $kar)
            @if($kar->Clave_M=='AP-AAC6')
                <?php $Ma10=$kar->Clave_M ?>
                <?php $B10=true ?>
               <?php $Ca10=$kar->Calificacion ?>
               <?php $F10=$kar->Fecha ?>
               <?php $OP10=$kar->Oportunidades ?>
            @endif()
          @endforeach()

          <tr>
            @if($B10==true)
                @if($OP10==null and $Ma10=='AP-AAC6')
                  <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES ARTÍSTICAS Y CULTURALES VI</font></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca10 ?></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  <td align="left" style="border: 1px solid black;"><font size="1"></td>
                @elseif($OP10==1.00)
                    <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES ARTISTICAS Y CULTURALES VI</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F10 ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca10 ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td> 
                  
                  @elseif($OP10==2.00)
                    <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES ARTISTICAS Y CULTURALES VI</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F10 ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca10 ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                  @elseif($OP10>=3.00)
                    <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES ARTISTICAS Y CULTURALES VI</font></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $F10 ?></td>
                    <td align="left" style="border: 1px solid black;"><font size="1"><?php echo $Ca10 ?></td>
                  @endif()
              @else
                <td align="left" style="border: 1px solid black;"><font size="1">ACTIVIDADES ARTISTICAS Y CULTURALES VI</font></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>
                <td align="left" style="border: 1px solid black;"><font size="1"></td>  
            @endif()  
          </tr>
        </table>
        </form>
        <br>
         <p style="position: absolute;left: 1px">______________________________________________</p>
        <br>
        <p style="position: absolute;left: 45px"><font size="2">NOMBRE Y FIRMA DEL (LA) DIRECTOR(A)</font></p>
        <p style="position: absolute;left: 400px"><font size="1">PROMEDIO DE</font></p>
        <br>
        <p style="position: absolute;left: 90px"><font size="2">DE LA ESCUELA</font></p>
        <p style="position: absolute;left: 395px"><font size="1">APROBECHAMIENTO:</font></p>
        <?php $suma=0?>
        <?php $conta=0?>
        <?php $Prome=0?>

        @foreach($kard as $kar)
          
          <?php $suma=$suma+$kar->Calificacion?>
          <?php $conta=$conta+1?>
        @endforeach()

        @if($suma>0)
          <?php $Prome=$suma/$conta?>
        @endif()
        <p style="position: absolute;left: 510px"><font size="1"><?php echo $Prome?></font></p>


        
        {{--<center>
        <left>
        </left>
        <right>
        </right>
      </center>--}}

 
    
    </body>

</html>
