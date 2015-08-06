<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',


]);



Route::post('login',"LoginController@acceder");



Route::resource('administrador', 'AdminController');
Route::get('cambiarpermisos','AdminController@cambiarpermisos');
Route::get('usuarios', 'AdminController@usuarios');
Route::get('campus', 'AdminController@campus');

Route::resource('docentes','DocentesController');
Route::get('asignaturas','DocentesController@asignaturas');
Route::get('consultaEspecifica','DocentesController@consultaEspecifica');

Route::resource('estudiantes','EstudiantesController');
Route::get('horario','EstudiantesController@horario');
Route::get('consultacion','EstudiantesController@consultacion');

Route::resource('encargado','EncargadoCampusController');
Route::get('asignacion','EncargadoCampusController@asignacion');
Route::get('datos','EncargadoCampusController@datos');

Route::resource('user','UserController');

Route::resource('usuarios','UsuarioController');

Route::resource('rol','RolController');

Route::resource('rolusuario','RolusuarioController');

Route::resource('campus','CampusController');

Route::resource('escuela','EscuelaController');

Route::resource('departamento','DepartamentoController');

Route::resource('curso','CursoController');

Route::resource('asignatura','AsignaturaController');

Route::resource('cursada','AsignaturaCursadaController');

Route::resource('facultad','FacultadController');

Route::resource('docente','DocenteAdminController');

Route::resource('funcionario','FuncionarioController');

Route::resource('carrera','CarreraController');

Route::resource('estudiante','EstudianteAdminController');
Route::post('estudiante/pdf', [ 'as' => 'carga', 'uses' => 'EstudianteAdminController@pdf' ]);

Route::resource('tiposala','TipoSalaController');

Route::resource('sala','SalasController');

Route::resource('horario','HorarioController');

Route::resource('periodo','PeriodoController');

Route::controller('login', 'Auth\AuthController', 

	[ 'postLogin' => 'auth.doLogin', 
	'getLogout' => 'auth.logout' ]

	);

Route::get('dashboard', ['middleware' => 'is_admin', function()
{

  return view('Administrador.bienvenidoAdministrador');
}]);

Route::get('dashboard', ['middleware' => 'is_doc', function()
{

  return view('Docentes.bienvenidosDocentes');
}]);

Route::get('dashboard', ['middleware' => 'is_estu', function()
{

  return view('Estudiantes.bienvenidosEstudiantes');
}]);

Route::get('dashboard', ['middleware' => 'is_encar', function()
{

  return view('EncargadoCampus.bienvenidoEncargadosCampus');
}]);

