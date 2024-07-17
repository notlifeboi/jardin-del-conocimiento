<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;
use Illuminate\Support\Facades\Auth;

class ComentarioController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        $datos = [
            'user_id' => Auth::id(),
            'type' => $request->type,
            'content' => $request->content,
        ];

        if($request->has('plantaid')){
            $datos['plantas_id'] = $request->plantaid;
        }

        $comentario = new Comentario($datos);
        $comentario->save();

        return back();
    }

    public function update(Request $request, Comentario $comment)
    {
        if ($comment->user_id !== Auth::id()) {
            return response()->json(['error' => 'No autorizado'], 403);
        }

        $request->validate([
            'content' => 'required|string',
        ]);

        $comment->update([
            'content' => $request->content,
        ]);

        return back();
    }

    public function reply(Request $request, Comentario $comment)
{
    $request->validate([
        'content' => 'required|string',
    ]);

    $datos = [
        'user_id' => Auth::id(),
        'type' => $request->type,
        'content' => $request->content,
        'parent_id' => $comment->id,
    ];

    if($request->has('plantaid')){
        $datos['plantas_id'] = $request->plantaid;
    }

    $comentario = new Comentario($datos);
    $comentario->save();

    return back();
}
    public function delete(Comentario $comment)
    {
        Comentario::where('parent_id', $comment->id)->delete();
        $comment->delete();

        return back();
    }
}
