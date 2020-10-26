@extends('Admin.layouts.app')
@section('tittle' , 'Profile')
@section('content')


<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Profile</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html" class="text-muted">Edit Profile</a>
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
    @if (session('eror'))
    <div class="alert alert-success">
        {{ session('eror') }}
    </div>
    @endif
    <form action="{{route('profile.update', Auth::user()->id)}}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf


        <div class="form-group col-md-6">
            <label for="Email">Email</label>
            <input class="form-control" value="{{ Auth::user()->email }}" disabled></input>
        </div>

        <div class="form-group col-md-6">
            <label for="name">name</label>
            <input type="text" name="name" class="form-control @error('Auth::user()->name') is-invalid @enderror" id="Auth::user()->name" value="{{ old('Auth::user()->name') ? old('Auth::user()->name') : Auth::user()->name }}">
            @error('name') <div class="text-muted">{{ $message }}</div> @enderror
        </div>

        <div class="form-group col-md-6">
            <label for="phone">phone</label>
            <input type="text" name="phone" class="form-control @error('Auth::user()->phone') is-invalid @enderror" id="Auth::user()->phone" value="{{ old('Auth::user()->phone') ? old('Auth::user()->phone') : Auth::user()->phone }}">
            @error('phone') <div class="text-muted">{{ $message }}</div> @enderror
        </div>

        <div class="form-group col-md-6">
            <label for="address">address</label>
            <input type="text" name="address" class="form-control @error('Auth::user()->address') is-invalid @enderror" id="Auth::user()->address" value="{{ old('Auth::user()->address') ? old('Auth::user()->address') : Auth::user()->address }}">
            @error('address') <div class="text-muted">{{ $message }}</div> @enderror
        </div>

        <div class="row">
            <div class="col">
                <a href="#" class="ml-3">change email</a>
                <a href="#" class="ml-3">change password</a>
            </div>
        </div>

        <br>
        <button type="submit" class="btn btn-primary btn-md ml-3">Update</button>
    </form>


</div>


@endsection