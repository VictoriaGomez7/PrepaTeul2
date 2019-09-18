<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreTrainerRequest;
use App\materia;
use App\materia_grupo;
use App\Http\Requests\TagStoreRequestMaterias;
class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

     // $materias=materia::all();
      return view('materias.consulta');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(TagStoreRequestMaterias $request)
    {       //return $request;
            //Arreglo de numero romanos
            $bandera1=0;
            $bandera4=0;
            $Romanos=array('I','II','III',"IV",'V','VI' );
            $Romanosara=array('1','2','3',"4",'5','6' );
            $Quitar=array('a','del','la',"para",'de','y','el' );
            $Auxiliar=array();
            //Extraer el nombre se la materia en una variable($Nombremat)
            $Nombremat=utf8_decode($request['nombre']);
            //Extraer el tipo de materia en una varible ($Tipomat)
            $Tipomat=$request['tipo'];
            $Clavemat='';
            //Separar por palabras el nombre
            $Nombrediv = explode(" ", $Nombremat);
            //Saber el tipo a guardar
            switch ($Tipomat) {
              case 'Formación Básica':
                $Clavemat=$Clavemat.'FB-';
                break;
              case 'Formación Propedéutica':
                  switch ($request['bachillerato']) {
                    case 'Químico Biológico':
                      $Clavemat=$Clavemat.'QB-';
                      break;
                    case 'Físico Matemático':
                      $Clavemat=$Clavemat.'FM-';
                      break;
                    case 'Ciencias Sociales y Humanidades':
                      $Clavemat=$Clavemat.'CSH-';
                      break;

                    default:
                      $Clavemat=$Clavemat.'EA-';
                      break;
                  }
                break;
              case 'Formación Para El Trabajo':
                    $Clavemat=$Clavemat.'FT-';
                break;

              default:
                $Clavemat=$Clavemat.'AP-';
                break;
            }
            //Proceso si solo es una Palabra
            if (count($Nombrediv)==1) {
              for ($i=0; $i <3 ; $i++) {

                switch (utf8_encode(strtolower($Nombremat[$i]))) {
                  case 'á':
                    $Clavemat=$Clavemat.'A';
                    break;
                  case 'é':
                    $Clavemat=$Clavemat.'E';
                    break;
                  case 'í':
                    $Clavemat=$Clavemat.'I';
                    break;
                  case 'ó':
                    $Clavemat=$Clavemat.'O';
                    break;
                  case 'ú':
                    $Clavemat=$Clavemat.'U';
                    break;

                  default:
                    $Clavemat=$Clavemat.strtoupper($Nombremat[$i]);
                    break;
                }
              }
            }

            //Si son dos palabras
            elseif (count($Nombrediv)==2) {
              $prim=$Nombrediv[0];
              $seg=$Nombrediv[1];

              //Aqui se hace la comparacion para ver si hay un numero romano
              for ($i=0; $i <count($Romanos) ; $i++) {
                if ($seg==$Romanos[$i]) {
                  $bandera1=1;
                }
              }

          if ($bandera1==1) {
            for ($i=0; $i <3 ; $i++) {

              switch (utf8_encode(strtolower($prim[$i]))) {
                case 'á':
                  $Clavemat=$Clavemat.'A';
                  break;
                case 'é':
                  $Clavemat=$Clavemat.'E';
                  break;
                case 'í':
                  $Clavemat=$Clavemat.'I';
                  break;
                case 'ó':
                  $Clavemat=$Clavemat.'O';
                  break;
                case 'ú':
                  $Clavemat=$Clavemat.'U';
                  break;

                default:
                  $Clavemat=$Clavemat.utf8_encode(strtoupper($prim[$i]));
                  break;
              }
            }
            for ($i=0; $i <count($Romanos) ; $i++) {
              if ($seg==$Romanos[$i]) {
                $Clavemat=$Clavemat.$Romanosara[$i];
              }
          }
        }
        //No hay numero romanos
        else {
          for ($i=0; $i <2 ; $i++) {

            switch (utf8_encode(strtolower($prim[$i]))) {
              case 'á':
                $Clavemat=$Clavemat.'A';
                break;
              case 'é':
                $Clavemat=$Clavemat.'E';
                break;
              case 'í':
                $Clavemat=$Clavemat.'I';
                break;
              case 'ó':
                $Clavemat=$Clavemat.'O';
                break;
              case 'ú':
                $Clavemat=$Clavemat.'U';
                break;

              default:
                $Clavemat=$Clavemat.utf8_encode(strtoupper($prim[$i]));
                break;
            }
          }
          switch (utf8_encode(strtolower($seg[0]))) {
            case 'á':
              $Clavemat=$Clavemat.'A';
              break;
            case 'é':
              $Clavemat=$Clavemat.'E';
              break;
            case 'í':
              $Clavemat=$Clavemat.'I';
              break;
            case 'ó':
              $Clavemat=$Clavemat.'O';
              break;
            case 'ú':
              $Clavemat=$Clavemat.'U';
              break;

            default:
              $Clavemat=$Clavemat.utf8_encode(strtoupper($seg[0]));
              break;
          }

        }
      }
        //Aqui va la condicion por si son mas de 2 palabras
        elseif (count($Nombrediv)>2) {
          for ($i=0; $i <count($Nombrediv) ; $i++) {
            $bandera2=0;
            for ($j=0; $j <count($Quitar) ; $j++) {
              if ($Nombrediv[$i]==$Quitar[$j]) {
                $bandera2=1;

              }
            }
            if ($bandera2!=1) {
              array_push ( $Auxiliar , $Nombrediv[$i]);
            }
          }
                if (count($Auxiliar)==1) {
                  for ($i=0; $i <3 ; $i++) {

                    switch (utf8_encode(strtolower($Nombremat[$i]))) {
                      case 'á':
                        $Clavemat=$Clavemat.'A';
                        break;
                      case 'é':
                        $Clavemat=$Clavemat.'E';
                        break;
                      case 'í':
                        $Clavemat=$Clavemat.'I';
                        break;
                      case 'ó':
                        $Clavemat=$Clavemat.'O';
                        break;
                      case 'ú':
                        $Clavemat=$Clavemat.'U';
                        break;

                      default:
                        $Clavemat=$Clavemat.strtoupper($Nombremat[$i]);
                        break;
                    }
                  }
                }


                //Si son dos palabras
                elseif (count($Auxiliar)==2) {
                  $prim=$Auxiliar[0];
                  $seg=$Auxiliar[1];

                  //Aqui se hace la comparacion para ver si hay un numero romano
                  for ($i=0; $i <count($Romanos) ; $i++) {
                    if ($seg==$Romanos[$i]) {
                      $bandera1=1;
                    }
                  }

              if ($bandera1==1) {
                for ($i=0; $i <3 ; $i++) {

                  switch (utf8_encode(strtolower($prim[$i]))) {
                    case 'á':
                      $Clavemat=$Clavemat.'A';
                      break;
                    case 'é':
                      $Clavemat=$Clavemat.'E';
                      break;
                    case 'í':
                      $Clavemat=$Clavemat.'I';
                      break;
                    case 'ó':
                      $Clavemat=$Clavemat.'O';
                      break;
                    case 'ú':
                      $Clavemat=$Clavemat.'U';
                      break;

                    default:
                      $Clavemat=$Clavemat.utf8_encode(strtoupper($prim[$i]));
                      break;
                  }
                }
                for ($i=0; $i <count($Romanos) ; $i++) {
                  if ($seg==$Romanos[$i]) {
                    $Clavemat=$Clavemat.$Romanosara[$i];
                  }
              }
            }
            //No hay numero romanos
            else {
              for ($i=0; $i <2 ; $i++) {

                switch (utf8_encode(strtolower($prim[$i]))) {
                  case 'á':
                    $Clavemat=$Clavemat.'A';
                    break;
                  case 'é':
                    $Clavemat=$Clavemat.'E';
                    break;
                  case 'í':
                    $Clavemat=$Clavemat.'I';
                    break;
                  case 'ó':
                    $Clavemat=$Clavemat.'O';
                    break;
                  case 'ú':
                    $Clavemat=$Clavemat.'U';
                    break;

                  default:
                    $Clavemat=$Clavemat.utf8_encode(strtoupper($prim[$i]));
                    break;
                }
              }
              switch (utf8_encode(strtolower($seg[0]))) {
                case 'á':
                  $Clavemat=$Clavemat.'A';
                  break;
                case 'é':
                  $Clavemat=$Clavemat.'E';
                  break;
                case 'í':
                  $Clavemat=$Clavemat.'I';
                  break;
                case 'ó':
                  $Clavemat=$Clavemat.'O';
                  break;
                case 'ú':
                  $Clavemat=$Clavemat.'U';
                  break;

                default:
                  $Clavemat=$Clavemat.utf8_encode(strtoupper($seg[0]));
                  break;
              }

            }
          }
          elseif (count($Auxiliar)==3) {
              $bandera3=0;
              for ($i=0; $i <count($Romanos) ; $i++) {
                if ($Auxiliar[2]==$Romanos[$i]) {
                  $bandera3=1;
                }
              }
              if ($bandera3==1) {
                $prim=$Auxiliar[0];
                $seg=$Auxiliar[1];
                $ter=$Auxiliar[2];
                switch (utf8_encode(strtolower($prim[0]))) {
                  case 'á':
                    $Clavemat=$Clavemat.'A';
                    break;
                  case 'é':
                    $Clavemat=$Clavemat.'E';
                    break;
                  case 'í':
                    $Clavemat=$Clavemat.'I';
                    break;
                  case 'ó':
                    $Clavemat=$Clavemat.'O';
                    break;
                  case 'ú':
                    $Clavemat=$Clavemat.'U';
                    break;

                  default:
                    $Clavemat=$Clavemat.utf8_encode(strtoupper($prim[0]));
                    break;
              }
              switch (utf8_encode(strtolower($prim[1]))) {
                case 'á':
                  $Clavemat=$Clavemat.'A';
                  break;
                case 'é':
                  $Clavemat=$Clavemat.'E';
                  break;
                case 'í':
                  $Clavemat=$Clavemat.'I';
                  break;
                case 'ó':
                  $Clavemat=$Clavemat.'O';
                  break;
                case 'ú':
                  $Clavemat=$Clavemat.'U';
                  break;

                default:
                  $Clavemat=$Clavemat.utf8_encode(strtoupper($prim[1]));
                  break;
            }
            switch (utf8_encode(strtolower($seg[0]))) {
              case 'á':
                $Clavemat=$Clavemat.'A';
                break;
              case 'é':
                $Clavemat=$Clavemat.'E';
                break;
              case 'í':
                $Clavemat=$Clavemat.'I';
                break;
              case 'ó':
                $Clavemat=$Clavemat.'O';
                break;
              case 'ú':
                $Clavemat=$Clavemat.'U';
                break;

              default:
                $Clavemat=$Clavemat.utf8_encode(strtoupper($seg[0]));
                break;
          }
            for ($i=0; $i <count($Romanos) ; $i++) {
              if ($ter==$Romanos[$i]) {
                $Clavemat=$Clavemat.$Romanosara[$i];
            }
          }
        }
        else {
                $prim=$Auxiliar[0];
                $seg=$Auxiliar[1];
                $ter=$Auxiliar[2];
                switch (utf8_encode(strtolower($prim[0]))) {
                  case 'á':
                    $Clavemat=$Clavemat.'A';
                    break;
                  case 'é':
                    $Clavemat=$Clavemat.'E';
                    break;
                  case 'í':
                    $Clavemat=$Clavemat.'I';
                    break;
                  case 'ó':
                    $Clavemat=$Clavemat.'O';
                    break;
                  case 'ú':
                    $Clavemat=$Clavemat.'U';
                    break;

                  default:
                    $Clavemat=$Clavemat.utf8_encode(strtoupper($prim[0]));
                    break;
              }
              switch (utf8_encode(strtolower($seg[0]))) {
                case 'á':
                  $Clavemat=$Clavemat.'A';
                  break;
                case 'é':
                  $Clavemat=$Clavemat.'E';
                  break;
                case 'í':
                  $Clavemat=$Clavemat.'I';
                  break;
                case 'ó':
                  $Clavemat=$Clavemat.'O';
                  break;
                case 'ú':
                  $Clavemat=$Clavemat.'U';
                  break;

                default:
                  $Clavemat=$Clavemat.utf8_encode(strtoupper($seg[0]));
                  break;
            }
            switch (utf8_encode(strtolower($ter[0]))) {
              case 'á':
                $Clavemat=$Clavemat.'A';
                break;
              case 'é':
                $Clavemat=$Clavemat.'E';
                break;
              case 'í':
                $Clavemat=$Clavemat.'I';
                break;
              case 'ó':
                $Clavemat=$Clavemat.'O';
                break;
              case 'ú':
                $Clavemat=$Clavemat.'U';
                break;

              default:
                $Clavemat=$Clavemat.utf8_encode(strtoupper($ter[0]));
                break;
          }
        }
      }
    elseif (count($Auxiliar)>3) {
      $Romano=$Auxiliar[count($Auxiliar)-1];
      for ($i=0; $i <count($Romanos) ; $i++) {
        if ($Romano==$Romanos[$i]) {
          $bandera4=1;
      }

    }
    if ($bandera4==1) {
      for ($i=0; $i <count($Auxiliar)-1; $i++) {
        $varaux=$Auxiliar[$i];
        switch (utf8_encode(strtolower($varaux[0]))) {
          case 'á':
            $Clavemat=$Clavemat.'A';
            break;
          case 'é':
            $Clavemat=$Clavemat.'E';
            break;
          case 'í':
            $Clavemat=$Clavemat.'I';
            break;
          case 'ó':
            $Clavemat=$Clavemat.'O';
            break;
          case 'ú':
            $Clavemat=$Clavemat.'U';
            break;

          default:
            $Clavemat=$Clavemat.utf8_encode(strtoupper($varaux[0]));
            break;
      }
      }
      $varaux=$Auxiliar[count($Auxiliar)-1];
      for ($i=0; $i <count($Romanos) ; $i++) {
        if ($varaux==$Romanos[$i]) {
          $Clavemat=$Clavemat.$Romanosara[$i];
      }
    }
  }

  else {
    for ($i=0; $i <count($Auxiliar); $i++) {
      $varaux=$Auxiliar[$i];
      switch (utf8_encode(strtolower($varaux[0]))) {
        case 'á':
          $Clavemat=$Clavemat.'A';
          break;
        case 'é':
          $Clavemat=$Clavemat.'E';
          break;
        case 'í':
          $Clavemat=$Clavemat.'I';
          break;
        case 'ó':
          $Clavemat=$Clavemat.'O';
          break;
        case 'ú':
          $Clavemat=$Clavemat.'U';
          break;

        default:
          $Clavemat=$Clavemat.utf8_encode(strtoupper($varaux[0]));
          break;
    }
  }
}
}
}
        elseif (count($Nombrediv>2)) {
          //print'Aqui voy';
        }

        elseif (count($Nombrediv>2)) {
          //print'Aqui voy';
        }
            $Checa_Mate=Materia::get('Clave_M');
            $CLAVES=array();
            foreach ($Checa_Mate as $Mat_CH) {
              //return $Mat_CH->Clave;
              array_push($CLAVES,$Mat_CH->Clave_M);
            }
            //return $CLAVES;
            //return $Clavemat;
            if (in_array($Clavemat,$CLAVES)){
              return redirect('/RegistraMateria')->with('msjERROR','Materia ya registrada (Elija otra).');
            }
            else{
              $materia=new Materia();
              $materia->Clave_M=$Clavemat;
              $materia->Tipo=$request['tipo'];
              $materia->Nombre=$request['nombre'];
              $materia->Semestre=$request['semestre'];
              $materia->Bachillerato=$request['bachillerato'];
              $materia->Horas=$request['horas'];
             // $materia->save();

             if(strlen($materia)){
        //return 'Aqui';
        if(($request->tipo=="Formación Propedéutica")){
          if ($request->semestre=="QUINTO SEMESTRE" or $request->semestre=="SEXTO SEMESTRE") {
              $materia->fill($request->all());
              $materia->save();
              //return $materia;
              return redirect('/ControlEscolarInicio')->with('msj','Materia Registrada Correctamente');
          }
          else{
            //return 'por aqui';
            return back()->with('msjERROR','El semestre seleccionado no coincide para el tipo de materia.' );
            }
        }
        if ($request->Tipo=="Formación Para El Trabajo"){
          if ($request->semestre=="TERCER SEMESTRE" or $request->semestre=="CUARTO SEMESTRE" or $request->semestre=="QUINTO SEMESTRE" or $request->semestre=="SEXTO SEMESTRE") {
            //return "aqui";
              $materia->fill($request->all());
              $materia->save();
              return redirect('/ControlEscolarInicio')->with('msj','Materia Registrada Correctamente');
          }
          else{
            return back()->with('msj','El semestre seleccionado no coincide para el tipo de materia.' );
          }
        }
        else{
          $materia->fill($request->all());
          $materia->save();
          return redirect('/ControlEscolarInicio')->with('msj','Materia Registrada Correctamente');
        }
      }

              return back()->with('msj','Materia registrada con éxito. Clave: '.$Clavemat);
            }

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {

      $bandera1=0;
            $bandera4=0;
            $Romanos=array('I','II','III',"IV",'V','VI' );
            $Romanosara=array('1','2','3',"4",'5','6' );
            $Quitar=array('a','del','la',"para",'de','y','el' );
            $Auxiliar=array();
            //Extraer el nombre se la materia en una variable($Nombremat)
            $Nombremat=utf8_decode($r['Nombre']);
            //Extraer el tipo de materia en una varible ($Tipomat)
            $Tipomat=$r['tipo'];
            $Clavemat='';
            //Separar por palabras el nombre
            $Nombrediv = explode(" ", $Nombremat);
            //Saber el tipo a guardar
            switch ($Tipomat) {
              case 'Formación Básica':
                $Clavemat=$Clavemat.'FB-';
                break;
              case 'Formación Propedéutica':
                  switch ($r['Bachillerato']) {
                    case 'Químico Biológico':
                      $Clavemat=$Clavemat.'QB-';
                      break;
                    case 'Físico Matemático':
                      $Clavemat=$Clavemat.'FM-';
                      break;
                    case 'Ciencias Sociales y Humanidades':
                      $Clavemat=$Clavemat.'CSH-';
                      break;

                    default:
                      $Clavemat=$Clavemat.'EA-';
                      break;
                  }
                break;
              case 'Formación Para El Trabajo':
                    $Clavemat=$Clavemat.'FT-';
                break;

              default:
                $Clavemat=$Clavemat.'AP-';
                break;
            }
            //Proceso si solo es una Palabra
            if (count($Nombrediv)==1) {
              for ($i=0; $i <3 ; $i++) {

                switch (utf8_encode(strtolower($Nombremat[$i]))) {
                  case 'á':
                    $Clavemat=$Clavemat.'A';
                    break;
                  case 'é':
                    $Clavemat=$Clavemat.'E';
                    break;
                  case 'í':
                    $Clavemat=$Clavemat.'I';
                    break;
                  case 'ó':
                    $Clavemat=$Clavemat.'O';
                    break;
                  case 'ú':
                    $Clavemat=$Clavemat.'U';
                    break;

                  default:
                    $Clavemat=$Clavemat.strtoupper($Nombremat[$i]);
                    break;
                }
              }
            }

            //Si son dos palabras
            elseif (count($Nombrediv)==2) {
              $prim=$Nombrediv[0];
              $seg=$Nombrediv[1];

              //Aqui se hace la comparacion para ver si hay un numero romano
              for ($i=0; $i <count($Romanos) ; $i++) {
                if ($seg==$Romanos[$i]) {
                  $bandera1=1;
                }
              }

          if ($bandera1==1) {
            for ($i=0; $i <3 ; $i++) {

              switch (utf8_encode(strtolower($prim[$i]))) {
                case 'á':
                  $Clavemat=$Clavemat.'A';
                  break;
                case 'é':
                  $Clavemat=$Clavemat.'E';
                  break;
                case 'í':
                  $Clavemat=$Clavemat.'I';
                  break;
                case 'ó':
                  $Clavemat=$Clavemat.'O';
                  break;
                case 'ú':
                  $Clavemat=$Clavemat.'U';
                  break;

                default:
                  $Clavemat=$Clavemat.utf8_encode(strtoupper($prim[$i]));
                  break;
              }
            }
            for ($i=0; $i <count($Romanos) ; $i++) {
              if ($seg==$Romanos[$i]) {
                $Clavemat=$Clavemat.$Romanosara[$i];
              }
          }
        }
        //No hay numero romanos
        else {
          for ($i=0; $i <2 ; $i++) {

            switch (utf8_encode(strtolower($prim[$i]))) {
              case 'á':
                $Clavemat=$Clavemat.'A';
                break;
              case 'é':
                $Clavemat=$Clavemat.'E';
                break;
              case 'í':
                $Clavemat=$Clavemat.'I';
                break;
              case 'ó':
                $Clavemat=$Clavemat.'O';
                break;
              case 'ú':
                $Clavemat=$Clavemat.'U';
                break;

              default:
                $Clavemat=$Clavemat.utf8_encode(strtoupper($prim[$i]));
                break;
            }
          }
          switch (utf8_encode(strtolower($seg[0]))) {
            case 'á':
              $Clavemat=$Clavemat.'A';
              break;
            case 'é':
              $Clavemat=$Clavemat.'E';
              break;
            case 'í':
              $Clavemat=$Clavemat.'I';
              break;
            case 'ó':
              $Clavemat=$Clavemat.'O';
              break;
            case 'ú':
              $Clavemat=$Clavemat.'U';
              break;

            default:
              $Clavemat=$Clavemat.utf8_encode(strtoupper($seg[0]));
              break;
          }

        }
      }
        //Aqui va la condicion por si son mas de 2 palabras
        elseif (count($Nombrediv)>2) {
          for ($i=0; $i <count($Nombrediv) ; $i++) {
            $bandera2=0;
            for ($j=0; $j <count($Quitar) ; $j++) {
              if ($Nombrediv[$i]==$Quitar[$j]) {
                $bandera2=1;

              }
            }
            if ($bandera2!=1) {
              array_push ( $Auxiliar , $Nombrediv[$i]);
            }
          }
                if (count($Auxiliar)==1) {
                  for ($i=0; $i <3 ; $i++) {

                    switch (utf8_encode(strtolower($Nombremat[$i]))) {
                      case 'á':
                        $Clavemat=$Clavemat.'A';
                        break;
                      case 'é':
                        $Clavemat=$Clavemat.'E';
                        break;
                      case 'í':
                        $Clavemat=$Clavemat.'I';
                        break;
                      case 'ó':
                        $Clavemat=$Clavemat.'O';
                        break;
                      case 'ú':
                        $Clavemat=$Clavemat.'U';
                        break;

                      default:
                        $Clavemat=$Clavemat.strtoupper($Nombremat[$i]);
                        break;
                    }
                  }
                }


                //Si son dos palabras
                elseif (count($Auxiliar)==2) {
                  $prim=$Auxiliar[0];
                  $seg=$Auxiliar[1];

                  //Aqui se hace la comparacion para ver si hay un numero romano
                  for ($i=0; $i <count($Romanos) ; $i++) {
                    if ($seg==$Romanos[$i]) {
                      $bandera1=1;
                    }
                  }

              if ($bandera1==1) {
                for ($i=0; $i <3 ; $i++) {

                  switch (utf8_encode(strtolower($prim[$i]))) {
                    case 'á':
                      $Clavemat=$Clavemat.'A';
                      break;
                    case 'é':
                      $Clavemat=$Clavemat.'E';
                      break;
                    case 'í':
                      $Clavemat=$Clavemat.'I';
                      break;
                    case 'ó':
                      $Clavemat=$Clavemat.'O';
                      break;
                    case 'ú':
                      $Clavemat=$Clavemat.'U';
                      break;

                    default:
                      $Clavemat=$Clavemat.utf8_encode(strtoupper($prim[$i]));
                      break;
                  }
                }
                for ($i=0; $i <count($Romanos) ; $i++) {
                  if ($seg==$Romanos[$i]) {
                    $Clavemat=$Clavemat.$Romanosara[$i];
                  }
              }
            }
            //No hay numero romanos
            else {
              for ($i=0; $i <2 ; $i++) {

                switch (utf8_encode(strtolower($prim[$i]))) {
                  case 'á':
                    $Clavemat=$Clavemat.'A';
                    break;
                  case 'é':
                    $Clavemat=$Clavemat.'E';
                    break;
                  case 'í':
                    $Clavemat=$Clavemat.'I';
                    break;
                  case 'ó':
                    $Clavemat=$Clavemat.'O';
                    break;
                  case 'ú':
                    $Clavemat=$Clavemat.'U';
                    break;

                  default:
                    $Clavemat=$Clavemat.utf8_encode(strtoupper($prim[$i]));
                    break;
                }
              }
              switch (utf8_encode(strtolower($seg[0]))) {
                case 'á':
                  $Clavemat=$Clavemat.'A';
                  break;
                case 'é':
                  $Clavemat=$Clavemat.'E';
                  break;
                case 'í':
                  $Clavemat=$Clavemat.'I';
                  break;
                case 'ó':
                  $Clavemat=$Clavemat.'O';
                  break;
                case 'ú':
                  $Clavemat=$Clavemat.'U';
                  break;

                default:
                  $Clavemat=$Clavemat.utf8_encode(strtoupper($seg[0]));
                  break;
              }

            }
          }
          elseif (count($Auxiliar)==3) {
              $bandera3=0;
              for ($i=0; $i <count($Romanos) ; $i++) {
                if ($Auxiliar[2]==$Romanos[$i]) {
                  $bandera3=1;
                }
              }
              if ($bandera3==1) {
                $prim=$Auxiliar[0];
                $seg=$Auxiliar[1];
                $ter=$Auxiliar[2];
                switch (utf8_encode(strtolower($prim[0]))) {
                  case 'á':
                    $Clavemat=$Clavemat.'A';
                    break;
                  case 'é':
                    $Clavemat=$Clavemat.'E';
                    break;
                  case 'í':
                    $Clavemat=$Clavemat.'I';
                    break;
                  case 'ó':
                    $Clavemat=$Clavemat.'O';
                    break;
                  case 'ú':
                    $Clavemat=$Clavemat.'U';
                    break;

                  default:
                    $Clavemat=$Clavemat.utf8_encode(strtoupper($prim[0]));
                    break;
              }
              switch (utf8_encode(strtolower($prim[1]))) {
                case 'á':
                  $Clavemat=$Clavemat.'A';
                  break;
                case 'é':
                  $Clavemat=$Clavemat.'E';
                  break;
                case 'í':
                  $Clavemat=$Clavemat.'I';
                  break;
                case 'ó':
                  $Clavemat=$Clavemat.'O';
                  break;
                case 'ú':
                  $Clavemat=$Clavemat.'U';
                  break;

                default:
                  $Clavemat=$Clavemat.utf8_encode(strtoupper($prim[1]));
                  break;
            }
            switch (utf8_encode(strtolower($seg[0]))) {
              case 'á':
                $Clavemat=$Clavemat.'A';
                break;
              case 'é':
                $Clavemat=$Clavemat.'E';
                break;
              case 'í':
                $Clavemat=$Clavemat.'I';
                break;
              case 'ó':
                $Clavemat=$Clavemat.'O';
                break;
              case 'ú':
                $Clavemat=$Clavemat.'U';
                break;

              default:
                $Clavemat=$Clavemat.utf8_encode(strtoupper($seg[0]));
                break;
          }
            for ($i=0; $i <count($Romanos) ; $i++) {
              if ($ter==$Romanos[$i]) {
                $Clavemat=$Clavemat.$Romanosara[$i];
            }
          }
        }
        else {
                $prim=$Auxiliar[0];
                $seg=$Auxiliar[1];
                $ter=$Auxiliar[2];
                switch (utf8_encode(strtolower($prim[0]))) {
                  case 'á':
                    $Clavemat=$Clavemat.'A';
                    break;
                  case 'é':
                    $Clavemat=$Clavemat.'E';
                    break;
                  case 'í':
                    $Clavemat=$Clavemat.'I';
                    break;
                  case 'ó':
                    $Clavemat=$Clavemat.'O';
                    break;
                  case 'ú':
                    $Clavemat=$Clavemat.'U';
                    break;

                  default:
                    $Clavemat=$Clavemat.utf8_encode(strtoupper($prim[0]));
                    break;
              }
              switch (utf8_encode(strtolower($seg[0]))) {
                case 'á':
                  $Clavemat=$Clavemat.'A';
                  break;
                case 'é':
                  $Clavemat=$Clavemat.'E';
                  break;
                case 'í':
                  $Clavemat=$Clavemat.'I';
                  break;
                case 'ó':
                  $Clavemat=$Clavemat.'O';
                  break;
                case 'ú':
                  $Clavemat=$Clavemat.'U';
                  break;

                default:
                  $Clavemat=$Clavemat.utf8_encode(strtoupper($seg[0]));
                  break;
            }
            switch (utf8_encode(strtolower($ter[0]))) {
              case 'á':
                $Clavemat=$Clavemat.'A';
                break;
              case 'é':
                $Clavemat=$Clavemat.'E';
                break;
              case 'í':
                $Clavemat=$Clavemat.'I';
                break;
              case 'ó':
                $Clavemat=$Clavemat.'O';
                break;
              case 'ú':
                $Clavemat=$Clavemat.'U';
                break;

              default:
                $Clavemat=$Clavemat.utf8_encode(strtoupper($ter[0]));
                break;
          }
        }
      }
    elseif (count($Auxiliar)>3) {
      $Romano=$Auxiliar[count($Auxiliar)-1];
      for ($i=0; $i <count($Romanos) ; $i++) {
        if ($Romano==$Romanos[$i]) {
          $bandera4=1;
      }

    }
    if ($bandera4==1) {
      for ($i=0; $i <count($Auxiliar)-1; $i++) {
        $varaux=$Auxiliar[$i];
        switch (utf8_encode(strtolower($varaux[0]))) {
          case 'á':
            $Clavemat=$Clavemat.'A';
            break;
          case 'é':
            $Clavemat=$Clavemat.'E';
            break;
          case 'í':
            $Clavemat=$Clavemat.'I';
            break;
          case 'ó':
            $Clavemat=$Clavemat.'O';
            break;
          case 'ú':
            $Clavemat=$Clavemat.'U';
            break;

          default:
            $Clavemat=$Clavemat.utf8_encode(strtoupper($varaux[0]));
            break;
      }
      }
      $varaux=$Auxiliar[count($Auxiliar)-1];
      for ($i=0; $i <count($Romanos) ; $i++) {
        if ($varaux==$Romanos[$i]) {
          $Clavemat=$Clavemat.$Romanosara[$i];
      }
    }
  }

  else {
    for ($i=0; $i <count($Auxiliar); $i++) {
      $varaux=$Auxiliar[$i];
      switch (utf8_encode(strtolower($varaux[0]))) {
        case 'á':
          $Clavemat=$Clavemat.'A';
          break;
        case 'é':
          $Clavemat=$Clavemat.'E';
          break;
        case 'í':
          $Clavemat=$Clavemat.'I';
          break;
        case 'ó':
          $Clavemat=$Clavemat.'O';
          break;
        case 'ú':
          $Clavemat=$Clavemat.'U';
          break;

        default:
          $Clavemat=$Clavemat.utf8_encode(strtoupper($varaux[0]));
          break;
    }
  }
}
}
}
        elseif (count($Nombrediv>2)) {
          //print'Aqui voy';
        }

        elseif (count($Nombrediv>2)) {
          //print'Aqui voy';
        }
            $Checa_Mate=Materia::get('Clave_M');
            $CLAVES=array();
            foreach ($Checa_Mate as $Mat_CH) {
              //return $Mat_CH->Clave;
              array_push($CLAVES,$Mat_CH->Clave_M);
            }
            //return $CLAVES;
            //return $Clavemat;
            if (in_array($Clavemat,$CLAVES)){
              return redirect('/RegistraMateria')->with('msjERROR','Materia ya registrada (Elija otra).');
            }
            else{
              $materia=new Materia();
              $materia->Clave_M=$Clavemat;
              $materia->Tipo=$r['Tipo'];
              $materia->Nombre=$r['Nombre'];
              $materia->Semestre=$r['Semestre'];
              $materia->Bachillerato=$r['Bachillerato'];
              $materia->Horas=$r['Horas'];
             // $materia->save();



              $materia=[];
      $materias=materia::where([['Clave_M',$r->claveOriginal]])->get();
      foreach ($materias as $row ) {
        $materia=$row;

     }
      if(strlen($materia)){
        //return 'Aqui';
        if(($r->Tipo=="Formación Propedéutica")){
          if ($r->Semestre=="QUINTO SEMESTRE" or $r->Semestre=="SEXTO SEMESTRE") {
               $materia->Clave_M=$Clavemat;
              $materia->Tipo=$r['Tipo'];
              $materia->Nombre=$r['Nombre'];
              $materia->Semestre=$r['Semestre'];
              $materia->Bachillerato=$r['Bachillerato'];
              $materia->Horas=$r['Horas'];
              $materia->save();
              //return $materia;
              return redirect('materia')->with('msj','Materia Modificada Correctamente');
          }
          else{
            //return 'por aqui';
            return back()->with('msjERROR','El semestre seleccionado no coincide para el tipo de materia.' );
            }
        }
        if ($r->Tipo=="Formación Para El Trabajo"){
          if ($r->Semestre=="TERCER SEMESTRE" or $r->Semestre=="CUARTO SEMESTRE" or $r->Semestre=="QUINTO SEMESTRE" or $r->Semestre=="SEXTO SEMESTRE") {
               $materia->Clave_M=$Clavemat;
              $materia->Tipo=$r['Tipo'];
              $materia->Nombre=$r['Nombre'];
              $materia->Semestre=$r['Semestre'];
              $materia->Bachillerato=$r['Bachillerato'];
              $materia->Horas=$r['Horas'];
              $materia->save();
              return redirect('materia')->with('msj','Materia Modificada Correctamente');
          }
          else{
            return back()->with('msj','El semestre seleccionado no coincide para el tipo de materia.' );
          }
        }
        else{
            $materia->Clave_M=$Clavemat;
              $materia->Tipo=$r['Tipo'];
              $materia->Nombre=$r['Nombre'];
              $materia->Semestre=$r['Semestre'];
              $materia->Bachillerato=$r['Bachillerato'];
              $materia->Horas=$r['Horas'];
          $materia->save();
          return redirect('materia')->with('msj','Materia Modificada Correctamente');
        }
      }
      else {
       // return redirect('materia')->with('msj2','Materia Modificada Correctamente');
      }
     // return redirect('materia')->with('msj2','Materia Modificada Correctamente');
            }













     }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $re,$r)
    {




      $opciones2="";
      $opciones="";
        ///return $r;//
      $materia="";
      $materias=materia::where([['Clave_M',$r]])->get();
      foreach ($materias as $row ) {

        $materia=$row;
        if($materia->Tipo=='Formación Propedéutica'){
                    $opciones=' <option value="Formación Propedéutica" selected="true">Formación Propedéutica</option>
                      <option value="Formación Para El Trabajo">Formación Para El Trabajo</option>
                      <option value="Actividades Paraescolares">Actividades Paraescolares</option>
                      <option value="Formación Básica">Formación Básica</option>';

                }else if($materia->Tipo=='Formación Para El Trabajo'){
                    $opciones=' <option value="Formación Propedéutica" >Formación Propedéutica</option>
                      <option value="Formación Para El Trabajo" selected="true">Formación Para El Trabajo</option>
                      <option value="Actividades Paraescolares">Actividades Paraescolares</option>
                      <option value="Formación Básica">Formación Básica</option>';

                }else if($materia->Tipo=='Actividades Paraescolares'){
                    $opciones=' <option value="Formación Propedéutica" >Formación Propedéutica</option>
                      <option value="Formación Para El Trabajo">Formación Para El Trabajo</option>
                      <option value="Actividades Paraescolares" selected="true">Actividades Paraescolares</option>
                      <option value="Formación Básica">Formación Básica</option>';

                }else if($materia->Tipo=='Formación Básica'){
                    $opciones=' <option value="Formación Propedéutica" >Formación Propedéutica</option>
                      <option value="Formación Para El Trabajo">Formación Para El Trabajo</option>
                      <option value="Actividades Paraescolares">Actividades Paraescolares</option>
                      <option value="Formación Básica" selected="true">Formación Básica</option>';
                }

                if($materia->Semestre=='PRIMER SEMESTRE'){
                    $opciones2='<option value="PRIMER SEMESTRE" selected="true">PRIMER SEMESTRE</option>
                            <option value="SEGUNDO SEMESTRE">SEGUNDO SEMESTRE</option>
                            <option value="TERCER SEMESTRE">TERCER SEMESTRE</option>
                            <option value="CUARTO SEMESTRE">CUARTO SEMESTRE</option>
                            <option value="QUINTO SEMESTRE">QUINTO SEMESTRE</option>
                            <option value="SEXTO SEMESTRE">SEXTO SEMESTRE</option>';
                }else if($materia->Semestre=='SEGUNDO SEMESTRE'){
                    $opciones2='<option value="PRIMER SEMESTRE">PRIMER SEMESTRE</option>
                            <option value="SEGUNDO SEMESTRE" selected="true">SEGUNDO SEMESTRE</option>
                            <option value="TERCER SEMESTRE">TERCER SEMESTRE</option>
                            <option value="CUARTO SEMESTRE">CUARTO SEMESTRE</option>
                            <option value="QUINTO SEMESTRE">QUINTO SEMESTRE</option>
                            <option value="SEXTO SEMESTRE">SEXTO SEMESTRE</option>';
                }else if($materia->Semestre=='TERCER SEMESTRE'){
                    $opciones2='<option value="PRIMER SEMESTRE">PRIMER SEMESTRE</option>
                            <option value="SEGUNDO SEMESTRE" >SEGUNDO SEMESTRE</option>
                            <option value="TERCER SEMESTRE" selected="true">TERCER SEMESTRE</option>
                            <option value="CUARTO SEMESTRE">CUARTO SEMESTRE</option>
                            <option value="QUINTO SEMESTRE">QUINTO SEMESTRE</option>
                            <option value="SEXTO SEMESTRE">SEXTO SEMESTRE</option>';
                }else if($materia->Semestre=='CUARTO SEMESTRE'){
                    $opciones2='<option value="PRIMER SEMESTRE">PRIMER SEMESTRE</option>
                            <option value="SEGUNDO SEMESTRE" >SEGUNDO SEMESTRE</option>
                            <option value="TERCER SEMESTRE" >TERCER SEMESTRE</option>
                            <option value="CUARTO SEMESTRE" selected="true">CUARTO SEMESTRE</option>
                            <option value="QUINTO SEMESTRE">QUINTO SEMESTRE</option>
                            <option value="SEXTO SEMESTRE">SEXTO SEMESTRE</option>';
                }else if($materia->Semestre=='QUINTO SEMESTRE'){
                    $opciones2='<option value="PRIMER SEMESTRE">PRIMER SEMESTRE</option>
                            <option value="SEGUNDO SEMESTRE" >SEGUNDO SEMESTRE</option>
                            <option value="TERCER SEMESTRE" >TERCER SEMESTRE</option>
                            <option value="CUARTO SEMESTRE" >CUARTO SEMESTRE</option>
                            <option value="QUINTO SEMESTRE" selected="true">QUINTO SEMESTRE</option>
                            <option value="SEXTO SEMESTRE">SEXTO SEMESTRE</option>';
                }else if($materia->Semestre=='SEXTO SEMESTRE'){
                    $opciones2='<option value="PRIMER SEMESTRE">PRIMER SEMESTRE</option>
                            <option value="SEGUNDO SEMESTRE" >SEGUNDO SEMESTRE</option>
                            <option value="TERCER SEMESTRE" >TERCER SEMESTRE</option>
                            <option value="CUARTO SEMESTRE" >CUARTO SEMESTRE</option>
                            <option value="QUINTO SEMESTRE" >QUINTO SEMESTRE</option>
                            <option value="SEXTO SEMESTRE" selected="true">SEXTO SEMESTRE</option>';
                }

           }
           if(isset($r->Clave_M)){
           return view('materias.modificar' ,compact('materia','opciones','opciones2'));
         }else{


            $materias=Materia::all();
            foreach ($materias as $materia) {
              # code...
                    if($re->has($materia->Clave_M)){

                             return view('materias.vista' ,compact('materia','opciones','opciones2'));
                    }
            }
            //return $re;
            $materias=Materia::where([['Clave_M',$re->claveOriginal]])->get();
            foreach ($materias as $materia) {
              # code...
               return view('materias.modificar' ,compact('materia','opciones','opciones2'));
            }

         }
          }

              /**
               * Show the form for editing the specified resource.
               *
               * @param  int  $id
               * @return \Illuminate\Http\Response
               */
    public function edit($g, Request $r)
    {

      $materia=[];
      $materias=Materia::where([['Clave_M',$r->Clave_M]])->get();

      foreach ($materias as $row ) {
        $materia=$row;
      }
       //return $materia->Clave;

      if($materia!=null)  {

        return view('materias.vista',compact('materia'));
      }
      else{

        $materias=Materia::where([['Nombre',$r->Clave_M]])->get();
        foreach ($materias as $row ) {
          $materia=$row;
        }
        if($materia!=null){

          return view('materias.vista',compact('materia'));
        }else{
        return back()->with('msj2','La materia no existe' );
      }
      }
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

       materia::where('Clave_M',$id)->delete();
       materia_grupo::where('Clave_M',$id)->delete();
       return redirect('materia')->with('msj','Materia Eliminada Correctamente');
        //return  view('Alumnos.index',compact('alumnos'));
       //return view('materias.consulta');
    }
}
