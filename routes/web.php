<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FormadorController;
use App\Http\Controllers\DesarrolladorController;
use Illuminate\Support\Facades\Artisan;

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

/* Route::view('/login',"login")->name('login'); */
//Route::view('/registro',"register")->name('registro');
/* Route::view('/desarrollador',"index")
->middleware('auth')
->name('desarrollador');  */



//Route::post('/validar-registro',[LoginController::class, 'register'])->name('validar-registro');
/* Route::post('/iniciar-sesion',[LoginController::class, 'login'])->name('iniciar-sesion'); */
// Route::post('/logout',[LoginController::class, 'logout'])->name('logout');
//Route::resource('desarrollador', DesarrolladorController::class);
 // Route::resource('desarrollador', 'App\Http\Controllers\DesarrolladorController');



//Route::get('/formador', function () {
//return view('formador.index');
//});
//Route::get('/formador/create', [SongsController::class, 'create']);
 Route::resource('formador', FormadorController::class); 

 Route::resource('desarrollador', DesarrolladorController::class);
 


 /* Route::get('/', function () {
    return view('desarrollador.index');
})->middleware('auth'); */

/* Route::get('/desarrollador/create', [DesarrolladorController::class, 'create'])
    ->middleware('auth.coder')
    ->name('desarrollador.create');

Route::get('/desarrollador', [DesarrolladorController::class, 'index'])
    ->middleware('auth.coder')
    ->name('desarrollador.index'); */

/* 

Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store'); */



Route::get('/login', [LoginController::class, 'create'])
    ->name('login');

Route::post('/login', [LoginController::class, 'login'])
    ->name('login.store');

Route::get('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');


// Route::get('/formador', [FormadorController::class, 'index'])
//     ->middleware('auth.trainer')
//     ->name('formador.index');

Route::get('storage-link', function(){
    Artisan::call('storage:link');
});


?>
