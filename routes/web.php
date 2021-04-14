<?php

use Illuminate\Support\Facades\Route;

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

//RUTAS BASICAS //
/* Route::get('/', function () {
    echo "<a href=' ".route('index')." '> Home</a><br>";
    echo "<a href=' ".route('materias')." '> Materias</a><br>";
    echo "<a href=' ".route('alumnos')." '> Alumnos</a><br>";
    echo "<a href=' ".route('carreras')." '> Carreras</a><br>";
    echo "<a href=' ".route('profesores')." '> Profesores</a><br>";

});

Route::get('index',function(){
    return "estas en la seccion de inicio ";
})->name('index');

Route::get('materias', function () {
    return "Estas en la seccion de materias";
})->name('materias');

Route::get('alumnos', function () {
    return "Estas en la seccion de alumnos";
})->name('alumnos');

Route::get('carreras', function () {
    return "Estas en la seccion de carreras";
})->name('carreras');

Route::get('profesores', function () {
    return "Estas en la seccion de profesores";
})->name('profesores'); */


//ruta vistas//

Route::get('/', function () {
    return view('index');
})->name('index');

//Route::get('/Materias', 'materiasController@index')->name('material');

Route::get('alumnos', function () {
    return view('Alumnos');
})->name('alumnos');

Route::get('materias', function () {
    return view('Materias');
})->name('materias');
Route::get('carreras', function () {
    return view('Carreras');
})->name('carreras');

Route::get('profesores', function () {
    return view('Profesores');
})->name('profesores');

Route::get('contactanos', function () {
    return view('Contactanos');
})->name('contactanos');
//           Ruta url    Nombre Vista         Nombre Variable         Nombre ruta
//Route::view('/materias', 'Materias', compact('var_materias'))->name('materias');

//ruta que permite crear unicamente index, sjow y create
//Route::resource('materias', 'MateriasController')->only(['index', 'show', 'create']); //Rutas resources no llevan nombre

//Route::resource('materias', 'MateriasController)->except(['index', 'show']);'

//Route::resource('materias', 'materiasController');
//route::apiResource('materias', 'MateriasapiController');
//Route::get('contactanos', 'ContactanosController');
//route::post('contactanos', 'MensajeController@store');
