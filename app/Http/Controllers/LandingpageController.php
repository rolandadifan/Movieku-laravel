<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Genre;
use App\Models\MovieGenre;

class LandingpageController extends Controller
{
    public function index()
    {
        $movies = Movie::orderBy('created_at', 'desc')->take(10)->get();
        return view('welcome')->with([
            'movies' => $movies
        ]);
    }
    public function show($id)
    {
        $movie = Movie::with('moviegenre')->where('id', $id)->first();
        $genre = Genre::all();
        return view('movieshow')->with([
            'movie' => $movie,
            'genre' => $genre
        ]);
    }
}
