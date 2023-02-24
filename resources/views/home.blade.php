@extends('layout.main')

@section('content')
    <div class="container">
        <h1 class="my-4 mx-0 text-center">Laravel Movies</h1>
        <div class="row">
            @forelse ($movies as $movie)
                @include('includes.card')
            @empty
                <h3> Nessun Film disponibile </h3>   
            @endforelse
        </div>
    </div>
@endsection