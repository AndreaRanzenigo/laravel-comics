<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerComic extends Controller
{
    //Comics
    public function index()
    {
        $comics = config('comics');
        
        return view('home', compact('comics'));
    }
}
