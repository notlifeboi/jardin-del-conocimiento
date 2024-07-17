<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorias;
use App\Models\Comentario;
use App\Models\plantas;


class plantascontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias= categorias::all();
        $comments = Comentario::with('user')->orderBy('created_at', 'asc')->get();
        return view('categorias',['categoriasinfo'=>$categorias, 'comments'=>$comments]); 
    }
    public function categorias(categorias $categoria){
        $plantas = plantas::where('id_categoria',$categoria->id)->get();
        $comments = Comentario::with('user')->orderBy('created_at', 'asc')->get();
        return view('categorias_plantas',['categoriasinfo'=>$categoria,'plantasinfo'=>$plantas,'comments'=>$comments]);
    }
    public function categoria_crear_planta (categorias $categoria){
        $comments = Comentario::with('user')->orderBy('created_at', 'asc')->get();
        return view('crear_planta_categoria',['categoriasinfo'=>$categoria,'comments'=>$comments]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $comments = Comentario::with('user')->orderBy('created_at', 'asc')->get();
        return view('crear_planta',['comments'=>$comments]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $comments = Comentario::with('user')->orderBy('created_at', 'asc')->get();

        $newPlanta= new Plantas();
        $newPlanta -> nombre = $request -> get('nombrep');
        $newPlanta -> caracteristicas = $request -> get('caracteristicasp');
        $newPlanta -> descripcion = $request -> get('descripcionp');
        $newPlanta -> datos_claves = $request -> get('datos_clavesp');
        $newPlanta -> nombre_cientifico = $request -> get('nombre_cientificop');
        $newPlanta -> id_categoria = $request -> get('id_categoria');
        $newPlanta -> img = $request -> get('imgC');
        $newPlanta -> save();
        return view('/categorias',['comments'=>$comments]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $plantas = plantas::findOrFail($id);
        $comments = Comentario::with('user')->orderBy('created_at', 'asc')->get();
        return view('plantas',['plantasinfo'=>$plantas,'comments'=>$comments]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $plantaE= plantas::findOrFail($id);
        $comments = Comentario::with('user')->orderBy('created_at', 'asc')->get();
        return view('editar_planta',['infoEditarP'=>$plantaE,'comments'=>$comments]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $editPlanta= plantas::findOrFail($id);
        $editPlanta -> nombre = $request -> get('nombreEditp');
        $editPlanta -> caracteristicas = $request -> get('caracteristicasEditp');
        $editPlanta -> descripcion = $request -> get('descripcionEditp');
        $editPlanta -> datos_claves = $request -> get('datos_clavesEditp');
        $editPlanta -> nombre_cientifico = $request -> get('nombrecEditp');
        $editPlanta -> id_categoria = $request -> get('categoriaEditp');
        $editPlanta -> img = $request -> get('imgE');
        $editPlanta -> save();
        return redirect('/plantas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deletePlanta= plantas::findOrFail($id);
        $deletePlanta -> DELETE();
        return redirect('/plantas');
    }
}
