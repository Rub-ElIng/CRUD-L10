<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


/*Route::controller(CursoController::class)->group(function(){
    Route::get('cursos','index')->name('cursos.index');
    Route::get('cursos/create','create')->name('cursos.create');
    Route::get('cursos/{curso}','show')->name('cursos.show');
});*/
//forma de llamar un  controlador en laravel 8->

Route::get('/', HomeController::class);

Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');

Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');

Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');

Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update'); 

Route::delete('cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy'); 


//forma de llamar un controlador laravel 7<-
//Route::get('/', "HomeController");
//Route::get('cursos', "CursoController@index");




// recorre las rutas en orden y si esta antes valida esta ruta

/*Route::get('cursos/{curso}',function($curso){
    return "Bienvenido al cursos $curso";
});*/

//Route::get('cursos/create', [CursoController::class, 'create']);

//Route::get('cursos/{curso}', [CursoController::class, 'show']);
/*
Route::get('cursos/{curso}/{categoria}',function($curso, $categoria){
    return "Bienvenido al cursos $curso, de la categoria $categoria";
});

//el signo de interrogacion nos indica que la variable puede o no enviarse  pero se tiene qu einiacilizar en null y asi solo recibe 1 o las que sean realmente requeridas
//con el if validas si solo se enviara 1 las 2 variables
//todo esto va en el controlador
Route::get('cursos/{curso}/{categoria?}',function($curso, $categoria=null){
    if ($categoria) {
        return "Bienvenido al cursos $curso, de la categoria $categoria";
    } else {
        return "Bienvenido al cursos $curso";
    }
    
});*/