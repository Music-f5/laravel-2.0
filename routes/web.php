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

Route::get('/insertsong', function () {
    return view('insertSong');
});

//Route::get('/formador', function () {
//return view('formador.index');
//});
//Route::get('/formador/create', [SongsController::class, 'create']);
 Route::resource('formador', FormadorController::class);

?>
