<html>

    <head>
      <title>Constancia</title>
     <script src="http://code.jquery.com//jquery.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

     
        

        <div class="ContenImages" id="unouno" style="width:100%">
            <img style="width:30% ;height: 100%" class="card-img-top" src="images/{{$ImagenesEnDB[0]->Imagen}}">
            <img style="width:28% ;height: 100%" class="card-img-top" src="images/{{$ImagenesEnDB[1]->Imagen}}">
            <img style="width:25% ;height: 100%" class="card-img-top" src="images/{{$ImagenesEnDB[2]->Imagen}}">
            <img style="width:15% ;height: 100%" class="card-img-top" src="images/{{$ImagenesEnDB[3]->Imagen}}">
        </div>
        </head>
<body>

   
    <table width="100%">
      <tr rowspan="4" collspan="4">
        <td width="20%">{{"   "}}</td>
        <td width="20%">{{"   "}}</td>
        <td width="15%">{{"    "}}</td>
        <td width="50%"><b>{{" ASUNTO: Carta de conducta"}}</b></td>
      </tr>
        <tr rowspan="4" collspan="4">
        <td width="20%">{{"   "}}</td>
        <td width="20%">{{"   "}}</td>
        <td width="15%">{{"    "}}</td>
        <td ><b>{{" "}}</b></td>
      </tr>
        <tr rowspan="4" collspan="4">
        <td width="20%">{{"   "}}</td>
        <td width="20%">{{"   "}}</td>  
        <td width="15%">{{"    "}}</td>
        <td ><b>{{" "}}</b></td>
      </tr>
        <tr rowspan="4" collspan="4">
        <td width="50%"><b>{{"A QUIEN CORRESPONDA.   "}}</b></td>
        <td >{{"   "}}</td>
        <td ">{{"    "}}</td>
        <td ><b>{{""}}</b></td>
      </tr>
      <tr collspan="4"></tr>
    </table>
    <br>
                   


                <div style="width: 665px; text-align:justify-all; position: absolute; ;left: 10px">   
             <p style="font-size: 13; font-family: Arial;text-align: justify; line-height: 2; word-spacing: 1;">
           El que suscribe Mtro. Hugo Ávila Gómez Director  de  la  Escuela  Preparatoria
          
           “González Ortega” clave: 32EBH0011K ubicada en el Teul de González Ortega,
           Zac.
           
          </p></div>
          
          <div style="position: absolute; top: 310px; text-align: center;">

        <p style="font-size: 14; font-family: Arial;text-align: center; word-spacing: 1;" > <b>HACE    CONSTAR </b></p>
            </div>
            <div style="position: absolute; top:360px; width: 550px">
         <?php

         ?>
         <?php
         $sexo1="Que";
         $sexo2="Que";
         $sexo3="Que";
         if($dato[1]=="Hombre"){
          $sexo1 .=" el alumno ";
          $sexo2=" el mencionado alumno ";
          $sexo3="el interesado";
         } else{

          $sexo1 .=" la alumna ";
          $sexo2=" la mencionada alumna ";
          $sexo3="la interesada";
         }

         
         ?>
        <div style="position: absolute; top: 18px; text-align: center; left: 200px;">
           <p style="font-size: 13; font-family: Arial;text-align: center;" >{{$sexo1.' '}}<b>{{$dato[0]}}</b></p>
         </div> 
         
      
     <div style="width: 665px;position: absolute; top: 32px; text-align: center; left: 25px; word-spacing: 1; ">
      <br><p style="font-size: 13; font-family: Arial;text-align: justify; line-height: 2;">Cursó en esta Institución, su Educación Media Superior en los periodos lectivos
        {{' '.$fecha3.' '}} en el área propedéutica de: <b>{{$dato[2]}}</b> asimismo, se hace constar, que{{$sexo2}} 
        durante su permanencia en esta Escuela, observó <b>{{$dato[3]}} CONDUCTA.</b> </p>
        </div>
         
         <div style="width: 665px;position: absolute; top: 245px; text-align: center; left: 25px;">
          <p style="font-size: 13; font-family: Arial;text-align: justify; line-height: 2;">
A petición de {{' '.$sexo3.' '}} para los usos legales que más convengan, se extiende la presente constancia.
</p></div>
        
     <div style="width: 665px;position: absolute; top: 350px; text-align: center; left: 25px;">
       
    
    
      
    
     <p style="font-size: 13; font-family: Arial;text-align: center; line-height: 2;"> A t e n t a m e n t e.<br>
Teul de González Ortega, Zac.,  <?php 
    $diaActual=date("d");
    $mesActual=date("m");
    $yearActual=date("o");
    $mes="";
    switch ($mesActual) {
      case 1:
        # code...
        $mes="ENERO";
        break;
        case 2:
          $mes="FEBRERO";
        break;
        case 3:
        # code...
        $mes="MARZO";
        break;
        case 4:
          $mes="ABRIL";
        break;
        case 5:
        # code...
        $mes="MAYO";
        break;
        case 6:
          $mes="JUNIO";
        break;
        case 7:
        # code...
        $mes="JULIO";
        break;
        case 8:
          $mes="AGOSTO";
        break;
        case 9:
        # code...
        $mes="SEPTIEMBRE";
        break;
        case 10:
          $mes="OCTUBRE";
        break;
        case 11:
        # code...
        $mes="NOVIEMBRE";
        break;
        case 12:
          $mes="DICIEMBRE";
        break;
    
    }
    $fechaActual=' '.$diaActual.' de '.$mes.' de '.$yearActual;
    echo $fechaActual;
    ?>
</p>
 </div>
  <div style="width: 665px;position: absolute; top: 450px; text-align: center; left: 25px;">
<p style="font-size: 13; font-family: Arial;text-align: center; line-height: 1.5;"><br> A t e n t a m e n t e .<br>


Mtro. Hugo Ávila Gómez<br>
Director de la Escuela
</p>
     </div> 

    </center>
      	
      </body>
    </head>