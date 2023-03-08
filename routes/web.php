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
    return view('welcome');
});

//Route::get('/formador', function () {
//return view('formador.index');
//});
//Route::get('/formador/create', [SongsController::class, 'create']);
 Route::resource('formador', FormadorController::class);

//Route::get('productos', [ProductController::class, 'index']);

// Login

Route::get('/', function () {
    return view('login');
});

// Route::get('productos/{producto}/precios/{precio?}', function ($producto, $precio=6) {
//     return "<h1>Este es el producto $producto y su precio es $precio</h1>";
// });


// Route::get('productos/{producto}/precios/{precio}', function ($producto, $precio) {
//     return "<h1>Este es el producto $producto y su precio es $precio</h1>";
// });
?>
