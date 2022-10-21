<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::orderBy('id', 'desc')->get();
        return view('admin.categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:categorias',
            'image' => 'required|image|max:2048',
        ]);

        $categoria = $request->all();

        if ($image = $request->file('image')) {
            $rutaGuardarImg = 'img/categorias/';
            $imageCategoria = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($rutaGuardarImg, $imageCategoria);
            $categoria['image'] = "$imageCategoria";
        }

        $categoria = Categoria::create($categoria);

        return redirect()->route('admin.categorias.edit', compact('categoria'))->with('info', 'La categoria se creo con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        return view('admin.categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        $request->validate([
            'name' => 'required',
            'slug' => "required|unique:categorias,slug,$categoria->id",
            'banner' => 'image|max:2048',
        ]);

        $cat = $request->all();

        if ($image = $request->file('image')) {
            $rutaGuardarImg = 'img/categorias/';
            $imageCategoria = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($rutaGuardarImg, $imageCategoria);
            $cat['image'] = "$imageCategoria";
        } else {
            unset($cat['image']);
        }

        $categoria->update($cat);
        return redirect()->route('admin.categorias.edit', compact('categoria'))->with('info', 'La categoria se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return redirect()->route('admin.categorias.index')->with('info', 'La categoria se elimino con exito');
    }
}
