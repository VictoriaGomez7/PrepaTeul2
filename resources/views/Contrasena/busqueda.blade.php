@if(isset($alumnos1A))
    @if (count($alumnos1A)>0)
        <table width="250%" style=" position: absolute;left: -100px;">
            <tr align="center">
                <td><b>Matrícula</b></td>
                <td><b>Nombre</b></td>
                <td><b>Contraseña</b></td>
                @foreach ($alumnos1A as $alumno)    
                    <tr align="center">      
                        <td height="50px">{{$alumno->Clave_A }}</td>
                        <td height="50px">{{$alumno->Nombre_A }}</td>
                        <td height="50px">{!! Form::open(['route'=>['contrasena.update',$alumno->Clave_A],'method'=>'PUT','files'=>false]) !!}<input type="submit"style="width:175%; left: -20%; background-color: gray" class="btn btn-warning " name="{{$alumno->Clave_A }}" value="ver" ></input >{!! Form::close() !!}</td>
                    </tr>
                @endforeach  
            </tr>
        </table>           
    @endif
@endif
