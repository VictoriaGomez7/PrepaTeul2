<!DOCTYPE html>
<html>

    <head>
     <script src="http://code.jquery.com//jquery.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

          {{--@include('interfazprincipal.image')--}}
          @include('DocenteInterfazPrincipal.InterfazPrincipal')
    </head>
<body>

     @if (session()->has('MsjERR'))
     <script type="text/javascript">
       alert("¡ERROR");
     </script>
        <div class="alert alert-danger" role="alert" style="width: 90%; position:  absolute;top: 45%; left: 5%;z-index: 1;">
            <button class="close" data-dismiss="alert"><span>&times;</span></button>
            <strong>¡ERROR! </strong>{{ session('MsjERR') }}
        </div>
    @endif


 <section style="width: 100%; max-width: 100%; height:100%;max-height: 100%; background: #FFFFFF">

        <div class="card-header text-center" style="font-size:120%;width: 60%; height: 9.8%; background: #000080; color: rgb(212, 172, 13); position:  absolute;top: 42.5%; left: 25%;" > 
          {{ __($datos[3].' '.$datos[2].' '.$datos[1].' '.$datos[4]) }}


           </div> <div style="position: absolute;top: 52%; left: 25%; width: 60%; background-color:#aaa">
            
            <br><center>
               {!!Form::open(['route' => ['EvaluacionConducta.update'  ,$usua.'^'.$datos[2].'^'.$datos[3].'^'.$datos[4] ],'method'=>'PUT'])!!}
              
              {{ csrf_field() }}
              <table align="center" border="1" width="95%">
                <thead align="center">
                <td align="center"><b>Clave del alumno</b></td>
                <td align="center"><b>Nombre del alumno</b></td>
                <td align="center"><b>Evaluacion de conducta</b></td>
                 
               </thead>
               <?php
               $numero=0;
               $numero2=0;
            if(count($datos)>0){



            
            foreach ($datos[0] as $alumno) {

                ?>
               <tr align="justify">
                <td align="center">{{$alumno->Clave_A}}</td>
                <td align="center">{{$alumno->Nombre_A}}</td>
                
                  <?php 
                    if(count($datos)==5){

                    
                  ?>
                <td align="center">
                  <select name="combo{{$alumno->Clave_A}}" ="60%" >
                       <option value="EXCELENTE" >EXCELENTE</option>
                       <option value="MUY BUENA" >MUY BUENA</option>
                       <option value="BUENA" >BUENA</option>
                       <option value="REGULAR" >REGULAR</option>
                       
                  </select>
                </td>
               <?php 
                    }else{
                        foreach ($datos[5] as $dato) {
                          # code...
                          if($numero==$numero2){
                              ?>

                                <td align="center">
                              
                              <?php
                              if($dato->evaluacion=="EXCELENTE"){
                                ?>
                             <select name="combo{{$alumno->Clave_A}}" ="60%" >
                                   <option value="EXCELENTE" selected="true" >EXCELENTE</option>
                                     <option value="MUY BUENA" >MUY BUENA</option>
                                     <option value="BUENA" >BUENA</option>
                                    <option value="REGULAR" >REGULAR</option>
                       
                  </select>

                                <?php

                              }else if($dato->evaluacion=="MUY BUENA"){
                                  ?>
                                     <select name="combo{{$alumno->Clave_A}}" ="60%" >
                       <option value="EXCELENTE" >EXCELENTE</option>
                       <option value="MUY BUENA" selected="true">MUY BUENA</option>
                       <option value="BUENA" >BUENA</option>
                       <option value="REGULAR" >REGULAR</option>
                       
                  </select>
                                  <?php
                              }else if($dato->evaluacion=="BUENA"){
                                ?>
                                 <select name="combo{{$alumno->Clave_A}}" ="60%" >
                       <option value="EXCELENTE" >EXCELENTE</option>
                       <option value="MUY BUENA" >MUY BUENA</option>
                       <option value="BUENA" selected="true" >BUENA</option>
                       <option value="REGULAR" >REGULAR</option>
                       
                  </select>

                                <?php
                              }else if($dato->evaluacion=="REGULAR"){
                                ?>
                                   <select name="combo{{$alumno->Clave_A}}" ="60%" >
                       <option value="EXCELENTE" >EXCELENTE</option>
                       <option value="MUY BUENA" >MUY BUENA</option>
                       <option value="BUENA"  >BUENA</option>
                       <option value="REGULAR" selected="true" >REGULAR</option>
                       
                  </select>
                                <?php
                              }
                              ?>
                              </td>
                              <?php

                                $numero++;
                                break;
                          }else{
                            $numero2++;
                          }
                        }
                        $numero2=0;
                    }
                  ?>
              </tr>   

                <?php

              }
              }  
          ?>
          
        </table>
        <br>
        <input type="submit" name="boton" class="btn btn-primary" value="Aceptar"><br>
                {!! Form::close() !!}
              </center>
              
              </div>
            </section>
          </body>
          </html>
