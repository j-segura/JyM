<?php

namespace App\Http\Controllers;
use App\Models\Home;
use App\Models\Categoria;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $categorias = Categoria::latest('id')->get();
        $homes = Home::latest('id')->paginate(9);
        return view('homes.index', compact('homes', 'categorias'));
    }

    public function show(Home $home){
        return view('homes.show', compact('home'));
    }
}
