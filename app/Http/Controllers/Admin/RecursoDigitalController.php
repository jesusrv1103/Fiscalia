<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\RecursoDigital;
use App\Categoria;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\RedirectResponse;

use Illuminate\Http\Response;

class RecursoDigitalController extends Controller
{
    public function index()
    {
        $recursosDigitales = RecursoDigital::all();
        return view('admin.recursosDigitales.index', compact('recursosDigitales'));
    }
    public function create()
    {
        $categorias = Categoria::all();
        return view('admin.recursosDigitales.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        //  dd($request->has('published_at'));
        $this->validate($request, [
            'titulo' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required',
            'archivo' => 'required',
        ]);

        $recursoDigital = new RecursoDigital;
        $recursoDigital->titulo = $request->get('titulo');
        $recursoDigital->descripcion = $request->get('descripcion');
        $recursoDigital->categoria_id = $request->get('categoria');
        $request->file('archivo')->store('public');
        $recursoDigital->archivo = $request->file('archivo')->store('public');
        //etiquetas
        $recursoDigital->save();
        return back()->with('flash', 'Tu recurso ha sido guardado');
  
       // dd($request->file('archivo'));
    }


    public function edit($id)
    { 
        $categorias = Categoria::all();
        $recursoDigital= RecursoDigital::find($id);
        return view('admin.recursosDigitales.edit', compact('categorias','recursoDigital'));
    }

    public function update(Request $request,$id)
    { 
        $this->validate($request, [
            'titulo' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required',
            'archivo' => 'required',
        ]);

        $recurso= RecursoDigital::find($id);
        $recurso->titulo = $request->get('titulo');
        $recurso->descripcion = $request->get('descripcion');
        $recurso->categoria_id = $request->get('categoria');
        $request->file('archivo')->store('public');
        $recurso->archivo = $request->file('archivo')->store('public');
        $recurso->update();

        return redirect('/admin/recursos_digitales')->with('message', 'Stock has been added');
    }

    public function destroy($id)
    { 
         // delete
         $recurso = RecursoDigital::find($id);
         $recurso->delete();
 

        return back()->with('flash', 'Recurso eliminado correctamente');
    }
}

