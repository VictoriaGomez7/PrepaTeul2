
{!! Form::open(['route'=>['materia.destroy','a'],'method'=>'GET','files'=>false]) !!}
@if(isset($materias))
@if (count($materias)>0)
    @foreach ($materias as $materia)          
        
        <input type="submit"  style="width:175%; left: -20%;" class="btn btn-secondary  " name="{{$materia->Clave_M }}" value=" {{$materia->Clave_A }} {{$materia->Nombre_A }}   {{$materia->Nombre_M}}" "></input ><br><br>
    @endforeach             
@endif
@endif
@if(isset($materias2))
@if (count($materias2)>0)
    @foreach ($materias2 as $materia)          
       
        <input type="submit" style="width:175%; left: -20%;" class="btn btn-secondary " name="{{$materia->Clave_M }}" value="materias {{$materia->Clave_A }} {{$materia->Nombre_A}}" "></input ><br><br>
    @endforeach             
@endif
@endif
@if(isset($materias1A))
@if (count($materias1A)>0)
    @foreach ($materias1A as $materia)          
       
        <input type="submit"style="width:175%; left: -20%; background-color: gray" class="btn btn-secondary "
         name="{{$materia->Clave_A }}" value="1A {{$materia->Clave_A }} {{$materia->Nombre_A}}" "></input ><br><br>
    @endforeach             
@endif
@endif


@if(isset($materias2A))
@if (count($materias2A)>0)
    @foreach ($materias2A as $materia)          
       
        <input type="submit"style="width:175%;" class="btn btn-secondary " name="{{$materia->Clave_A }}" value="2A {{$materia->Clave_A }} {{$materia->Nombre_A}}" "></input ><br>
        <br>
    @endforeach             
@endif
@endif
<br>
{!! Form::close() !!}