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
use App\Models\Categoria;
use App\Models\Headertron;
use App\Models\Horario;
use App\Models\Informacion;
use App\Models\Producto;
use App\Models\Testimonio;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
    $testimonios = Testimonio::all();
    $horarios = Horario::all();
    $productos = Producto::orderBy('updated_at', 'DESC')->limit(3)->get();
    return view('main.index', compact('informacion', 'head', 'productos', 'testimonios', 'horarios'));
});

Route::get('/contactanos', function (Request $request) {

    $data = $request->all();
    $informacion = Informacion::first();
    $horarios = Horario::all();
    $message = false;


    if (!!count($data)) {
        $subject = "Asunto del correo";
        $for = "adolfo.gbztt@gmail.com";

        // dd($request->all());

        Mail::send('email', $request->all(), function ($msj) use ($subject, $for) {
            $msj->from("nashoralex@gmail.com", "NombreQueApareceráComoEmisor");
            $msj->subject($subject);
            $msj->to($for);
        });
        $message = true;
    }

    return view('main.contactanos', compact('informacion', 'horarios', 'message'));
});


Route::post('/contactanos', function (Request $request) {
    $data = $request->all();

    // dd($data);

    $informacion = Informacion::first();
    $horarios = Horario::all();
    $mesaje = true;



    return redirect('main.contactanos');
    return view('main.contactanos', compact('informacion', 'horarios', 'mensaje'));
});



Route::get('/productos', function (Request $request) {
    $where = $request->all();
    if (isset($where['page'])) {
        unset($where['page']);
    }
    $informacion = Informacion::first();
    $paginator = Producto::where($where)->with('categoria')->paginate(6);
    $productos_last_modification = Producto::orderBy('updated_at', 'desc')->limit(4)->get();
    $categorias = Categoria::with('productos')->get();
    $horarios = Horario::all();
    return view('main.productos', compact('informacion', 'paginator', 'categorias', 'productos_last_modification', 'horarios'));
});


Route::get('/producto/{id}', function ($id) {
    $informacion = Informacion::first();
    $producto = Producto::with("categoria", "subcategoria")->find($id);
    $categoria_id = $producto->categoria_id;
    $subcategoria_id = $producto->subcategoria_id;

    $productos_categoria = Producto::where("categoria_id", $categoria_id)->orderby("updated_at", "desc")->whereNotIn('id', [$producto->id])->limit(3)->get();
    $pl_categorias = $productos_categoria->pluck('id');
    $productos_subcategoria = Producto::where("subcategoria_id", $subcategoria_id)->orderby("updated_at", "desc")->whereNotIn('id', [$pl_categorias])->limit(3)->get();

    $horarios = Horario::all();
    return view('main.producto', compact('informacion',  'producto', 'horarios', 'productos_categoria', 'productos_subcategoria'));
});

// Auth::routes([
//     'register' => false, // Registration Routes...
//     'reset' => false, // Password Reset Routes...
//     'verify' => false, // Email Verification Routes...
// ]);

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
