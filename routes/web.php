<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FormadorController;
use App\Http\Controllers\DesarrolladorController;


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

// Route::get('/', function () {
//     return view('login');
// });

// Route::get('/insertsong', function () {
//     return view('insertSong');
// });

Route::view('/login',"login")->name('login');
//Route::view('/registro',"register")->name('registro');
Route::view('/desarrollador',"secret")->name('desarrollador.index');

//Route::post('/validar-registro',[LoginController::class, 'register'])->name('validar-registro');
Route::post('/iniciar-sesion',[LoginController::class, 'login'])->name('iniciar-sesion');
Route::post('/logout',[LoginController::class, 'logout'])->name('logout');




//Route::get('/formador', function () {
//return view('formador.index');
//});
//Route::get('/formador/create', [SongsController::class, 'create']);
 Route::resource('formador', FormadorController::class);

 //Route::resource('desarrollador', DesarrolladorController::class);

?>
