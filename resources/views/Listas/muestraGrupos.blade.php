<html>

    <head>
     <script src="http://code.jquery.com//jquery.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

     
        

        <div class="ContenImages" id="unouno" style="width:100%">
            <img style="width:30% ;height: 100%" class="card-img-top" src="images/{{$ImagenesEnDB[0]->Imagen}}">
            <img style="width:28% ;height: 100%" class="card-img-top" src="images/{{$ImagenesEnDB[1]->Imagen}}">
            <img style="width:25% ;height: 100%" class="card-img-top" src="images/{{$ImagenesEnDB[2]->Imagen}}">
            <img style="width:15% ;height: 100%" class="card-img-top" src="images/{{$ImagenesEnDB[3]->Imagen}}">
        </div>
<body>

    <br>
    <br><br>
             <left>
              <h2>{{$titulo}} </h2>
               <table width="100%" left="5px" align="left" border="1">
          <tr>
           <td><b>Número</b></td>
            <td width="15%" align="left"><b>Matrícula</b></td>
             <td width="85%" align="left"><b>Alumno</b></td>
          </tr>
          
        
           
          
          <?php
            $num=0;
            foreach ($listaA as $r) {
                $num+=1;
                ?>
                <tr>
                  <td>{{$num}}</td>
                  <td>
               <label > {{ $r->Clave_A }}</label> </td>
                  <td>
               <label > {{ $r->Nombre_A }}</label> </td></tr>
                <?php
              }  
          ?>
       
             
          </table>
          </left>

              </div></div>
         </div>



        </div> 
      </body>
    </head>