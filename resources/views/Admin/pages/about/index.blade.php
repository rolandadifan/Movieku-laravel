@extends('Admin.layouts.app')
@section('tittle' , 'About')
@section('content')


<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">About</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html" class="text-muted">About page</a>
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

    <form action="{{route('about.update', $about->id)}}" method="POST">
        @method('put')
        @csrf
        <div class="form-group">
            <textarea name="about" id="about" cols="30" rows="10" class="form-control" value="">{{$about->about}}</textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary btn-md ">Update</button>
    </form>



</div>


@endsection