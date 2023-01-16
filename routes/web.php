<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
//cuando el controlador solo tiene una ruta especifica entonces esta es la sentencia basica
//la ruta buscara el metodo invoke de inmediato
Route::get('/', HomeController::class);
Route::get('cursos', [CursoController::class, 'index']);

/*Route::get('cursos', function () {
    //return view('welcome');
    return('bienvenido a la pagina cursos' );
});
*/
//en caso tenga muchas rutas tienes que espeficiar al controlador mediante un array que metodo estas buscando o que ruta
Route::get('cursos/create', [CursoController::class, 'create']);
/*
Route::get('cursos/create', function () {
    return "en esta pagina podras crear un curso";
});
*/
Route::get('cursos/{curso}', [CursoController::class, 'show']);
//para que funcione no debe de estar entre parentesis y debe de tener dos comillas no solo 1 igual en los ejemplos anteriores corregir
//se dejara los errores de los ejemplos anteriorespara poder rescatar esta observacion importante
/*Route::get('cursos/{curso}', function ($curso) {
    //return view('welcome');
    return "bienvenido al curso: $curso";
});

//tambien puede recibir mas de una variable 
Route::get('cursos/{curso}/{categoria}', function ($curso,$categoria) {
    //return view('welcome');
    return "bienvenido al curso: $curso, de la categoria $categoria";
});
*/
//en caso no quieras hacer tantos routes como los dos ultimos se puede juntar en un solo con 
//condicionales if y ademas poniendo el simbolo de pregunta en la vaiable, ademas asignar un valor
//inicial de null para que no haya problemas como se muestra a continuacion
/*
Route::get('cursos/{curso}/{categoria?}', function ($curso,$categoria = null) {
    if($categoria){
        return "bienvenido al curso: $curso, de la categoria $categoria";
    }
    else{
        return "bienvenido al curso: $curso";
    }
    
});
*/

/*en laravel 9 existen unos atajos para poder sintetisar un poco mas el codigo de rutas en caso que las rutas 
esten agrupadas en un solo controlador como lo es en CusoController se puede hacer lo siguiente 

se asigna el controlador como una variable global dentro de esta funcion routes y funcionaria de la mism manera solo se
pone el nombre de la ruta y la funcion o ruta que se necesita como se observa a continuacion cabe recalcar
que si pongo una ruta que este en otro controlador no bah funcionar observacion importante
Route::controller(CursoController::class)->group(function(){
    Route::get('cursos','index');
    Route::get('cursos/create','create');
    Route::get('cursos/{curso}','show');
});
*/