@extends('Admin.layouts.app')
@section('tittle' , 'Create')
@section('content')


<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Edit Movie</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html" class="text-muted">Edit page</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">

    <form action="{{route('movie.update', $movie->id)}}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="judul">Judul</label>
                <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="judul" value="{{ old('judul') ? old('judul') : $movie->judul }}">
                @error('judul') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="pemeran">Pemeran</label>
                <input type="text" name="pemeran" class="form-control" id="pemeran" value="{{ old('pemeran') ? old('pemeran') : $movie->pemeran}}">
                @error('pemeran') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="negara">Negara</label>
                <input type="text" name="negara" class="form-control @error('negara') is-invalid @enderror" id="negara" value="{{ old('negara ') ? old('negara') : $movie->negara}}">
                @error('negara') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="sutradara">Sutradara</label>
                <input type="text" name="sutradara" class="form-control @error('sutradara') is-invalid @enderror" id="sutradara" value="{{ old('sutradara') ? old('sutradara') : $movie->sutradara}}">
                @error('sutradara') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="imdb">imdb</label>
                <input type="text" name="imdb" class="form-control @error('imdb') is-invalid @enderror" id="imdb" value="{{ old('imdb') ? old('imdb') : $movie->imdb}}">
                @error('imdb') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="durasi">Durasi</label>
                <input type="text" name="durasi" class="form-control @error('durasi') is-invalid @enderror" id="durasi" value="{{ old('durasi') ? old('durasi') : $movie->durasi}}">
                @error('durasi') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="kualitas">kualitas</label>
                <input type="text" name="kualitas" class="form-control @error('kualitas') is-invalid @enderror" id="kualitas" value="{{ old('kualitas') ? old('kualitas') : $movie->kualitas}}">
                @error('kualitas') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="rilis">Rilis</label>
                <input type="text" name="rilis" class="form-control @error('rilis') is-invalid @enderror" id="rilis" value="{{ old('rilis') ? old('rilis') : $movie->rilis}}">
                @error('rilis') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
        </div>


        <div class="form-group">
            <label for="Genre">Genre</label>
            <select class="js-example-basic-multiple form-control" name="genre_id[]" multiple="multiple" required>
                @foreach($genres as $genre)
                <option value="{{$genre->id}}">{{$genre->genre}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="url">Url</label>
            <textarea name="url" id="url" cols="30" rows="10" class="form-control @error('url') is-invalid @enderror" value="{{$movie->url}}">
            {{$movie->url}}
            </textarea>
            @error('url') <div class="text-muted">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="sinopsis">Sinopsis</label>
            <textarea name="sinopsis" id="sinopsis" cols="30" rows="10" class="form-control @error('sinopsis') is-invalid @enderror" value="{{$movie->sinopsis}}">
            {{$movie->sinopsis}}
            </textarea>
            @error('sinopsis') <div class="text-muted">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="poster">Poster</label>
            <input type="file" name="poster" value="{{old('poster') ? old('poster') : $movie->poster}}}}" class="form-control" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary btn-md">Edit</button>
    </form>


</div>


@endsection