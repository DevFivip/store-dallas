<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('dashboard.categoria.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('dashboard.categoria.create', compact('categorias'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();



        if (isset($data['imagen'])) {
            $image = $request->file('imagen');

            $filename = time() . '.' . $image->getClientOriginalName();

            $path = $request->imagen->storeAs('public/', $filename);
            $data['imagen'] = $filename;
        }


        Categoria::create($data);
        return redirect('home/categoria');
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $categoria = Categoria::find($id);
        $categoria = $categoria->toArray();
        return view('dashboard.categoria.edit', compact('categoria'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        if (isset($data['imagen'])) {
            $image = $request->file('imagen');

            $filename = time() . '.' . $image->getClientOriginalName();

            $path = $request->imagen->storeAs('public/', $filename);
            $data['imagen'] = $filename;
        }



        $cat = Categoria::find($id);

        $cat->update($data);

        return redirect('home/categoria');


        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $categoria = Categoria::find($id)->delete();

        return $categoria;
        //
    }
}
