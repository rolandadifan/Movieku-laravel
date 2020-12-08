<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
        'judul' => 'test1',
        'poster' => 'test',
        'pemeran' => 'test1',
        'negara' => 'test1',
        'sutradara' => 'test1',
        'imdb' => 'test1',
        'kualitas' => 'test1',
        'rilis' => 'test1',
        'durasi' => 'test1',
        'url' => 'test1',
        'sinopsis' => 'test1',
    ];
});
