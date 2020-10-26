<?php

namespace App\Models;


use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Genre;
use App\Models\MovieGenre;

class Movie extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'judul', 'poster', 'pemeran', 'negara', 'sutradara', 'imdb', 'kualitas', 'rilis', 'durasi', 'sinopsis', 'url',
    ];

    protected $hidden = [];

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'genre_movie')->withTimestamps()->withPivot('genre_id', 'id');
    }

    public function moviegenre()
    {
        return $this->hasMany('App\Models\MovieGenre', 'movie_id');
    }

    public function getposterAttribute($value)
    {
        return url('storage/' . $value);
    }
}
