<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\HeadertronController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\InformacionController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RedesController;
use App\Http\Controllers\SubCategoriasController;
use App\Http\Controllers\TestimonioController;
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

Route::get('/', function () {
    return view('main.index');
});


Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::resource('informacion', InformacionController::class);
Route::resource('categoria', CategoriasController::class);
Route::resource('subcategoria', SubCategoriasController::class);
Route::resource('producto', ProductoController::class);

Route::resource('cliente', ClientesController::class);
Route::resource('testimonio', TestimonioController::class);


Route::resource('headertron', HeadertronController::class);
Route::resource('horario', HorarioController::class);

Route::resource('redes', RedesController::class);
