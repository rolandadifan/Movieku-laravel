<?php

namespace Tests\Feature;

use App\User;
use App\Models\Movie;
use App\Models\About;
use App\Models\Smedia;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminAuthTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

    //get role admin
    public function testExample1()
    {
        $response = $this->get('/admin')->assertRedirect('/login');

        $response->assertStatus(302);
    }

    //admin login
    public function testExample4()
    {
        $user = new User([
            'id' => 1,
            'name' => 'yish'
        ]);

        $this->be($user);
    }

    //admin get movie list
    public function testExample5()
    {
        $this->actingAs(factory(User::class)->create());

        $response = $this->get('/movie')->assertOk();
    }

    //get halaman subscribe
    public function testExample10()
    {
        $this->actingAs(factory(User::class)->create());

        $response = $this->get('/subscribe')->assertOk();
    }

    //admin create movie
    public function testExample11()
    {

        // $this->withoutExceptionHandling();
        // // $this->factory(Movie::class)->create();

        // $movie = factory(Movie::class)->create();
        // $user = factory(User::class)->create();

        // $response = $this->actingAs($user)->post(route('movie.store'), [
        //     'judul' => 'test1',
        //     'poster' => 'test1',
        //     'pemeran' => 'test1',
        //     'negara' => 'test1',
        //     'sutradara' => 'test1',
        //     'imdb' => 'test1',
        //     'kualitas' => 'test1',
        //     'rilis' => 'test1',
        //     'durasi' => 'test1',
        //     'url' => 'test1',
        //     'sinopsis' => 'test1'
        // ]);

        // $response->assertStatus(302);

        $response = $this->post(route('movie.store'), [
            'judul' => 'test1',
            'poster' => 'test1',
            'pemeran' => 'test1',
            'negara' => 'test1',
            'sutradara' => 'test1',
            'imdb' => 'test1',
            'kualitas' => 'test1',
            'rilis' => 'test1',
            'durasi' => 'test1',
            'url' => 'test1',
            'sinopsis' => 'test1'
        ]);


        $this->assertCount(0, Movie::all());
    }


    //admin update movie
    public function testExample15()
    {
        $response = $this->patch('/movie/{movie}', [
            'judul' => 'test1',
            'poster' => 'test1',
            'pemeran' => 'test1',
            'negara' => 'test1',
            'sutradara' => 'test1',
            'imdb' => 'test1',
            'kualitas' => 'test1',
            'rilis' => 'test1',
            'durasi' => 'test1',
            'url' => 'test1',
            'sinopsis' => 'test1'
        ]);

        $this->assertCount(0, Movie::all());
    }

    //tambah film
    public function testExample16()
    {
        $response = $this->post(route('movie.store'), [
            'judul' => 'test1',
            'poster' => 'test1',
            'pemeran' => 'test1',
            'negara' => 'test1',
            'sutradara' => 'test1',
            'imdb' => 'test1',
            'kualitas' => 'test1',
            'rilis' => 'test1',
            'durasi' => 'test1',
            'url' => 'test1',
            'sinopsis' => 'test1'
        ]);

        // $movie = Movie::first();
        $response = $this->delete('/movie/{movie}');

        $this->assertCount(0, Movie::all());
    }

    //update data movie
    public function testExample17()
    {
        $response = $this->post(url('/movie/{id}'), [
            'judul' => 'test2',
            'poster' => 'test2',
            'pemeran' => 'test2',
            'negara' => 'test2',
            'sutradara' => 'test2',
            'imdb' => 'test2',
            'kualitas' => 'test2',
            'rilis' => 'test2',
            'durasi' => 'test2',
            'url' => 'test2',
            'sinopsis' => 'test2'
        ]);

        // $movie = Movie::first();
        $response = $this->delete('/movie/{movie}');

        $this->assertCount(0, Movie::all());
    }

    //delete movie
    public function testExample19()
    {

        // $movie = Movie::first();
        $response = $this->delete('/movie/{movie}');

        $this->assertCount(0, Movie::all());
    }

    //update data movie
    public function testExample21()
    {
        $response = $this->post(url('/about/{id}'), [
            'about' => 'ini menu baru',
        ]);

        // $movie = Movie::first();
        $response = $this->delete('/about/{id}');

        $this->assertCount(0, About::all());
    }

    public function testExample22()
    {
        $response = $this->post(url('/setting/update/{id}'), [
            'facebook' => 'facebooknew.com',
            'twitter' => 'twitternew.com',
            'instagram' => 'instagramnew.com',
            'others' => 'othersnew.com',
        ]);


        $this->assertCount(0, Smedia::all());
    }
}
