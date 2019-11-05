@if(isset($docente1A))
@if (count($docente1A)>0)
<table width="250%" style=" position: absolute;left: -100px;">
    <tr align="center">
        <td><b>Clave</b></td>
        <td><b>Nombre</b></td>
        <td><b>Contraseña</b></td>

    @foreach ($docente1A as $docente)    
    <tr align="center">      
       <td height="50px">{{$docente->Clave_D }}</td>
        <td height="50px">{{$docente->Nombre }}</td>
        <td height="50px">{!! Form::open(['route'=>['contrasena.edit',$docente->Clave_D],'method'=>'GET','files'=>false]) !!}<input type="submit"style="width:175%; left: -20%; background-color: gray" class="btn btn-warning "
         name="{{$docente->Clave_D }}" value="ver" ></input >{!! Form::close() !!}</td>
     </tr>
    @endforeach  
    </tr>
</table>           
@endif
@endif
