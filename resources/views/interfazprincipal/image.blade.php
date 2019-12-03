<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<header>	
	<link rel="stylesheet" type="text/css" href="/css/imagenes.css">
		 
</header>
<body>
		 
		<?php use App\Logos;
					$ImagenesEnDB=Logos::all();
				?>

		<div class="ContenImages" id="unouno"><img class="card-img-top" src="/images/{{$ImagenesEnDB[0]->Imagen}}" style="height: 150px;" ></div>
		<div class="ContenImages" id="dosdos"><img class="card-img-top" src="/images/{{$ImagenesEnDB[1]->Imagen}}" style="height: 150px;" ></div>
		<div class="ContenImages" id="trestres"><img class="card-img-top" src="/images/{{$ImagenesEnDB[2]->Imagen}}"  style="height: 150px;" ></div>
		<div class="ContenImages" id="cuatrocuatro"><img class="card-img-top" src="/images/{{$ImagenesEnDB[3]->Imagen}}" style="height: 150px;"></div>

		
		
		
        <!--<img src="/images/img2c.jpeg"  style=" width:100% ; height: 21% ">--></div>
</body>
</html>