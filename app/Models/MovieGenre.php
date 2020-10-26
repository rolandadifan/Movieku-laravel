<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Genre;
use App\Models\Movie;

class MovieGenre extends Model
{
    protected $table = 'genre_movie';
}
