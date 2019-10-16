@extends('layouts.app')
@section('content')
<html>
<head>
        <style type="text/css">
            body {
            text-align: left; 
            background: white; 
            }
            h1 {
            padding-top: 1em; 
            }
            h1 small {
            white-space: nowrap; 
            }
            h2 {
            font-size: .6em; 
            }
            p {
            text-align: right; 
            padding: 1em; 
            }

            #graficos {
            display: inline-block; 
            margin: .5em auto; 
            padding: 0 .5em .5em; 
            border: .15em solid black; 
            font: 900 2em/1.2 sans-serif; 
            float: left; 
            border-radius: .25em; 
            }

            #graficos #vertical {
            display: inline-block; 
            height: 200px; width: 450px; 
            font: bold 18px/1 sans-serif; 
            background-color: lime; 
            background-image: repeating-linear-gradient(black 0, black 2px, gainsboro 2px, gainsboro 20px, black 20px); 
            border: inset; 
            }
            #graficos #vertical .torre {
            position: relative; 
            display: inline-block; 
            height: inherit; width: 48px; 
            margin: 0 24px; 
            font: bold 18px/1 sans-serif; 
            background-color: transparent; 
            background-image: linear-gradient(blue, blue); 
            background-size: 80% 0%; 
            background-position: center bottom; 
            background-repeat: no-repeat; 
            box-shadow: inset 0 20px 0 0 rgba(220,220,220,.7); 
            }
        </style>
 
    </head>
    <script type="text/javascript">
        function ajusta() {
        var torres = document.querySelectorAll("#graficos #vertical .torre"); 

        var elem = 0;  
        while(elem<torres.length) {
        torres[elem].style.transition = "background-size 1s ease-out "+(elem+4)+"s"; 
        torres[elem].style.backgroundSize = "80% "+ torres[elem].innerHTML; 
        elem++; 
        }; 

        }
        onload = ajusta;
    </script>
<body>
    <?php
        $Aprobados1=array();
        $Reprobados1=array();
        $Aprobados2=array();
        $Reprobados2=array();
        $Semestre=array();
        $Materia=array();
        $Grupo=array();
        $Periodo=array();
        //
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "prepateul";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT Aprobados1,Reprobados1,Aprobados2,Reprobados2,Semestre,Materia,Grupo,Periodo FROM estadistica_periodos";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            
            while ($reg=mysqli_fetch_array($result))
        {
            array_push($Grupo, $reg["Grupo"]);
            array_push($Aprobados1,$reg['Aprobados1']);
            array_push($Reprobados1, $reg['Reprobados1']);
            array_push($Aprobados2,$reg['Aprobados2']);
            array_push($Reprobados2, $reg['Reprobados2']);
            array_push($Semestre, $reg["Semestre"]);
            array_push($Materia, $reg["Materia"]);
            array_push($Periodo,$reg['Periodo']);
        }
        } 
        else {
            echo '0 resultados';
        }
        $conn->close();
    ?> 

    <h1>Estadísticas por periodo</h1>
        @for($i=0;$i<count($Grupo);$i++ )

            <div id="graficos">
                <h2>Grupo:{{$Grupo[$i]}}</h2>
                <h2>Semestre:{{$Semestre[$i]}}</h2>
                <h2>Periodo:{{$Periodo[$i]}}</h2>
                <h2>Materia:<?php echo $Materia[$i] ?></h2>
            <div id="vertical">
                <figure class="torre">{{$Aprobados1[$i]}}%</figure>
                <figure class="torre">{{$Reprobados1[$i]}}%</figure>
                <figure class="torre">{{$Aprobados2[$i]}}%</figure>
                <figure class="torre">{{$Reprobados2[$i]}}%</figure>
            </div>
            <h2 style="font-size:.4em">___Aprobados1____Repobrados1____Aprobados2____Reprobados2__</h2>
        </div>
        @endfor()
</body>
</html>
@endsection