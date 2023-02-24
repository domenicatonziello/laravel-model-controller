<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class HomeController extends Controller
{
    //
    public function home()
    {
        $movies = Movie::all();
        return view('home', compact('movies'));
    }
    public function about()
    {
        return view('about');
    }
    public function contatti()
    {
        return view('contatti');
    }
}
