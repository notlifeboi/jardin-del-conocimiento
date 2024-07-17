<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;
use App\Models\categorias;
use App\Models\plantas;

class SearchController extends Controller
{
    public function buscar(Request $request)
    {
        $comments = Comentario::with('user')->orderBy('created_at', 'asc')->get();

        $busqueda = $request->input('buscar');

        $categorias = categorias::where('nombre', 'LIKE', '%' . $busqueda . '%')->get();
        $plantas = plantas::where('nombre', 'LIKE', '%' . $busqueda . '%')->get();

        return view('resultados', compact('categorias', 'plantas', 'busqueda', 'comments'));
    }
}
