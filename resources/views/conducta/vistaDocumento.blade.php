<html>

    <head>
      <title>Constancia</title>
     <script src="http://code.jquery.com//jquery.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

     
        

          <img src="{{public_path('images\LogoPrepaTeul.jpg')}}" style="height:100px;  left: 10px">
       
      <br>
      <br>
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
                   


                <div style="width: 700px; text-align:justify-all; position: absolute; ;left: 10px">   
             <p style="font-size: 14; font-family: Arial;text-align: justify; line-height: 2;">
           El que suscribe Mtro. Hugo Ávila Gómez Director  de  la  Escuela  Preparatoria
          
           “González Ortega” clave: 32EBH0011K ubicada en el Teul de González Ortega,
           Zac.
           
          </p></div>
          
          <div style="position: absolute; top: 310px; text-align: center;">

        <p style="font-size: 14; font-family: Arial;text-align: center; word-spacing: 3;" > <b>HACE    CONSTAR </b></p>
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
           <p style="font-size: 14; font-family: Arial;text-align: center;" >{{$sexo1.' '}}<b>{{$dato[0]}}</b></p>
         </div> 
         
      
     <div style="width: 700px;position: absolute; top: 32px; text-align: center; left: 25px; word-spacing: 10; ">
      <br><p style="font-size: 13; font-family: Arial;text-align: justify; line-height: 2;">Cursó en esta Institución, su Educación Media Superior en los periodos lectivos
        2016-2017, 2017-2018 y 2018-2019 en el área propedéutica de: <b>{{$dato[2]}}</b> asimismo, se hace constar, que{{$sexo2}} 
        durante su permanencia en esta Escuela, observó <b>{{$dato[3]}} CONDUCTA.</b> </p>
        </div>
         
         <div style="width: 700px;position: absolute; top: 245px; text-align: center; left: 25px;">
          <p style="font-size: 13; font-family: Arial;text-align: justify; line-height: 2;">
A petición de {{' '.$sexo3.' '}} para los usos legales que más convengan, se extiende la presente constancia.
</p></div>
        
     <div style="width: 700px;position: absolute; top: 350px; text-align: center; left: 25px;">
       
    
    
      
    
     <p style="font-size: 13; font-family: Arial;text-align: center; line-height: 2;"> A t e n t a m e n t e.<br>
Teul de González Ortega, Zac.,  <?php 
    $fechaActual=date(" j  F y");
    echo $fechaActual;
    ?>
</p>
 </div>
  <div style="width: 700px;position: absolute; top: 450px; text-align: center; left: 25px;">
<p style="font-size: 13; font-family: Arial;text-align: center; line-height: 1.5;"><br> A t e n t a m e n t e .<br>


Mtro. Hugo Ávila Gómez<br>
Director de la Escuela
</p>
     </div> 

    </center>
      	
      </body>
    </head>