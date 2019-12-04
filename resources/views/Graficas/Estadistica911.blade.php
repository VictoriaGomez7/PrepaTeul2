@extends('layouts.app')
@section('content')
<html>
<body>
	<?php
		$Hombres=array();
		$Mujeres=array();
		//$Periodo=array();
		//$Grupo=array();
		//$Semestre=array();
		//______________________________
		//$treceh=0;
		$catorceh=0;
		$quinceh=0;
		$diesiseish=0;
		$diesisieteh=0;
		$diesiochoh=0;
		$diesinueveh=0;
		$veinteh=0;
		$veintiunoh=0;
		$veintidosh=0;
		$veintitresh=0;
		$veinticuatroh=0;
		$veinticincoh=0;

		//$trecem=0;
		$catorcem=0;
		$quincem=0;
		$diesiseism=0;
		$diesisietem=0;
		$diesiochom=0;
		$diesinuevem=0;
		$veintem=0;
		$veintiunom=0;
		$veintidosm=0;
		$veintitresm=0;
		$veinticuatrom=0;
		$veinticincom=0;

		$TotalH=0;
		$TotalM=0;



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

		$sql = "SELECT Edad,Sexo FROM alumnos";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
	    	
			while ($reg=mysqli_fetch_array($result))
			{
				//echo $reg['Sexo'];
				//echo $reg['Edad'];
				if($reg['Sexo']=='Hombre')
				{
					if($reg['Edad']=='14')
					{
						$catorceh=$catorceh+1;
						$TotalH=$TotalH+1;
					}
					if($reg['Edad']=='15')
					{
						$quinceh=$quinceh+1;
						$TotalH=$TotalH+1;
					}
					if($reg['Edad']=='16')
					{
						$diesiseish=$diesiseish+1;
						$TotalH=$TotalH+1;
					}
					if($reg['Edad']=='17')
					{
						$diesisieteh=$diesisieteh+1;
						$TotalH=$TotalH+1;
						//echo $reg['Sexo'];
						//echo $reg['Edad'];
						//echo $diesisieteh;
					}
					if($reg['Edad']=='18')
					{
						$diesiochoh=$diesiochoh+1;
						$TotalH=$TotalH+1;
					}
					if($reg['Edad']=='19')
					{
						$diesinueveh=$diesinueveh+1;
						$TotalH=$TotalH+1;
					}
					if($reg['Edad']=='20')
					{
						$veinteh=$veinteh+1;
						$TotalH=$TotalH+1;
					}
					if($reg['Edad']=='21')
					{
						$veintiunoh=$veintiunoh+1;
						$TotalH=$TotalH+1;
					}
					if($reg['Edad']=='22')
					{
						$veintidosh=$veintidosh+1;
						$TotalH=$TotalH+1;
					}
					if($reg['Edad']=='23')
					{
						$veintitresh=$veintitresh+1;
						$TotalH=$TotalH+1;
					}
					if($reg['Edad']=='24')
					{
						$veinticuatroh=$veinticuatroh+1;
						$TotalH=$TotalH+1;
					}
					if($reg['Edad']=='25' or $reg['Edad']=='26' or $reg['Edad']=='27' or $reg['Edad']=='28' or $reg['Edad']=='29' or $reg['Edad']=='30' or $reg['Edad']=='31' or $reg['Edad']=='32' or $reg['Edad']=='33')
					{
						$veinticincoh=$veinticincoh+1;
						$TotalH=$TotalH+1;
					}
				}
				else
				{
				
					if($reg['Edad']=='14')
					{
						$catorcem=$catorcem+1;
						$TotalM=$TotalM+1;
					}
					if($reg['Edad']=='15')
					{
						$quincem=$quincem+1;
						$TotalM=$TotalM+1;
					}
					if($reg['Edad']=='16')
					{
						$diesiseism=$diesiseism+1;
						$TotalM=$TotalM+1;
					}
					if($reg['Edad']=='17')
					{
						$diesisietem=$diesisietem+1;
						$TotalM=$TotalM+1;
					}
					if($reg['Edad']=='18')
					{
						$diesiochom=$diesiochom+1;
						$TotalM=$TotalM+1;
					}
					if($reg['Edad']=='19')
					{
						$diesinuevem=$diesinuevem+1;
						$TotalM=$TotalM+1;
					}
					if($reg['Edad']=='20')
					{
						$veintem=$veintem+1;
						$TotalM=$TotalM+1;
					}
					if($reg['Edad']=='21')
					{
						$veintiunom=$veintiunom+1;
						$TotalM=$TotalM+1;
					}
					if($reg['Edad']=='22')
					{
						$veintidosm=$veintidosm+1;
						$TotalM=$TotalM+1;
					}
					if($reg['Edad']=='23')
					{
						$veintitresm=$veintitresm+1;
						$TotalM=$TotalM+1;
					}
					if($reg['Edad']=='24')
					{
						$veinticuatrom=$veinticuatrom+1;
						$TotalM=$TotalM+1;
					}
					if($reg['Edad']=='25' or $reg['Edad']=='26' or $reg['Edad']=='27' or $reg['Edad']=='28' or $reg['Edad']=='29' or $reg['Edad']=='30' or $reg['Edad']=='31' or $reg['Edad']=='32' or $reg['Edad']=='33')
					{
						$veinticincom=$veinticincom+1;
						$TotalM=$TotalM+1;
					}	
				}
			//array_push($Grupo,$reg['Grupo']);
			//array_push($Semestre, $reg['Semestre']);
		    //array_push($Periodo, $reg["Periodo"]);


			}

		} 
		else {
	    	echo '0 resultados';
		}
		//array_push($Hombres, $treceh);
	    //array_push($Mujeres, $trecem);

	    array_push($Hombres, $catorceh);
	    array_push($Mujeres, $catorcem);

	    array_push($Hombres, $quinceh);
	    array_push($Mujeres, $quincem);

	    array_push($Hombres, $diesiseish);
	    array_push($Mujeres, $diesiseism);

	    array_push($Hombres, $diesisieteh);
	    array_push($Mujeres, $diesisietem);

	    array_push($Hombres, $diesiochoh);
	    array_push($Mujeres, $diesiochom);

	    array_push($Hombres, $diesinueveh);
	    array_push($Mujeres, $diesinuevem);

	    array_push($Hombres, $veinteh);
	    array_push($Mujeres, $veintem);

	    array_push($Hombres, $veintiunoh);
	    array_push($Mujeres, $veintiunom);

	    array_push($Hombres, $veintidosh);
	    array_push($Mujeres, $veintidosm);

	    array_push($Hombres, $veintitresh);
	    array_push($Mujeres, $veintitresm);

		array_push($Hombres, $veinticuatroh);
	    array_push($Mujeres, $veinticuatrom);

	    array_push($Hombres, $veinticincoh);
	    array_push($Mujeres, $veinticincom);

	    array_push($Hombres, $TotalH);
	    array_push($Mujeres, $TotalM);
		$conn->close();
	?> 
	<!--<h3 style="position: absolute;left:5%;position: absolute;left:5%;">Hombres</h3>
	<h3 style="position: absolute; left: 40%;">Mujeres</h3>
	<br-->
	<table style="position: absolute;top:10%;left:42%;width: 30%; border-collapse: collapse">
		<tr>
			<th align="center" style="border: 1px solid black;">Hombres</th>
			<th align="center" style="border: 1px solid black;">Mujeres</th>
			<th align="center" style="border: 1px solid black;">Total</th>
		</tr>
	@for($i=0;$i<count($Hombres);$i++ )
		<div>
			<tr>
				<td align="center" style="border: 1px solid black;">{{$Hombres[$i]}}</td>
				<td align="center" style="border: 1px solid black;">{{$Mujeres[$i]}}</td>
				<td align="center" style="border: 1px solid black;">{{$Hombres[$i]+$Mujeres[$i]}}</td>
			</tr>	
		</div>
	@endfor()
	</table>

	<h5 style="position: absolute;top:14.5%;left:28%;">14 años o menos</h5>
	<h5 style="position: absolute;top:19.5%;left:28%;">15 años</h5>
	<h5 style="position: absolute;top:24.5%;left:28%;">16 años</h5>
	<h5 style="position: absolute;top:29.5%;left:28%;">17 años</h5>
	<h5 style="position: absolute;top:34.5%;left:28%;">18 años</h5>
	<h5 style="position: absolute;top:39.5%;left:28%;">19 años</h5>
	<h5 style="position: absolute;top:44.5%;left:28%;">20 años</h5>
	<h5 style="position: absolute;top:49.5%;left:28%;">21 años</h5>
	<h5 style="position: absolute;top:54.5%;left:28%;">22 años</h5>
	<h5 style="position: absolute;top:59.5%;left:28%;">23 años</h5>
	<h5 style="position: absolute;top:64.5%;left:28%;">24 años</h5>
	<h5 style="position: absolute;top:69.5%;left:28%;">25 años o más</h5>
	<h5 style="position: absolute;top:74.5%;left:28%;">Total</h5>
</body>
</html>
@endsection