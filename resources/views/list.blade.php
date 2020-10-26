@extends('layouts.app')
@section('tittle', 'All Movie')
@section('content')

<section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a href="{{url('/')}}">
            <img src="assets/img/logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <form action="{{route('list.search')}}" method="GET" class="form-inline my-2">
                        <input class="form-control mr-sm-2 search" name="search" id="search" type="text" placeholder="Search" aria-label="Search" autofocus>
                        <button type="submit" hidden>search</button>
                    </form>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">HOME</a>
                </li>
            </ul>
        </div>
    </nav>
</section>
<!-- endnavbar -->

<!-- list -->
<section id="list">
    <div class="container">
        <h1>List Movie</h1>
        <div class="row">
            <div class="col">
                @foreach($movies as $movie)
                <div class="list-item" id="list-item">
                    <p hidden>{{$movie->judul}}</p>
                    <img src="{{url($movie->poster)}}" alt="Avatar" class="image-list">
                    <div class="middle-list">
                        <a href="{{route('detail', $movie->id)}}" class="text-list">Watch</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="paginate">
            {{ $movies->links()}}
        </div>

</section>
<!-- endlist -->



@endsection