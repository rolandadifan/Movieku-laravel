@extends('layouts.app')
@section('tittle', 'Movieku')
@section('content')
<!-- navbar -->
<section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a href="{{url('/')}}">
            <img src="{{asset('assets/img/logo.png')}}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('list.index')}}">ALL MOVIE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">ABOUT</a>
                </li>
            </ul>
        </div>
    </nav>
</section>
<!-- endnavbar -->

<!-- banner -->
<section id="banner">

    <div id="team-carousel" class="owl-carousel owl-theme">
        <div class="item">
            <div class="banner-info">
                <img src="{{asset('assets/img/banner1.png')}}" class="responsive">
                <div class="info">
                    <h4>Watch New Movie For Free</h4>
                    <a href="list.html" class="btn btn-secondary btn-sm">Discover Ur Movie</a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="banner-info">
                <img src="{{asset('assets/img/baner3.png')}}" class="responsive">
            </div>
        </div>
    </div>

</section>
<!-- endbanner -->

<!-- container -->
<section id="container">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Latest Update</h1>
                <div id="works-carousel" class="owl-carousel owl-theme">
                    @foreach($movies as $movie)
                    <div class="item">
                        <img src="{{url($movie->poster)}}" alt="Avatar" class="image" style="width:100%">
                        <div class="middle">
                            <a href="{{route('detail', $movie->id)}}" class="text">Watch</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- endcontainer -->

<!-- about -->
<section id="about">
    <div class="container">
        <h1>About</h1>
        <div class="row">
            <div class="col-md-6">
                <iframe width="560" height="315" class="yt-video" src="https://www.youtube.com/embed/HT0dgbwlZmo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
                    from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,
                    looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of
                    the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33
                    of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise
                    on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit
                    amet..", comes from a line in section 1.10.32.

                    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and
                    1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by
                    English versions from the 1914 translation by H. Rackham.</p>
            </div>
        </div>
    </div>
</section>
<!-- endabout -->
@endsection