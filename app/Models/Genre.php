<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Movie;
use App\Models\MovieGenre;

class Genre extends Model
{
    protected $fillable = [
        'genre',
    ];

    protected $hidde = [];

    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'genre_movie');
    }
}
