
{!! Form::open(['route'=>['materia.destroy','a'],'method'=>'GET','files'=>false]) !!}
@if(isset($materias))
@if (count($materias)>0)
    @foreach ($materias as $materia)          
        
        <input type="submit" class="btn  btn-lg btn-success btn-block btn-signin" name="{{$materia->Clave_M }}" value="{{$materia->Clave_M }}   {{$materia->Nombre}}"></input >
    @endforeach             
@endif
@endif
@if(isset($materias2))
@if (count($materias2)>0)
    @foreach ($materias2 as $materia)          
       
        <input type="submit" class="btn  btn-lg btn-success btn-block btn-signin" name="{{$materia->Clave_M }}" value="{{$materia->Clave_M }} {{$materia->Nombre}}"></input >
    @endforeach             
@endif
@endif
@if(isset($materias1A))
@if (count($materias1A)>0)
    @foreach ($materias1A as $materia)          
       
        <input type="submit" class="btn  btn-lg btn-success btn-block btn-signin" name="{{$materia->Clave_M }}" value="{{$materia->Clave_M }} {{$materia->Nombre}}"></input >
    @endforeach             
@endif
@endif


@if(isset($materias2A))
@if (count($materias2A)>0)
    @foreach ($materias2A as $materia)          
       
        <input type="submit" class="btn  btn-lg btn-success btn-block btn-signin" name="{{$materia->Clave_M }}" value="{{$materia->Clave_M }} {{$materia->Nombre}}"></input >
    @endforeach             
@endif
@endif
<br>
{!! Form::close() !!}