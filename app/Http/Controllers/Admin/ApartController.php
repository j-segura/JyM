<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Location;
use App\Models\Zone;

class ApartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homes = Home::latest('id')->get();
        return view('admin.home.index', compact('homes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::pluck('name', 'id')->toArray();
        $locations = Location::pluck('name', 'id')->toArray();
        $zones = Zone::pluck('name', 'id')->toArray();
        return view('admin.home.create', compact('categorias', 'locations', 'zones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'slug' => 'required|unique:homes',
                'metrosCuadrados' => 'required',
                'valor' => 'required',
                'direccion' => 'required',
                'image' => 'required|image|max:2048',
                'descripcion' => 'required',
                'categoria_id' => 'required',
                'location_id' => 'required',
                'zone_id' => 'required',
            ]
        );

        $home = $request->all();

        if ($image = $request->file('image')) {
            $rutaGuardarImg = 'img/hogares/';
            $imageHome = "articulo" . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($rutaGuardarImg, $imageHome);
            $home['image'] = "$imageHome";
        }

        $home = Home::create($home);

        return redirect()->route('admin.homes.edit', compact('home'))->with('info', 'La propiedad se agrego con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        $categorias = Categoria::pluck('name', 'id')->toArray();
        $locations = Location::pluck('name', 'id')->toArray();
        $zones = Zone::pluck('name', 'id')->toArray();
        return view('admin.home.edit', compact('home', 'categorias', 'locations', 'zones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        $request->validate(
            [
                'name' => 'required',
                'slug' => "required|unique:homes,slug,$home->id",
                'metrosCuadrados' => 'required',
                'valor' => 'required',
                'direccion' => 'required',
                'image' => 'image|max:2048',
                'descripcion' => 'required',
                'categoria_id' => 'required',
                'location_id' => 'required',
                'zone_id' => 'required',
            ]
        );

        $prop = $request->all();

        if ($image = $request->file('image')) {
            $rutaGuardarImg = 'img/hogares/';
            $imageHome = "articulo" . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($rutaGuardarImg, $imageHome);
            $prop['image'] = "$imageHome";
        }else{
            unset($prop['image']);
        }

        $home->update($prop);

        return redirect()->route('admin.homes.edit', compact('home'))->with('info', 'La propiedad se actualizo con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        $home->delete();
        return redirect()->route('admin.homes.index')->with('info', 'El hogar se elimino con exito');
    }
}
