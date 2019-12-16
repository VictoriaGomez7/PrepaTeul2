<?php
session_start();
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*

Route::get('/RegistraMateria', function () {
    return view('RegistrarMaterias.create');
});
*/
Route::resource('Correos','correoController'); //CE

Route::get('Correo','correoController@buscaCorreo'); //CE

Route::get('RegistraMateria','combos@formaciones');//CE

Route::get('inscripcion','combos@incripcion');//CE

Route::get('contrasena/buscador','contrasenaController@buscador');//CE

Route::get('contrasena/buscadorDocente','contrasenaController@buscadorDocente');//CE

Route::get('contrasenaDocente','contrasenaController@create');//CE

Route::resource('contrasena','contrasenaController');//CE

Route::resource('EvaluacionConducta','conductaController'); //Docente LISTO

Route::get('materia/buscador','materiasBuscadorController@buscador'); //CE

Route::get('/interfazpri', function () {
    session_destroy();
    return view('interfazprincipal.Interfaz');
});
Route::get('/', function () {
    return view('interfazprincipal.Interfaz');
});

Route::get('/ControlEscolar', function () {
        if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
return view('interfazprincipal.Interfaz');
}
    return view('ControlEscolar.CEprincipal');
});

Route::get('/ControlEscolarInicio', function () {
    if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
    }
        return view('ControlEscolar.CEprincipal2');
});



Route::get('/reinscripcion', function () {
           if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
return view('interfazprincipal.Interfaz');
}
    return view('Reinscripciones.create');
});

Route::get('/Eliminar', function () {
    if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
    }
    return view('Alumnos.create');
});

Route::get('/compro', function () {
    if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
    }
    return view('Inscripcion.consultar');
});

Route::get('/comprom', function () {
    if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
    }
    return view('Inscripcion.consultar0');
});

Route::get('/Reinscripcion',function(){
    if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
    }
    return view('Reinscripciones.form');
});
// ESTA PARTE AGREGUE YO PARA REGISTRAR DOCENTES
Route::get('/RegistraDocente', function () {
    if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
    }
    return view('RegistrarDocentes.create');
});
// ESTA PARTE AGREGUE YO PARA REGISTRAR MATERIAS
/*Route::get('/RegistraMateria', function () {
    return view('RegistrarMaterias.create');
});
*/
Route::get('/alumnosconsulta',function(){
    if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
    }
    return view('Alumnos.consulta');
});

Route::get('/docenteconsulta' ,function(){
    if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
    }
    return view('DocenteC.createC');
});

//PARA LA INTERFAZ DE DOCENTE
Route::get('/DocenteInicio', function () {
    if(!isset($_SESSION['ContraPassM']) || !isset($_SESSION['usuarioUserM'])){
        return view('interfazprincipal.Interfaz');
    }
    return view('DocenteInterfazPrincipal.InterfazPrincipal2'); //Docente
});

Route::get('/DocenteInicios', function () {
    if(!isset($_SESSION['ContraPassM']) || !isset($_SESSION['usuarioUserM'])){
        return view('interfazprincipal.Interfaz');
    }
    return view('DocenteInterfazPrincipal.InterfazPrincipal3'); //Docente
});

Route::get('/Docentes', function () {
    if(!isset($_SESSION['ContraPassM']) || !isset($_SESSION['usuarioUserM'])){
        return view('interfazprincipal.Interfaz');
    }
    return view('DocenteInterfazPrincipal.InterfazPrincipal'); //Docente
});

// PARA LA INTERFAZ DE AUMNO
Route::get('/Alumnosinicio', function () {
    if(!isset($_SESSION['ContraPassA']) || !isset($_SESSION['usuarioUserA'])){
        return view('interfazprincipal.Interfaz');
    }
    return view('Alumnosinterfazprincipal.InterfazPrincipal'); //Alumno
});

Route::get('/Alumnoinicio', function () {
    if(!isset($_SESSION['ContraPassA']) || !isset($_SESSION['usuarioUserA'])){
        return view('interfazprincipal.Interfaz');
    }
    return view('Alumnosinterfazprincipal.InterfazPrincipal2'); //Alumno
});

Route::get('/periodos' ,function(){
    if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
    }
    return view('Periodos.create');
});

Route::get('/Asistencias' ,function(){ //Docente
    if(!isset($_SESSION['ContraPassM']) || !isset($_SESSION['usuarioUserM'])){
        return view('interfazprincipal.Interfaz');
    }
    return view('Periodos.show');
});



Route::get('ContraseñaAlumn','LoginAController@edit'); //Alumno LISTO

Route::resource('ModificarcontraA','LoginAController'); //Alumno LISTO

Route::get('ContraseñaDocen','LoginMController@edit'); //Docente LISTO

Route::resource('ModificarcontraM','LoginMController'); //Docente LISTO

Route::get('/ContraseñaCE' ,function(){
    if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
    }
    return view('ControlEscolar.cambiarcontra');
});

Route::resource('ModificarcontraCe','LoginCEController'); //CE

Route::get('ModificarcontraCe2','LoginCEController@update');//CE

//Ruta para vista de calificaciones de Control Escolar
Route::resource('CONSULTACALIFICACIONESCE','ConsultarCalificacionesCEController'); //CE

Route::resource('CONSULTACALIFICACIONESAL','ConsultaCalificacionesAlController'); //Alumno LISTO
//Ruta para vista de calificaciones de Docentes
Route::get('/CONSULTACALIFICACIONESDC', function () { //Docente
    if(!isset($_SESSION['ContraPassM']) || !isset($_SESSION['usuarioUserM'])){
        return view('interfazprincipal.Interfaz');
    }
    return view('Calificaciones.ConsultaDC');
});

//consulta pra hacer el kardex
Route::get('/kardex', function () {
    if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
    }
    return view('Alumnos.kardex');
});

//Estadisticas
Route::get('/Estadisticas', function () {
    if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
    }
    return view('Graficas.interfazGrafica');
});

//Genero
Route::get('/E_Genero', function () {
    if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
    }
    return view('Graficas.Genero');
});

//Periodo
Route::get('/E_Periodo', function () {
    if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
    }
    return view('Graficas.Periodo');
});

//Semestre
Route::get('/E_Semestre', function () {
    if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
    }
    return view('Graficas.Semestre');
});

//911
Route::get('/E_911', function () {
    if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
    }
    return view('Graficas.Estadistica911');
});


//Paginna d eespera
Route::get('/E_Espera', function () {
    if(!isset($_SESSION['ContraPass']) || !isset($_SESSION['usuarioUser'])){
        return view('interfazprincipal.Interfaz');
    }
    return view('Graficas.Presentacio');
});
Route::resource('Modificarcontra','ContraController'); //Esto es para ambos (Docentes, Alumnos)  listo

Route::get('Asistencias','AsistenciasController@Report'); //Docente LISTO

Route::resource('Imprimelistas','ImprimelistasController'); //CE

Route::resource('LoginAlumno','LoginAController'); //Alumno LISTO

Route::resource('LoginDocente','LoginMController'); //Docente LISTO

Route::resource('LoginControlEscolar','LoginCEController'); //CE

Route::resource('Reinscripcion','ReinscripcionesController' ); //CE

Route::resource('Docente','DocenteController'); //CE

Route::resource('materia','MateriaController'); //CE

Route::resource('Alumnos','AlumnosController' ); //CE

Route::resource('compromisos','compromisoEstudianteController' ); //CE

Route::resource('compromisosFamilia','compromisoFamiliaController' ); //CE

Route::resource('PDF','PDFController' ); //CE

Route::resource('/formatoestudiantes', 'compromisoEstudianteController'); //CE

Route::resource('/formatofamilia', 'compromisoFamiliaController'); //CE

Route::resource('/grupos','gruposController'); //CE

Route::resource('Asigna','Arrastrarcontroller'); //CE

Route::resource('Periodos','PeriodosController'); //CE

Route::resource('Asistencias','AsistenciasController'); 

Route::resource('VisualizarDocentes','VisuaDocentesController'); //CE

Route::resource('VisualizaMaGr','VisualizarMateriaGrupoController'); //CE

Route::resource('AsignarCalificacion','CalificacionesController'); //Docente LISTO

Route::resource('Calificaciones','CalificacionesController');

Route::resource('Irregulares', 'IrregularController'); //CE

Route::resource('Cerrar_Semestre', 'CierreController'); //CE

Route::resource('RegistrarTutores', 'TutoresController'); //CE

Route::resource('ImprimeBoletasParciales', 'BoletasParcialesController'); //CE

//ruta para generar kardex
Route::resource('ImprimirKardex', 'KaredexController'); //CE

Route::resource('ImprimeCarta','ImprimeCartaController'); //CE

Route::resource('Bachillerato','BachilleratoController'); //CE

Route::resource('Formaciones','FormacionesController'); //CE

// Cambiar Logos
Route::resource('Logotipos','LogosController'); //CE
