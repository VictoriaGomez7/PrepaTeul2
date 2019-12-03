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
		<div class="ContenImages" id="unouno"><img class="card-img-top" src="images/<?php echo e($ImagenesEnDB[0]->Imagen); ?>" style="height: 180px; width: 500px" ></div>
		<div class="ContenImages" id="dosdos"><img class="card-img-top" src="images/<?php echo e($ImagenesEnDB[1]->Imagen); ?>" style="height: 180px" ></div>
		<div class="ContenImages" id="trestres"><img class="card-img-top" src="images/<?php echo e($ImagenesEnDB[2]->Imagen); ?>"  style="height: 180px" ></div>
		<div class="ContenImages" id="cuatrocuatro"><img class="card-img-top" src="images/<?php echo e($ImagenesEnDB[3]->Imagen); ?>" style="height: 180px; width: 240px"></div>
		
		
		
        <!--<img src="/images/img2c.jpeg"  style=" width:100% ; height: 21% ">--></div>
</body>
</html><?php /**PATH C:\xampp\htdocs\PrepaTeul2\resources\views/interfazprincipal/image.blade.php ENDPATH**/ ?>