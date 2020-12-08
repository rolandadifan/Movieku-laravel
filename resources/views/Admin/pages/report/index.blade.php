@extends('Admin.layouts.app')
@section('tittle' , 'Report')
@section('content')
@include('sweetalert::alert')


<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Report</h3>
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
                <th>Film</th>
                <th>Pesan</th>
                <th>Tanggal</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reports as $movie)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$movie->film}}</td>
                <td>{{$movie->pesan}}</td>
                <td>{{$movie->created_at}}</td>
                <td>
                    <form action="{{route('report.destroy', $movie->id)}}" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Done</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


</div>


@endsection