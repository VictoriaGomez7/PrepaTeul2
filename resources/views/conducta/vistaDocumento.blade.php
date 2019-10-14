<html>

    <head>
     <script src="http://code.jquery.com//jquery.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

     
        

          <img src="{{public_path('images\logoDoc.png')}}" style=" left: 10px">
       
      <br>
      <br>
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
    <center align="justify">
                   
             <p width= align="justify">
           El que suscribe Mtro. Hugo Ávila Gómez Director  de  la  Escuela  Preparatoria
           <br>
           “González Ortega” clave: 32EBH0011K ubicada en el Teul de González Ortega,
           <br><p align="left">Zac.</p>
        	</p><br><br>
        <p> <h3>H A C E      C O N S T A R</h3></p>
        		<br>
        		<br>
         <?php

         ?>
         Que <?php
         $sexo1="";
         $sexo2="";
         $sexo3="";
         if($dato[1]=="Hombre"){
         	$sexo1 =" el alumno ";
         	$sexo2=" el mencionado alumno ";
         	$sexo3="el interesado";
         } else{
         	$sexo1 =" la alumna ";
         	$sexo2=" la mencionada alumna ";
         	$sexo3="la interesada";
         }
         echo $sexo1;
         ?>
          <b>{{$dato[0]}}</b>
      <p>Cursó en esta Institución, su Educación Media Superior en los periodos lectivos
      	<br>2016-2017, 2017-2018 y 2018-2019 en el área propedéutica de: <b>{{$dato[2]}}</b><br> asimismo, se hace constar, que{{$sexo2}} 
      	<br>durante su permanencia en esta Escuela, observó <b>{{$dato[3]}} CONDUCTA.</b>	</p>
      	<p>A petición de {{$sexo3}} para los usos legales que más convengan, se extiende<br> la presente constancia.</p>
      	<br>
      	<br>
      	<p>	A t e n t a m e n t e.<br>
Teul de González Ortega, Zac.,
</p>
<br>	
<p>	A t e n t a m e n t e .<br>


Mtro. Hugo Ávila Gómez<br>
Director de la Escuela
</p>
      </center>

      </body>
    </head>