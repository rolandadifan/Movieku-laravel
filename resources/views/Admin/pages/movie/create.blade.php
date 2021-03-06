@extends('Admin.layouts.app')
@section('tittle' , 'Create')
@section('content')


<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Add Movie</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html" class="text-muted">Create page</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">

    <form action="{{route('movie.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="judul">Judul</label>
                <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="judul" value="{{ old('judul') }}">
                @error('judul')
                <div class="invalid-tooltip">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="pemeran">Pemeran</label>
                <input type="text" name="pemeran" class="form-control" id="pemeran" value="{{ old('pemeran') }}">
                @error('pemeran')
                <div class="invalid-tooltip">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="negara">Negara</label>
                <input type="text" name="negara" class="form-control @error('negara') is-invalid @enderror" id="negara" value="{{ old('negara ') }}">
                @error('negara')
                <div class="invalid-tooltip">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="sutradara">Sutradara</label>
                <input type="text" name="sutradara" class="form-control @error('sutradara') is-invalid @enderror" id="sutradara" value="{{ old('sutradara') }}">
                @error('sutradara')
                <div class="invalid-tooltip">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="imdb">imdb</label>
                <input type="text" name="imdb" class="form-control @error('imdb') is-invalid @enderror" id="imdb" value="{{ old('imdb')}}">
                @error('imdb')
                <div class="invalid-tooltip">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="durasi">Durasi</label>
                <input type="text" name="durasi" class="form-control @error('durasi') is-invalid @enderror" id="durasi" value="{{ old('durasi') }}">
                @error('durasi')
                <div class="invalid-tooltip">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="kualitas">kualitas</label>
                <input type="text" name="kualitas" class="form-control @error('kualitas') is-invalid @enderror" id="kualitas" value="{{ old('kualitas')}}">
                @error('kualitas')
                <div class="invalid-tooltip">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="rilis">Rilis</label>
                <input type="text" name="rilis" class="form-control @error('rilis') is-invalid @enderror" id="rilis" value="{{ old('rilis') }}">
                @error('rilis')
                <div class="invalid-tooltip">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>


        <div class="form-group">
            <label for="Genre">Genre</label>
            <select class="js-example-basic-multiple form-control" name="genre_id[]" multiple="multiple">
                @foreach($genres as $genre)
                <option value="{{$genre->id}}">{{$genre->genre}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="url">Url</label>
            <textarea name="url" id="url" cols="30" rows="10" class="form-control @error('url') is-invalid @enderror"></textarea>
            @error('url')
            <div class="invalid-tooltip">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="sinopsis">Sinopsis</label>
            <textarea name="sinopsis" id="sinopsis" cols="30" rows="10" class="form-control @error('sinopsis') is-invalid @enderror"></textarea>
            @error('sinopsis')
            <div class="invalid-tooltip">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="poster">Poster</label>
            <input type="file" name="poster" class="form-control" accept="image/*" required>
        </div>

        <button type="submit" class="btn btn-primary btn-md">Tambah</button>
    </form>


</div>


@endsection