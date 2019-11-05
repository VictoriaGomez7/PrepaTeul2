<?php

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

 Route::get('RegistraMateria','combos@formaciones');

 Route::get('inscripcion','combos@incripcion');

Route::get('contrasena/buscador','contrasenaController@buscador');

Route::get('contrasena/buscadorDocente','contrasenaController@buscadorDocente');

Route::get('contrasenaDocente','contrasenaController@create');

Route::resource('contrasena','contrasenaController');


Route::resource('EvaluacionConducta','conductaController');

Route::get('materia/buscador','materiasBuscadorController@buscador');

Route::get('/interfazpri', function () {
    return view('interfazprincipal.Interfaz');
});
Route::get('/', function () {
    return view('interfazprincipal.Interfaz');
});

Route::get('/ControlEscolar', function () {
    return view('ControlEscolar.CEprincipal');
});

Route::get('/ControlEscolarInicio', function () {
    return view('ControlEscolar.CEprincipal2');
});



Route::get('/reinscripcion', function () {
    return view('Reinscripciones.create');
});

Route::get('/Eliminar', function () {
    return view('Alumnos.create');
});

Route::get('/compro', function () {
    return view('Inscripcion.consultar');
});

Route::get('/comprom', function () {
    return view('Inscripcion.consultar0');
});

Route::get('/Reinscripcion',function(){
    return view('Reinscripciones.form');
});
// ESTA PARTE AGREGUE YO PARA REGISTRAR DOCENTES
Route::get('/RegistraDocente', function () {
    return view('RegistrarDocentes.create');
});
// ESTA PARTE AGREGUE YO PARA REGISTRAR MATERIAS
/*Route::get('/RegistraMateria', function () {
    return view('RegistrarMaterias.create');
});
*/
Route::get('/alumnosconsulta',function(){
    return view('Alumnos.consulta');
});

Route::get('/docenteconsulta' ,function(){
    return view('DocenteC.createC');
});

//PARA LA INTERFAZ DE DOCENTE
Route::get('/DocenteInicio', function () {
    return view('DocenteInterfazPrincipal.InterfazPrincipal2');
});

Route::get('/DocenteInicios', function () {
    return view('DocenteInterfazPrincipal.InterfazPrincipal3');
});

Route::get('/Docentes', function () {
    return view('DocenteInterfazPrincipal.InterfazPrincipal');
});

Route::get('/Alumnosinicio', function () {
    return view('Alumnosinterfazprincipal.InterfazPrincipal');
});

Route::get('/Alumnoinicio', function () {
    return view('Alumnosinterfazprincipal.InterfazPrincipal2');
});

Route::get('/periodos' ,function(){
    return view('Periodos.create');
});

Route::get('/Asistencias' ,function(){
    return view('Periodos.show');
});



//Ruta para vista de calificaciones de Control Escolar
Route::resource('CONSULTACALIFICACIONESCE','ConsultarCalificacionesCEController');

Route::resource('CONSULTACALIFICACIONESAL','ConsultaCalificacionesAlController');
//Ruta para vista de calificaciones de Docentes
Route::get('/CONSULTACALIFICACIONESDC', function () {
    return view('Calificaciones.ConsultaDC');
});

//consulta pra hacer el kardex
Route::get('/kardex', function () {
    return view('Alumnos.kardex');
});

//Estadisticas
Route::get('/Estadisticas', function () {
    return view('Graficas.interfazGrafica');
});

//Genero
Route::get('/E_Genero', function () {
    return view('Graficas.Genero');
});

//Periodo
Route::get('/E_Periodo', function () {
    return view('Graficas.Periodo');
});

//Semestre
Route::get('/E_Semestre', function () {
    return view('Graficas.Semestre');
});

//Paginna d eespera
Route::get('/E_Espera', function () {
    return view('Graficas.Presentacio');
});
Route::resource('Modificarcontra','ContraController');

Route::get('Asistencias','AsistenciasController@Report');

Route::resource('Imprimelistas','ImprimelistasController');

Route::resource('LoginAlumno','LoginAController');

Route::resource('LoginDocente','LoginMController');

Route::resource('LoginControlEscolar','LoginCEController');

Route::resource('LoginDirector','LoginDController');

Route::resource('Reinscripcion','ReinscripcionesController' );

Route::resource('Docente','DocenteController');

Route::resource('materia','MateriaController');

Route::resource('Alumnos','AlumnosController' );

Route::resource('compromisos','compromisoEstudianteController' );

Route::resource('compromisosFamilia','compromisoFamiliaController' );

Route::resource('PDF','PDFController' );

Route::resource('/formatoestudiantes', 'compromisoEstudianteController');

Route::resource('/formatofamilia', 'compromisoFamiliaController');

Route::resource('/grupos','gruposController');

Route::resource('Asigna','Arrastrarcontroller');

Route::resource('Periodos','PeriodosController');

Route::resource('Asistencias','AsistenciasController');

Route::resource('VisualizarDocentes','VisuaDocentesController');

Route::resource('VisualizaMaGr','VisualizarMateriaGrupoController');

Route::resource('AsignarCalificacion','CalificacionesController');

Route::resource('Calificaciones','CalificacionesController');

Route::resource('Irregulares', 'IrregularController');

Route::resource('Cerrar_Semestre', 'CierreController');

Route::resource('RegistrarTutores', 'TutoresController');

Route::resource('ImprimeBoletasParciales', 'BoletasParcialesController');

//ruta para generar kardex
Route::resource('ImprimirKardex', 'KaredexController');

Route::resource('ImprimeCarta','ImprimeCartaController');

Route::resource('Bachillerato','BachilleratoController');

Route::resource('Formaciones','FormacionesController');

