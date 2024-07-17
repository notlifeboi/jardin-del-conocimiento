<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comentario;

class homecontroller extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $comments = Comentario::with('user')->orderBy('created_at', 'asc')->get();
        return view('/', ['comments' => $comments]);
    }
    
    public function top3()
    {
        $comments = Comentario::with('user')->orderBy('created_at', 'asc')->get();
        return view('/top3', ['comments' => $comments]);
    }
};
