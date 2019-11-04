<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Docentes;
use App\RelacionDocenteMateriaGrupo;
use App\Alumno;
use App\Grupo;
use App\Materia_Grupo;
use App\ft_bach;

class VisualizarMateriaGrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$idtemporal=1800110001;
        $id=$_GET['valor'];
        $usua=$id;
        //return $id;
        $NombreDoc=Docentes::where('Clave_D',$id)->get();
        $MateriasDelDocente=RelacionDocenteMateriaGrupo::where('Clave_D',$NombreDoc[0]->Nombre)->get();
        $visibility=2;
        //return $MateriasDelDocente;
        if (count($MateriasDelDocente)==0){
            return redirect('/DocenteInicios?valor='.$usua)->with('MsjERR','No tiene materias asignadas');
        }
        else{
            
            view('DocenteInterfazPrincipal.InterfazPrincipal',compact('usua'));
            return view('VisualizarMaGru.VisualizarMateGrupo',compact('MateriasDelDocente','visibility','id','usua'));
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "MEMD";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;
        $Materiasele=$request->MateriaSeleccionada;
        //return $Materiasele;
        $id=$request->idDocente;
        $usua=$id;

        $NombreDoc=Docentes::where('Clave_D',$id)->get();
        $MateriasDelDocente=RelacionDocenteMateriaGrupo::where('Clave_D',$NombreDoc[0]->Nombre)->get();

        $AlumnoEnGrupo=Grupo::where('Grupo',$request->Grupo)->get();
        $AlumnoEnGRupoSemestre=Materia_Grupo::where('Grupo',$request->Grupo)->get();
        $SemestreMateria=Materia_Grupo::where('Clave_M',$request->ClaveMateriaSelec)->where('Grupo',$request->Grupo)->get();

        if(count($AlumnoEnGrupo)==0){
            
             $AlumnoEnGrupo=ft_bach::where('Formación_Trabajo',$request->Grupo)->get();
        }
        if(count($AlumnoEnGrupo)==0){
            $AlumnoEnGrupo=ft_bach::where('Bachillerato',$request->Grupo)->get();
        }
        $AlumnosEnMismoSemestre=array();
        //return $AlumnoEnGrupo;
        for ($i=0; $i < count($AlumnoEnGrupo); $i++) {
            //return $AlumnoEnGrupo[$i]->Clave_A;
            $SemestreAlumno=Alumno::where('Clave_A',$AlumnoEnGrupo[$i]->Clave_A)->get('Semestre');
            //return $SemestreAlumno;

            if (($SemestreAlumno[0]->Semestre)==($SemestreMateria[0]->Semestre)) {
                $AlumnoParaTabla=Alumno::where('Clave_A',$AlumnoEnGrupo[$i]->Clave_A)->get();
                //print $AlumnoEnGrupo[$i]->id;
                //print $AlumnoParaTabla;
                array_push($AlumnosEnMismoSemestre,$AlumnoParaTabla );

            }
        }
        if (count($AlumnosEnMismoSemestre)==0) {
             $visibility=0;
        } else {
             $visibility=1;
        }

        //return $AlumnosEnMismoSemestre;
        view('DocenteInterfazPrincipal.InterfazPrincipal',compact('usua'));
        return view('VisualizarMaGru.VisualizarMateGrupo',compact('MateriasDelDocente','AlumnosEnMismoSemestre','visibility','id','usua','Materiasele'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
