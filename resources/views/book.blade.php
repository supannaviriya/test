@extends('layouts/main')

@section('content')

<h1>This is Book Page</h1>

@foreach($books as $b) 
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Title{{ $b['book_title'] }}</h5>
                <h6 class="card-text">Author:  {{ $b['author'] }}</h6>
                <h6 class="card-text">IDR {{ $b['book_price'] }}</h6>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    @endforeach


@endsection