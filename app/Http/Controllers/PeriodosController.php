<?php

namespace App\Http\Controllers;


use App\Periodo;
Use Session;
Use Redirect;
Use Alert;
use Illuminate\Http\Request;

class PeriodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
        }

        $no_p = Periodo::get();
            if (count($no_p)==0) {


            $per=new Periodo();
        $per->id="1";
        $per->save();


            $per=new Periodo();
        $per->id="2";
        $per->save();



}
        $no_p = Periodo::get();
        return view('Periodos.create',compact('no_p'));
    
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
        }
        if ($request['fecha1']>$request['fecha2'] || $request['fecha1']==$request['fecha2']) {
            return back()->with('msj',' La fecha inicial debe ser menor que la fecha final' );
            //echo "si";
            //echo $request['fecha1']." ".$request['fecha2'];
        }
        else{
            if ($request['periodo']=='Primer') {
                $fechaA=$request['fecha1'];
                $fechaB=$request['fecha2'];

                $ides='2';

                $per=Periodo::find($ides);

                $ant1=$per->fecha1;
                $ant2=$per->fecha2;

                if ($ant1!=null && $ant2!=null) {
                    if ($ant1>$fechaA && $ant1>$fechaA) {


                $ides='1';
                $per=Periodo::find($ides);

                $per->fecha1=$fechaA;
                $per->fecha2=$fechaB;


                 function getBusinessDays($date1, $date2){ if(!is_numeric($date1)){ $date1 = strtotime($date1); } if(!is_numeric($date2)){ $date2 = strtotime($date2); } if($date2 < $date1){ $temp_date = $date1; $date1 = $date2; $date2 = $temp_date; unset($temp_date); } $diff = $date2 - $date1; $days_diff = intval($diff / (3600 * 24)); $current_day_of_week = intval(date("N", $date1)); $business_days = 0; for($i = 1; $i <= $days_diff; $i++){ if(!in_array($current_day_of_week, array("Sunday" => 1, "Saturday" => 7))){ $business_days++; } $current_day_of_week++; if($current_day_of_week > 7){ $current_day_of_week = 1; } } return $business_days; }
                  $diash= getBusinessDays($request['fecha1'], $request['fecha2']);
                  $per->dias=$diash;
                  $per->save();

                return back()->with('msj1','Primer periodo guardado correctamente');
            }
            else{
             return back()->with('msj',' El primer periodo debe ser menor al segundo periodo' );   
            }
        }
        else{
            $ides='1';
                $per=Periodo::find($ides);

                $per->fecha1=$fechaA;
                $per->fecha2=$fechaB;


                 function getBusinessDays($date1, $date2){ if(!is_numeric($date1)){ $date1 = strtotime($date1); } if(!is_numeric($date2)){ $date2 = strtotime($date2); } if($date2 < $date1){ $temp_date = $date1; $date1 = $date2; $date2 = $temp_date; unset($temp_date); } $diff = $date2 - $date1; $days_diff = intval($diff / (3600 * 24)); $current_day_of_week = intval(date("N", $date1)); $business_days = 0; for($i = 1; $i <= $days_diff; $i++){ if(!in_array($current_day_of_week, array("Sunday" => 1, "Saturday" => 7))){ $business_days++; } $current_day_of_week++; if($current_day_of_week > 7){ $current_day_of_week = 1; } } return $business_days; }
                  $diash= getBusinessDays($request['fecha1'], $request['fecha2']);
                  $per->dias=$diash;
                  $per->save();

                return back()->with('msj1','Primer periodo guardado correctamente');
            
        }
    }

            if ($request['periodo']=='Segundo') {
                $fechaA=$request['fecha3'];
                $fechaB=$request['fecha4'];



                $ides='1';

                $per=Periodo::find($ides);

                $ant1=$per->fecha1;
                $ant2=$per->fecha2;

                if ($ant1!=null && $ant2!=null) {
                    if ($ant2<$fechaA) {

                $ides='2';
                $per=Periodo::find($ides);
                if ($fechaA<$fechaB) {
                    $per->fecha1=$fechaA;
                $per->fecha2=$fechaB;

                function getBusinessDays($date1, $date2){ if(!is_numeric($date1)){ $date1 = strtotime($date1); } if(!is_numeric($date2)){ $date2 = strtotime($date2); } if($date2 < $date1){ $temp_date = $date1; $date1 = $date2; $date2 = $temp_date; unset($temp_date); } $diff = $date2 - $date1; $days_diff = intval($diff / (3600 * 24)); $current_day_of_week = intval(date("N", $date1)); $business_days = 0; for($i = 1; $i <= $days_diff; $i++){ if(!in_array($current_day_of_week, array("Sunday" => 1, "Saturday" => 7))){ $business_days++; } $current_day_of_week++; if($current_day_of_week > 7){ $current_day_of_week = 1; } } return $business_days; }
                  $diash= getBusinessDays($request['fecha3'], $request['fecha4']);
                  $per->dias=$diash;
                  $per->save();

                return back()->with('msj1','Segundo periodo guardado correctamente');
                }
                else{
                    return back()->with('msj','La fecha inicial debe ser menor que la fecha final');
                }

                
            }
            else{
             return back()->with('msj',' El segundo periodo debe ser mayor al anterior' );   
            }
        }
        else{
             return back()->with('msj',' El segundo periodo debe ser mayor al anterior' );   
            }
    }

            

        }

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('Periodos.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
        //
    }
}
