<?php

namespace Tests\Feature;

use App\Models\Movie;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Report;
use App\Models\Subscribe;
use Tests\TestCase;

class UserRoleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample20()
    {
        $response = $this->get('/movie');

        $response->assertStatus(302);
    }


    //get halaman movie streaming
    public function testExample25()
    {
        $response = $this->get('/movie/{movie}');

        $response->assertStatus(302);
    }

    //report film
    // public function testExample30()
    // {
    //     $response = $this->post(url('/report'), [
    //         'film' => 'film_id',
    //         'pesan' => 'terjadi error di video',
    //     ]);


    //     $this->assertCount(0, Report::all());
    // }

    //subscribe 
    // public function testExample52()
    // {
    //     $response = $this->post(url('/subscribe'), [
    //         'subscriber' => 'rolanda@gmail.com',
    //     ]);

    //     $this->assertCount(0, Subscribe::all());
    // }

    //search
    public function testExample51()
    {
        $response = $this->get(url('/list/search'), [
            'judul' => 'ironman',
        ]);

        $this->assertCount(0, Movie::all());
    }
}
