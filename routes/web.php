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
// Si quisiera protejer a una ruta con un middleware de autenticacion,
// podemos usar al final de la ruta middleware('auth)
// Y si te preguntas de donde viene 'auth', viene de
// App\Http\Kernel.php, en una lista que señala 'auth' con
// la clase \App\Http\Middleware\Authenticate
Route::get('/', function () {
    return view('welcome');
})->middleware('auth', 'subscribed', 'verify-age');
/**
 * Una persona con poca experiencia
 * usaría estos if pero en las vistas,
 * en cada método de un controlador o
 * en cada una de las rutas. Esto funcionaria
 * pero no es la manera correcta de trabajar.
 */
