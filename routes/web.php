<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormadorController;


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

Route::get('/', function () {
     return view('login');
});

// Route::get('/insertsong', function () {
//     return view('insertSong');
//  });

// Route::get('/formador', function () {
// return view('formador.index');
// });
// //Route::get('/formador/create', [SongsController::class, 'create']);
  Route::resource('formador', FormadorController::class);
 // Route::resource('formador', 'App\Http\Controllers\FormadorController');

//Route::get('/', 'login')->name('login');
// Route::controller(FormadorController::class)->group(function(){
// Route::get('/formador', 'index')->name('formador');
//Route::get('/formador/{formador}/edit', 'edit')->name('formador');

//     Route::get('blog/{post:slug}', 'post')->name('post');
//  })

?>
