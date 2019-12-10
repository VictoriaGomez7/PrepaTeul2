<style media="screen">


}
th, td {
   width: 25%;
   text-align: justify;
   vertical-align: top;
   border: 2px solid #000;
   border-collapse: collapse;
   padding: 0.3em;
   caption-side: bottom;
}
caption {
   padding: 0.3em;
   color: #fff;
    background: #000;
}
th {
   background: #eee;
}
</style>
<html>
    <head>
        <title>Prepa Teul </title>
    </head>

    <body>
        <div class="ContenImages" id="unouno" style="width:100%">
            <img style="width:30% ;height: 100%" class="card-img-top" src="images/{{$ImagenesEnDB[0]->Imagen}}">
            <img style="width:28% ;height: 100%" class="card-img-top" src="images/{{$ImagenesEnDB[1]->Imagen}}">
            <img style="width:25% ;height: 100%" class="card-img-top" src="images/{{$ImagenesEnDB[2]->Imagen}}">
            <img style="width:15% ;height: 100%" class="card-img-top" src="images/{{$ImagenesEnDB[3]->Imagen}}">
        </div>
        
        <center>
        <h1>Solicitud de Inscripción</h1>
        <table >
          <tr>
            <th  align="center">Matrícula</th>

              <td  align="justify">{{$row->Clave_A}}</td>

            <th   align="center">Alumno</th>

            <td align="justify">{{ $row->Nombre_A}}</td>
          </tr>

            <tr>
              <th   align="center">Padre</th>

              <td  align="justify">{{ $row->Nombre_P }}</td>

              <th   align="center">Madre</th>

              <td align="justify">{{ $row->Nombre_M}}</td>

            </tr>


          <tr>

            <th  align="center">Domicilio</th>

            <td align="justify">{{ $row->Domicilio}}</td>

            <th  align="center">Semestre</th>

            <td  align="justify">{{ $row->Semestre }}</td>

          </tr>

          <tr>
              <th align="center">Teléfono Tutor</th>

              <td align="justify">{{ $row->Telefono_T }}</td>

              <th align="center">Teléfono Alumno</th>

              <td align="justify">{{ $row->Telefono_A}}</td>
          </tr>
          <tr>

              <th   align="center">Población</th>

              <td  align="justify">{{ $row->Poblacion }}</td>

                <th  align="center">Municipio</th>

                <td align="justify">{{ $row->Municipio}}</td>

          </tr>

          <tr>
            <th   align="center">Fecha Nac</th>

            <td  align="justify">{{ $row->Fecha_Nac }}</td>

            <th  align="center">Grado</th>

            <td align="justify">{{ $row->Grado}}</td>
          </tr>

          <tr>
            <th  align="center">Edad</th>

            <td align="justify">{{ $row->Edad}}</td>

            <th   align="center">Email</th>

            <td  align="justify">{{ $row->Email }}</td>

          </tr>

          <tr>

              <th  align="center">CURP</th>

              <td align="justify">{{ $row->Curp}}</td>

              <th   align="center">NSS</th>

              <td  align="justify">{{ $row->NSS }}</td>

          </tr>
          <tr>
            <th  align="center">Sexo</th>

            <td align="justify">{{ $row->Sexo}}</td>
          </tr>

        </table>

        <h1>Requisitos</h1>

        <table>
          <tr>
            <th  align="center">A) Certificado de Secundaria</th>

            <td  align="justify">{{ $req->Requisito_A}}</td>
          </tr>

          <tr>
              <th   align="center">B) Acta de Nacimiento</th>

              <td  align="justify">{{ $req->Requisito_B}}</td>
          </tr>


          <tr>
            <th  align="center">C) CURP</th>

            <td align="justify">{{ $req->Requisito_C}}</td>
          </tr>

          <tr>
              <th align="center">D) Carta de Conducta</th>

              <td align="justify">{{ $req->Requisito_D}}</td>
          </tr>
          <tr>
              <th   align="center">E) 6 Fotografias tamaño infantil,blanco y negro (no instantáneas)</th>

              <td  align="justify">{{ $req->Requisito_E}}</td>
          </tr>

          <tr>
            <th   align="center">F) Ser alumno regular del grado anterior</th>

            <td  align="justify">{{ $req->Requisito_F}}</td>
          </tr>

          <tr>
            <th  align="center">G) Cubrir cuota semestral</th>

            <td align="justify">{{ $req->Requisito_G}}</td>
          </tr>

          <tr>
              <th  align="center">H) Firmar de conformidad padres y alumno en la hoja se solicitud de inscripción</th>

              <td align="justify">{{ $req->Requisito_H}}</td>
          </tr>
        </table>





<style media="screen">
table.tabla2,td:nth-child(1) {
width: 20px;

}

</style>

          <h1>Mis compromisos como estudiante</h1>
      		<table id="tabla2" >
      			<tr>

      				<th  align="center">Número</th>

      				<th align="center">Compromiso</th>
      			</tr>
            <?php
              $cont=1;
            ?>

      			@foreach($compromisos as $r)
      				<tr >
      					<td  align="center">{{$cont}}</td>

      					<td align="justify">{{ $r->compromiso }}</td>
               <?php
              $cont=$cont+1;
                ?>
      				</tr>

      				@endforeach
      		</table>
            <p>Teul de González Ortega, Zac.a <?php echo date("d/m/Y");?> </p>
</center>
          <center>
            <br><br>

          <p>__________________________</p>
          <pre>  Firma alumno  </pre>
        </center>
        <br><br>
        <center>
        <pre>__________________________                   __________________________</pre>
        <pre>Firma del padre o tutor                    Firma de la madre o tutor</pre>
      </center>


          <br>
          <h1>  Nuestros compromisos como familia</h1>
          <table>
            <tr>
              <th  align="center">Número</th>

              <th align="center">Compromiso</th>
            </tr>
             <?php
              $cont=1;
            ?>
            @foreach($compromisos2 as $r)

              <tr >
                <td  align="center">{{$cont}}</td>

                <td align="justify">{{ $r->compromiso }}</td>
                 <?php
              $cont=$cont+1;
                ?>
              </tr>
              @endforeach
          </table>
          <br><br>
          <center>
          <pre>__________________________                   __________________________</pre>
          <pre>Firma del padre o tutor                    Firma de la madre o tutor<pre>
        
        </center>
        <br>
        <br>
        <center>
        <p style="text-align:justify">“Los datos personales proporcionados y contenidos en el presente formato, serán tratados de conformidad a lo que establece la Ley de Protección de Datos Personales en posesión de los sujetos obligados del Estado de Zacatecas y el aviso de privacidad de la Secretaría de Educación de Zacatecas, el cual podrá consultar en la dirección electrónica: http://www.seduzac.gob.mx/portal/avisos_privacidad.php”</p>
</center>
      </body>


</html>
