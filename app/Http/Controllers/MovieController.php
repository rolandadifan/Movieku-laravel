<?php

namespace App\Http\Controllers;


use App\Http\Requests\MovieRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Movie;
use App\Models\Genre;
use App\Models\MovieGenre;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        return view('Admin.pages.movie.index')->with([
            'movies' => $movies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::all();
        return view('Admin.pages.movie.create')->with([
            'genres' => $genres
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MovieRequest $request)
    {
        $data = $request->all();
        $data['poster'] = $request->file('poster')->store(
            'assets/poster',
            'public'
        );
        $data = Movie::create($data);
        $data->genres()->attach($request->input('genre_id'));

        return redirect()->route('movie.index')->with('success', 'Movie Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $genres = Genre::all();
        $movie = Movie::findOrFail($id);
        return view('Admin.pages.movie.edit')->with([
            'movie' => $movie,
            'genres' => $genres
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MovieRequest $request, $id)
    {
        $data = $request->all();
        $data['poster'] = $request->file('poster')->store('assets/poster', 'public');

        $movie = Movie::findOrFail($id);
        $movie->genres()->sync($request->input('genre_id'));

        $movie->update($data);
        return redirect()->route('movie.index')->with('success', 'data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $data = Movie::findOrFail($id);
        $data->genres()->detach($request->input('genre_id'));
        $data->delete();

        return redirect()->back()->with('success', 'Movie Berhasil dihapus');
    }
}
