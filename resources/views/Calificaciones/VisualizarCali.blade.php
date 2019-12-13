<!DOCTYPE html>
<a href="/DocenteInicios?valor={{ ($usua)}}">
    <button class="btn btn-success" style="position: absolute;top: 120%;left:85%;z-index: 1;">Cancelar</button></a>

<html>
	<head>
		<meta charset="utf-8">
	    <link rel="stylesheet" type="text/css" href="/css/style.css">
	    <link rel="stylesheet" type="text/css" href="/css/estilos2.css">
	    <link rel="stylesheet" type="text/css" href="/css/image.css">
		@extends('layouts.app')
		<title>Asignar Calificaciones</title>
	</head>

	<body>
		@if (session()->has('msj'))
	        <div class="alert alert-success" role="alert" style="width: 90%; position:  absolute; top: 44%; left: 5%;z-index: 1;">
	            <button class="close" data-dismiss="alert"><span>&times;</span></button>
	                <strong>¡Correcto! </strong>{{ session('msj') }}
	        </div>
    	@endif
    	@if (session()->has('msj2'))
	        <div class="alert alert-danger" role="alert" style="width: 90%; position:  absolute; top: 44%; left: 5%;z-index: 1;">
	            <button class="close" data-dismiss="alert"><span>&times;</span></button>
	                <strong>¡ERROR! </strong>{{ session('msj2') }}
	        </div>
    	@endif
		<style type="text/css">
			.NombreMateria{
				cursor: pointer;}
		</style>
		
		@include('DocenteInterfazPrincipal.InterfazPrincipal')

	 	<div class="card-header text-center" style="font-size:200%;width: 20%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 55%; left: 5%;" >{{ __('Materias') }}</div>
		<section style="background: #aaa; width:20%; height: 42%; position: absolute; top: 65%; left: 5%; overflow-y: scroll; text-align:  center;">

			@foreach($MateriasDelDocente as $MateriasDelDocent)

				{!!Form::open(['route' => ['AsignarCalificacion.store'],'method'=>'POST'])!!}
				<input type="submit" value="{{$MateriasDelDocent->Materia." ".$MateriasDelDocent->Grupo}}" name="MateriaSeleccionada" class="NombreMateria" style="background-color: #85C1E9; border: 2px solid #0000000; width: 200px;height: 40px; margin: 5px;" readonly>
				<input type="hidden" value="{{$MateriasDelDocent->Clave_M}}" name="ClaveMateriaSelec" >
				<input type="hidden" value="{{$MateriasDelDocent->Grupo}}" name="Grupo" >
				<input type="hidden" value="{{$id}}" name="idDocente" >
				<input type="hidden" value="{{$usua}}" name="usua" >
				{!! Form::Close() !!}

			@endforeach

		</section>
		<?php 
			view('DocenteInterfazPrincipal.InterfazPrincipal',compact('usua'));
		?>

		@if($visibility==1)
			{!! Form::open(['route'=>['AsignarCalificacion.edit',$usua],'method'=>'GET']) !!}
				<div class="card-header text-center" style="font-size:200%;width: 69%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 55%; left: 26%;" >{{ __($Materiasele)}}</div>

				<div class="card-header text-center" style="font-size:100%;width: 70%; height:51%; background: white; overflow-y: scroll; color: rgb(212, 172, 13); position:  absolute;top: 65%; left: 25%;" >
					<table  id="alumn" class="table" style="width: 100%">
				        <tr style="font-size:100%">
				        	<th  align="center" style="width:2%">{{ ('Matrícula') }}</th>
				        	<th  align="center">{{ ('Alumno') }}</th>
				          	<th  align="center">{{ ('Parcial 1') }}</th>
				          	<th  align="center">{{ ('Faltas') }}</th>
				          	<th  align="center">{{ ('Número de Clases') }}</th>
				          	<th  align="center">{{ ('Parcial 2') }}</th>
				          	<th  align="center">{{ ('Faltas') }}</th>
				          	<th  align="center">{{ ('Número de Clases') }}</th>
				          	<th  align="center">{{ 'Promedio' }}
				          	<th  align="center">{{ ('Semestral ') }}</th>
				          	<th  align="center">{{ 'Promedio' }}

				        </tr>
			        
			        	<?php $contador=0;
			        		$Con_cal=0;
			        		$contador_Clases=0;
			        		$contador_Clases2=0;
			        		$contador_posiciones_faaltas=0; ?>
				        	
					        @foreach($AlumnosEnMismoSemestre as $AlumnosEnMismoSemestr)

						        <input type="hidden" name="ClaveA[]" value="{{ $AlumnosEnMismoSemestr[$contador]->Clave_A}}">
						        <input type="hidden" name="ClaveM" value="{{$Calif_Extraidas[$contador]->ClaveM}}">
						        <input type="hidden" name="Semestre" value="{{$Calif_Extraidas[$contador]->Semestre}}">
						        <input type="hidden" name="Año" value="{{$Calif_Extraidas[$contador]->Año}}">
						        <input type="hidden" name="Usua" value="{{ __($usua)}}">
						        <input type="hidden" value="{{$Grupo_Seleccionado}}" name="Grupo_Selec" >

							    <tr>
						            <td>{{ $AlumnosEnMismoSemestr[$contador]->Clave_A }}</td>
						            <td >{{ $AlumnosEnMismoSemestr[$contador]->Nombre_A}}</td>
						            @if($PeriodoActivo==1)
						            	<td><input type="number" id="Cal1{{$Con_cal}}" onkeyup="calificacionesp1()" step="0.1" name="Calif1[]" min="0" max="10" value="{{$Calif_Extraidas[$Con_cal]->Parcial1}}"> </td>

						            	<td><input required type="number"min="0" value="{{$Faltas_Extraidas[$contador_posiciones_faaltas]->Faltas}}" name="Faltas[]" style="width: 100%;" ></td>

						            	<?php if ($contador_Clases==0){ ?>

							 			<td><input required type="number" min="1"name="NumTotalAsis" style="width: 100%;" value="{{$Faltas_Extraidas[$Con_cal]->Faltas+$Faltas_Extraidas[$Con_cal]->Asistencias}}"></td>

							 			<?php $contador_Clases=$contador_Clases+1; }else { ?>

							 			<td><input required disabled type="number"min="1" max="25" name="NumTotalAsis" style="width: 100%;" ></td>

							 			<?php }  ?>

						            	<td><input hidden="" type="number" step="0.1" name="Calif2[]" min="0"  max="10" value="{{$Calif_Extraidas[$Con_cal]->Parcial2}}">


						            	<input disabled="" id="Cal2{{$Con_cal}}" type="number" step="0.1" min="0"  max="10" name="Calif2[]" value="{{$Calif_Extraidas[$Con_cal]->Parcial2}}"></td>
						            	<?php $contador_posiciones_faaltas=$contador_posiciones_faaltas+1;?>
						            	<td><input required disabled="" type="number"min="0"name="Faltas2[]" style="width: 90%;" value="{{$Faltas_Extraidas[$contador_posiciones_faaltas]->Faltas}}"></td>

						            	<?php if ($contador_Clases2==0){ ?>

							 			<td><input required disabled="" type="number" min="1"name="NumTotalAsis2" style="width: 90%;" ></td>

							 			<?php $contador_Clases2=$contador_Clases2+1; }else { ?>

							 			<td><input required disabled type="number"min="1" max="25" name="NumTotalAsis2" style="width: 90%;" ></td>

							 			<?php }  ?>

							 			<td><input required disabled type="number"min="0" id="Promedo1{{$Con_cal}}" name="Promedo1" value="{{($Calif_Extraidas[$Con_cal]->Parcial1+$Calif_Extraidas[$Con_cal]->Parcial2)/2}}" style="width: 50%;" ></td>

						            	<td><input disabled="" type="number" step="0.1" min="0"  max="10" name="Semestral[]" value="{{$Calif_Extraidas[$Con_cal]->Semestral}}">
						            	<input hidden="" type="number" step="0.1" min="0"  max="10" name="Semestral[]" value="{{$Calif_Extraidas[$Con_cal]->Semestral}}"></td>
						 				
						 				<?php $promedi=((($Calif_Extraidas[$Con_cal]->Parcial1+$Calif_Extraidas[$Con_cal]->Parcial2)/2)+$Calif_Extraidas[$Con_cal]->Semestral)/2;
					            		if ($promedi<6){
					            			$promedi=5;
					            		} else {
					            			$promedi=round($promedi);
					            		} ?>
						 				<td><input required disabled id="Promedofinal{{$Con_cal}}" value="{{$promedi}}" type="number"min="0"name="Promedofinal[]" style="width: 50%;" > <input required hidden="" id="Promedofinal{{$Con_cal}}" value="{{$promedi}}" type="number"min="0"name="Promedofinal[]" style="width: 50%;" ></td>

					            	

						 			
						            @elseif($PeriodoActivo==2)
					            		<input hidden=""  type="number" step="0.1" min="0"  max="10" name="Calif1[]" value="{{$Calif_Extraidas[$Con_cal]->Parcial1}}">
					            		<td><input disabled id="Cali1{{$Con_cal}}" type="number" min="0"  max="10" step="0.1" name="Calif1[]" value="{{$Calif_Extraidas[$Con_cal]->Parcial1}}"> </td>

					            		<td><input required disabled="" type="number"min="0" max="25" name="Faltas[]" style="width: 100%;" value="{{$Faltas_Extraidas[$contador_posiciones_faaltas]->Faltas}}"></td>

						            	<?php if ($contador_Clases==0){ ?>

							 			<td><input required disabled="" type="number"min="1" max="25" name="NumTotalAsis" style="width: 100%;" ></td>

							 			<?php $contador_Clases=$contador_Clases+1; }else { ?>

							 			<td><input required disabled  type="number"min="1" max="25" name="NumTotalAsis" style="width: 100%;" ></td>

							 			<?php }  ?>

					            		<td><input type="number" id="Cali2{{$Con_cal}}" step="0.1" min="0"  max="10" onkeyup="calificacionesp2()" name="Calif2[]" value="{{$Calif_Extraidas[$Con_cal]->Parcial2}}"></td>

					            		<td><input required type="number"min="0" max="25" name="Faltas[]" style="width: 100%;" value="{{$Faltas_Extraidas[$contador_posiciones_faaltas]->Faltas}}"></td>

						            	<?php if ($contador_Clases2==0){ ?>

							 			<td><input required type="number"min="1" max="25" name="NumTotalAsis" style="width: 100%;" value="{{$Faltas_Extraidas[$Con_cal]->Faltas+$Faltas_Extraidas[$Con_cal]->Asistencias}}"></td>

							 			<?php $contador_Clases2=$contador_Clases2+1; } else { ?>

							 			<td><input required disabled  type="number"min="1" max="25" name="NumTotalAsis" style="width: 100%;" ></td>

							 			<?php } ?>

							 			<td><input required disabled type="number"min="0" id="Promedo1{{$Con_cal}}" name="Promedo1" value="{{($Calif_Extraidas[$Con_cal]->Parcial1+$Calif_Extraidas[$Con_cal]->Parcial2)/2}}" style="width: 50%;" > </td>

					            		<td><input disabled="" type="number" step="0.1" min="0"  max="10" name="Semestral[]" value="{{$Calif_Extraidas[$Con_cal]->Semestral}}" >
					            		<input hidden="" type="number" step="0.1" min="0"  max="10" name="Semestral[]" value="{{$Calif_Extraidas[$Con_cal]->Semestral}}" ></td>


					            		<?php $promedi=((($Calif_Extraidas[$Con_cal]->Parcial1+$Calif_Extraidas[$Con_cal]->Parcial2)/2)+$Calif_Extraidas[$Con_cal]->Semestral)/2;
					            		if ($promedi<6){
					            			$promedi=5;
					            		} else {
					            			$promedi=round($promedi);
					            		} ?>
					            		<td><input required id="Promedofinal{{$Con_cal}}" disabled value="{{$promedi}}" type="number"min="0"name="Promedofinal" style="width: 50%;" > </td>
					            		
					            		

					            	

						 			
					            	@elseif($PeriodoActivo==3)
					            		<input hidden="" id="Calif1{{$Con_cal}}" type="number" step="0.1" min="0"  	max="10" name="Calif1[]" value="{{$Calif_Extraidas[$Con_cal]->Parcial1}}">


							            <input hidden="" id="Calif2{{$Con_cal}}" type="number" step="0.1" min="0" max="10" name="Calif2[]" value="{{$Calif_Extraidas[$Con_cal]->Parcial2}}">							            						            
					            		<td><input disabled type="number" step="0.1" min="0" max="10" name="Calif1[]" value="{{$Calif_Extraidas[$Con_cal]->Parcial1}}"> </td>

					            		<td><input disabled="" type="number"min="0" max="25" name="Faltas[]" style="width: 100%;" value="{{$Faltas_Extraidas[$contador_posiciones_faaltas]->Faltas}}"></td>

						            	<?php if ($contador_Clases==0){ ?>

							 			<td><input disabled="" type="number"min="1" max="25" name="NumTotalAsis" style="width: 100%;" ></td>

							 			<?php $contador_Clases=$contador_Clases+1; }else { ?>

							 			<td><input required disabled  type="number"min="1" max="25" name="NumTotalAsis" style="width: 100%;" ></td>

							 			<?php }  ?>
					            		

					            		<td><input disabled type="number" step="0.1" min="0" max="10" name="Calif2[]" value="{{$Calif_Extraidas[$Con_cal]->Parcial2}}"></td>

					            		<td><input disabled="" type="number"min="0" max="25" name="Faltas[]" style="width: 100%;" value="{{$Faltas_Extraidas[$contador_posiciones_faaltas]->Faltas}}"></td>

						            	<?php if ($contador_Clases2==0){ ?>

							 			<td><input disabled="" type="number"min="1" max="25" name="NumTotalAsis" style="width: 100%;" ></td>
					            		
					            		<?php $contador_Clases2=$contador_Clases2+1; } else { ?>

							 			<td><input required disabled  type="number"min="1" max="25" name="NumTotalAsis" style="width: 100%;" ></td>

							 			<?php } ?>

							 			<td><input required disabled type="number"min="0"name="Promedo1" value="{{($Calif_Extraidas[$Con_cal]->Parcial1+$Calif_Extraidas[$Con_cal]->Parcial2)/2}}" style="width: 50%;" ></td>

					            		<td><input required type="number" id="Semestral{{$Con_cal}}" onkeyup="metodo()" step="0.1" min="0"  max="10" name="Semestral[]" value="{{$Calif_Extraidas[$Con_cal]->Semestral}}" >
					            		 </td>
					            		<?php $promedi=((($Calif_Extraidas[$Con_cal]->Parcial1+$Calif_Extraidas[$Con_cal]->Parcial2)/2)+$Calif_Extraidas[$Con_cal]->Semestral)/2;
					            		if ($promedi<6){
					            			$promedi=5;
					            		} else {
					            			$promedi=round($promedi);
					            		} ?>
					            		<td><input required disabled id="Promedofinal{{$Con_cal}}" value="{{$promedi}}" type="number"min="0"name="Promedofinal" style="width: 50%;" ></td>

					            	

						 			
					            	@else
							            <input hidden="" type="number" step="0.1" min="0"  max="10" name="Calif1[]" value="{{$Calif_Extraidas[$Con_cal]->Parcial1}}">



							            <input hidden="" type="number" step="0.1" min="0" max="10" name="Calif2[]" value="{{$Calif_Extraidas[$Con_cal]->Parcial2}}">
					            		<td><input disabled type="number" step="0.1" min="0" max="10" name="Calif1[]" value="{{$Calif_Extraidas[$Con_cal]->Parcial1}}"> </td>

					            		<td><input disabled="" type="number"min="0" max="25" name="Faltas[]" style="width: 100%;" value="{{$Faltas_Extraidas[$contador_posiciones_faaltas]->Faltas}}"></td>

						            	<?php if ($contador_Clases==0){ ?>

							 			<td><input required disabled  type="number"min="1" max="25" name="NumTotalAsis" style="width: 100%;" ></td>

							 			<?php $contador_Clases=$contador_Clases+1; } else { ?>

							 			<td><input required type="number"min="1" max="25" name="NumTotalAsis" style="width: 100%;" value="{{$Faltas_Extraidas[$Con_cal]->Faltas+$Faltas_Extraidas[$Con_cal]->Asistencias}}"></td>

							 			<?php } ?> 

					            		<td><input disabled type="number" step="0.1" min="0" max="10" name="Calif2[]" value="{{$Calif_Extraidas[$Con_cal]->Parcial2}}"></td>

					            		<td><input disabled="" type="number"min="0" max="25" name="Faltas[]" style="width: 100%;" value="{{$Faltas_Extraidas[$contador_posiciones_faaltas]->Faltas}}"></td>

						            	<?php if ($contador_Clases2==0){ ?>

							 			<td><input required type="number"min="1" max="25" name="NumTotalAsis" style="width: 100%;" value="{{$Faltas_Extraidas[$Con_cal]->Faltas+$Faltas_Extraidas[$Con_cal]->Asistencias}}"></td>

							 			<?php $contador_Clases2=$contador_Clases2+1; } else { ?>

							 			<td><input required disabled  type="number"min="1" max="25" name="NumTotalAsis" style="width: 100%;" ></td>

							 			<?php } ?>

							 			<td><input required disabled value="{{($Calif_Extraidas[$Con_cal]->Parcial1+$Calif_Extraidas[$Con_cal]->Parcial2)/2}}" type="number"min="0"name="Promedo1" style="width: 50%;" ></td>

					            		<td><input disabled="" type="number" step="0.1" min="0"  max="10" name="Semestral[]" value="{{$Calif_Extraidas[$Con_cal]->Semestral}}" >
					            		<input hidden="" type="number" step="0.1" min="0"  max="10" name="Semestral[]" value="{{$Calif_Extraidas[$Con_cal]->Semestral}}"></td>

					            		<?php $promedi=((($Calif_Extraidas[$Con_cal]->Parcial1+$Calif_Extraidas[$Con_cal]->Parcial2)/2)+$Calif_Extraidas[$Con_cal]->Semestral)/2;
					            		if ($promedi<6){
					            			$promedi=5;
					            		} else {
					            			$promedi=round($promedi);
					            		} ?>
					            		<td><input required disabled id="Promedofinal{{$Con_cal}}" value="{{$promedi}}" type="number"min="0"name="Promedofinal" style="width: 50%;" ></td>
					            		


					            	

						 			
					            	@endif
					            	<?php $Prome=($Calif_Extraidas[$Con_cal]->Parcial1+$Calif_Extraidas[$Con_cal]->Parcial2)/2; ?>
					            	<!--<td> {{$Prome}} </td>-->
					            	
				          		</tr>
				        		<?php $contador=$contador+0;
				        		$Con_cal=$Con_cal+1; 
				        		$contador_posiciones_faaltas=$contador_posiciones_faaltas+1;?>
				        	@endforeach
				        	

			    	</table>
			    	<input hidden="" type="number" step="0.1" min="0"  max="10" name="Periodo" value="{{$PeriodoActivo}}" >
			    	<script type="text/javascript">
			    		function calificacionesp1(){
			    			var cantidadcal  = '<?php echo $Con_cal; ?>';
			    			for (var i = 0; i < cantidadcal; i++) {
			    				var Cali1=document.getElementById("Cal1"+i).value;
			    				var Cali2=document.getElementById("Cal2"+i).value;
			    				Cali1=parseFloat(Cali1);
			    				Cali2=parseFloat(Cali2);
			    				var prom=0.0;
			    				prom=(Cali1+Cali2)/2;
			    				if (prom>6 && prom<10) {
			    					document.getElementById('Promedo1'+i).value=prom;
			    				} else if (prom>10) {
			    					prom=10
			    					document.getElementById('Promedo1'+i).value=prom;
			    				} else {
			    					prom=5;
			    					document.getElementById('Promedo1'+i).value=prom;
			    				}
			    				if (Cali1!=""){
			    					if (Cali1>10){
			    					alert("La Calificación no puede ser mayor a 10");
			    					
				    				}
			    				} 
			    			}
			    		}
			    		function calificacionesp2(){
			    			var cantidadcal  = '<?php echo $Con_cal; ?>';
			    			for (var i = 0; i < cantidadcal; i++) {
			    				var Cali1=document.getElementById("Cali1"+i).value;
			    				var Cali2=document.getElementById("Cali2"+i).value;
			    				Cali1=parseFloat(Cali1);
			    				Cali2=parseFloat(Cali2);
			    				var prom=0.0;
			    				prom=(Cali1+Cali2)/2;
			    				if (prom>6 && prom<10) {
			    					document.getElementById('Promedo1'+i).value=prom;
			    				} else if (prom>10) {
			    					prom=10
			    					document.getElementById('Promedo1'+i).value=prom;
			    				} else {
			    					prom=5;
			    					document.getElementById('Promedo1'+i).value=prom;
			    				}
			    				if (Cali1!=""){
			    					if (Cali1>10){
			    					alert("La Calificación no puede ser mayor a 10");
			    					
				    				}
			    				} 
			    			}
			    		}
			    		function metodo(){
			    			//Mensajes en JavaScript son alert,confirm y prompt: alert para mandar un mensaje, confirm para usar un aceptar y un cancelar de opción, y prompt es para que pueda guardar un mesaje, jeje xD nomas dejo esta nota por si la ocupan. ATTE: toño xD
			    			var cantidadcal  = '<?php echo $Con_cal; ?>';
			    			for (var i = 0; i < cantidadcal; i++) {
			    				var Cali=document.getElementById("Semestral"+i).value;
			    				var Cali1=document.getElementById("Calif1"+i).value;
			    				var Cali2=document.getElementById("Calif2"+i).value;
			    				Cali=parseFloat(Cali);
			    				Cali1=parseFloat(Cali1);
			    				Cali2=parseFloat(Cali2);
			    				var prom=0.0;
			    				prom=(Cali1+Cali2)/2;
			    				//alert(prom);
			    				prom=(Cali+prom)/2;
			    				//alert(prom);
			    				//prom=parseInt(prom);
			    				if (prom>6 && prom<10) {
			    					prom=Math.round(prom);
			    					document.getElementById('Promedofinal'+i).value=prom;
			    				} else if (prom>10) {
			    					prom=10
			    					document.getElementById('Promedofinal'+i).value=prom;
			    				}else{
			    					prom=5;
			    					document.getElementById('Promedofinal'+i).value=prom;
			    				}
			    				

			    				if (Cali!=""){
			    					if (Cali>10){
			    					alert("La Calificación no puede ser mayor a 10");
			    					
				    				}
			    				} 
			    				
			    				
			    			}
			    			//alert(jsvar);
			    			//var letra=document.getElementById("Semestral6").value;
			    			//alert(arreglo1);
			    			//alert(arreglocal1);
			    			//alert(arreglocal2);
			    			//alert(arreglopromediofinal);

			    		}

			    	</script>
				</div>
				@if($PeriodoActivo<=3)
				{!!Form::submit('Guardar',['class'=>'btn btn-primary','style'=>'position: absolute; top: 120%;left:75%;'])!!}
				@endif
			{!! Form::close()!!}

		@elseif($visibility==2)
			<div class="card-header text-center" style="font-size:135%;width: 30%; height:15%; background: #FFFFFF; color: rgb(26, 35, 126); position:  absolute;top: 77%; left: 45%;" >{{ __(' ') }}</div>
		@else
			<div class="card-header text-center" style="font-size:200%;width: 69%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 55%; left: 26%;" >{{ __($Materiasele)}}</div>
			<div class="card-header text-center" style="font-size:135%;width: 30%; height:15%; background: #839192; color: rgb(26, 35, 126); position:  absolute;top: 77%; left: 45%;" >{{ __('No hay alumnos registrados en esta materia.') }}</div>
		@endif
	</body>
</html>