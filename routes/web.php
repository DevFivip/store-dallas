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
use App\Models\Headertron;
use App\Models\Informacion;
use App\Models\Producto;
use App\Models\Testimonio;
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
    $informacion = Informacion::first();
    $head = Headertron::all();
    $testimonio = Testimonio::first();
    $images = '';
    foreach ($head as $el) {
        $images .= '"' . env('APP_URL') . '/storage/' . $el->imagen . '",';
    }
    $images =  substr($images, 0, -1);

    // dd($testimonio);

    // dd($images);

    $productos = Producto::orderBy('updated_at','DESC')->limit(3)->get();
    return view('main.index', compact('informacion', 'head', 'images','productos','testimonio'));
});


Route::get('/producto/{id}', function ($id) {

    $informacion = Informacion::first();
    $head = Headertron::all();
    $producto = Producto::find($id);

    return view('main.producto', compact('informacion', 'head', 'producto'));
});




Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('home/informacion', InformacionController::class);
Route::resource('home/categoria', CategoriasController::class);
Route::resource('home/subcategoria', SubCategoriasController::class);
Route::resource('home/producto', ProductoController::class);

Route::resource('home/cliente', ClientesController::class);
Route::resource('home/testimonio', TestimonioController::class);


Route::resource('home/headertron', HeadertronController::class);
Route::resource('home/horario', HorarioController::class);

Route::resource('home/redes', RedesController::class);
