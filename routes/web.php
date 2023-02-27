<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });

Route::get('productos', [ProductController::class, 'index']);

// Route::get('productos/{producto}/precios/{precio?}', function ($producto, $precio=6) {
//     return "<h1>Este es el producto $producto y su precio es $precio</h1>";
// });


// Route::get('productos/{producto}/precios/{precio}', function ($producto, $precio) {
//     return "<h1>Este es el producto $producto y su precio es $precio</h1>";
// });
