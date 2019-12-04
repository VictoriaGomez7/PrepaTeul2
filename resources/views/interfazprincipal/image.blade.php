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
		$totalogos=Logos::where('Nombre_Imagen','Imagen1')->get();
        $sinimagen='SinImagen.jpg';
        //return $sinimagen;
        if (count($totalogos)==0) {
            $nuevoLogo= new Logos();
            $nuevoLogo->Nombre_Imagen='Imagen1';
            $nuevoLogo->Imagen=$sinimagen;
            $nuevoLogo->save();}
        $totalogos=Logos::where('Nombre_Imagen','Imagen2')->get();
        if (count($totalogos)==0) {
            $nuevoLogo= new Logos();
            $nuevoLogo->Nombre_Imagen='Imagen2';
            $nuevoLogo->Imagen=$sinimagen;
            $nuevoLogo->save();}
        $totalogos=Logos::where('Nombre_Imagen','Imagen3')->get();
        if (count($totalogos)==0) {
            $nuevoLogo= new Logos();
            $nuevoLogo->Nombre_Imagen='Imagen3';
            $nuevoLogo->Imagen=$sinimagen;
            $nuevoLogo->save();}
        $totalogos=Logos::where('Nombre_Imagen','Imagen4')->get();
        if (count($totalogos)==0) {
            $nuevoLogo= new Logos();
            $nuevoLogo->Nombre_Imagen='Imagen4';
            $nuevoLogo->Imagen=$sinimagen;
            $nuevoLogo->save();}
		$ImagenesEnDB=Logos::all();
				?>
		<div class="ContenImages" id="unouno"><img class="card-img-top" src="/images/{{$ImagenesEnDB[0]->Imagen}}" style="height: 150px;" ></div>
		<div class="ContenImages" id="dosdos"><img class="card-img-top" src="/images/{{$ImagenesEnDB[1]->Imagen}}" style="height: 150px;" ></div>
		<div class="ContenImages" id="trestres"><img class="card-img-top" src="/images/{{$ImagenesEnDB[2]->Imagen}}"  style="height: 150px;" ></div>
		<div class="ContenImages" id="cuatrocuatro"><img class="card-img-top" src="/images/{{$ImagenesEnDB[3]->Imagen}}" style="height: 150px;"></div>


		
		
		
        <!--<img src="/images/img2c.jpeg"  style=" width:100% ; height: 21% ">--></div>
</body>
</html>