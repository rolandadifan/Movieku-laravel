@extends('layouts.app')
@section('tittle', 'All Movie')
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
                    <a class="nav-link" href="{{url('/')}}">HOME</a>
                </li>
            </ul>
        </div>
    </nav>
</section>
<!-- endnavbar -->

<!-- content -->
<section id="detail">
    <div class="container">
        <h1>{{$movie->judul}}({{$movie->rilis}})</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="video">
                    @if($movie->url)
                    <iframe id="myFrame" class="responsive-iframe" src="{{$movie->url}}" scrolling="no" allowfullscreen="" frameborder="10px"></iframe>
                    @endif
                    <p>Video tidak ditemukan</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="info">
                    <table class="detail-info">
                        <tr class="table-1">
                            <th scope="row">Pemain </th>
                            <th>{{$movie->pemeran}}</th>
                        </tr>
                        <tr>
                            <th scope="row">Genre </th>
                            <th class="genre">
                                <div class="row">
                                    @foreach($movie->moviegenre as $gne)
                                    @php
                                    $genre = $genre->where('id', $gne->genre_id)->first();
                                    @endphp
                                    <p>{{$genre->genre}}</p>
                                    @endforeach
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th scope="row">Negara </th>
                            <th>{{$movie->negara}}</th>
                        </tr>
                        <tr>
                            <th scope="row">Sutradara </th>
                            <th>{{$movie->sutradara}}</th>
                        </tr>
                        <tr>
                            <th scope="row">Imdb </th>
                            <th>{{$movie->imdb}}</th>
                        </tr>
                        <tr>
                            <th scope="row">Kualitas </th>
                            <th>{{$movie->kualitas}}</th>
                        </tr>
                        <tr>
                            <th scope="row">Durasi </th>
                            <th>{{$movie->durasi}}</th>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-secondary btn-sm mt-4 mx-5" data-toggle="modal" data-target="#exampleModal">
                Report
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Report Masalah</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('report.post')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="film">Judul Film</label>
                                    <input type="text" class="form-control" id="filmreport" value="{{$movie->judul}}" disabled>
                                    <input type="hidden" class="form-control" id="filmreport" name="film" value="{{$movie->judul}}">
                                </div>

                                <div class="form-group">
                                    <label for="pesanreport">Pesan</label>
                                    <input type="text" class="form-control" id="pesanreport" name="pesan" maxlength="30">
                                    <small id="emailHelp" class="form-text text-muted">Contoh</small>
                                    <small id="emailHelp" class="form-text text-muted">video error, video tidak dapat diputar</small>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- endmodal -->

            <div class="sinopsis">
                <h1>Sinopsis</h1>
                <p>{{$movie->sinopsis}}</p>
            </div>
        </div>
    </div>
</section>
<!-- endcontent -->

<!-- comment -->
<section id="commnet">
    <div class="container">
        <h1>Komentar</h1>
        <div class="row">
            <div class="col">
                <div id="fb-root">
                    <div class="fb-background-color">
                        <div class="fb-comments" data-href="http://127.0.0.1:8000/fbcomment" data-numposts="5" data-width="100%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</section>
<!-- endcommnent -->




@endsection