<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Categoria;
use App\Http\Controllers\Controller;

class CategoriaController extends Controller
{
    public function  index()
    {
        $categorias = Categoria::all();
        return view('admin.categorias.index', compact('categorias'));
    }

    public function create(){
        return view('admin.categorias.create');
    }


}
