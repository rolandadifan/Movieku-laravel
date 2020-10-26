@extends('Admin.layouts.app')
@section('tittle' , 'Movie')
@section('content')


<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Movie</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html" class="text-muted">List page</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <table id="myTable" class="table display" width="100%">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Poster</th>
                <th>Negara</th>
                <th>rilis</th>
                <th>Imdb</th>
                <th>Durasi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movies as $movie)
            <tr>
                <td>{{$movie->judul}}</td>
                <td>
                    <img width="50px" src="{{url($movie->poster)}}" alt="">
                </td>
                <td>{{$movie->negara}}</td>
                <td>{{$movie->rilis}}</td>
                <td>{{$movie->imdb}}</td>
                <td>{{$movie->durasi}}</td>
                <td>
                    <a href="{{route('detail', $movie->id)}}" class="btn btn-secondary btn-sm">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a href="{{route('movie.edit', $movie->id)}}" class="btn btn-primary btn-sm">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                    <form action="{{route('movie.destroy', $movie->id)}}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger btn-sm">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


</div>


@endsection