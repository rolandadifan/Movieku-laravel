@extends('Admin.layouts.app')
@section('tittle' , 'Subscribe')
@section('content')


<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Subscriber</h3>
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
                <th>No</th>
                <th>Subscriber</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subscribes as $movie)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$movie->subscriber}}</td>
                <td>{{$movie->created_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>


</div>


@endsection