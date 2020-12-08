@extends('Admin.layouts.app')
@section('tittle' , 'Social Media')
@section('content')
@include('sweetalert::alert')


<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Settings</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html" class="text-muted">Settings page</a>
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

    <form action="{{route('update.setting', $medias->id)}}" method="POST">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="facebook">Facebook</label>
            <input type="text" name="facebook" id="facebook" class="form-control" value="{{$medias->facebook}}">
        </div>
        <div class="form-group">
            <label for="facebook">Facebook</label>
            <input type="text" name="twitter" id="twitter" class="form-control" value="{{$medias->twitter}}">
        </div>
        <div class="form-group">
            <label for="facebook">Facebook</label>
            <input type="text" name="instagram" id="instagram" class="form-control" value="{{$medias->instagram}}">
        </div>
        <div class="form-group">
            <label for="facebook">Facebook</label>
            <input type="text" name="others" id="others" class="form-control" value="{{$medias->others}}">
        </div>

        <button type="submit" class="btn btn-primary btn-md ">Update</button>
    </form>



</div>


@endsection