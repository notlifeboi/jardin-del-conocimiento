<?php

namespace App\Http\Controllers;

use App\Models\categorias;
use App\Models\Comentario;
use Illuminate\Http\Request;

class categoriascontroller extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias= categorias::all();
        $comments = Comentario::with('user')->orderBy('created_at', 'asc')->get();
        return view('categorias',['categoriasinfo'=>$categorias, 'comments' => $comments]);
    }

    /**
     * @return \Illuminate\Http\Response
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $comments = Comentario::with('user')->orderBy('created_at', 'asc')->get();
        return view('crear_categoria', ['comments' => $comments]);
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newCategoria= new categorias();
        $newCategoria->nombre = strtoupper($request->get('NombreC'));
        $newCategoria ->img = $request->get('imgC');
        $newCategoria -> save();
        return redirect('/categorias');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categoriaE= categorias::findOrFail($id);
        $comments = Comentario::with('user')->orderBy('created_at', 'asc')->get();
        return view('editar_categoria',['infoEditar'=>$categoriaE, 'comments' => $comments]);
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $editCategoria= categorias::findOrFail($id);
        $editCategoria ->nombre = strtoupper($request->get('nombreE'));
        $editCategoria ->img = $request->get('imgE');
        $editCategoria -> save();
        return redirect('/categorias');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteCategoria= categorias::findOrFail($id);
        $deleteCategoria -> DELETE();
        return redirect('/categorias');
    }
}
