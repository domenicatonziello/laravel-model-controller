<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ env('APP_NAME') }}</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container">
        <h1 class="my-4 mx-0 text-center">Laravel Movies</h1>
        <div class="row">
            @forelse ($movies as $movie)
                <div class="card text-bg-dark m-1" style="max-width: 17rem;">
                    <div class="card-header text-danger">Film {{$movie->id}}</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-text"><strong class="text-white-50"> Original Title: </strong> {{ $movie->original_title}}</p>
                        <p class="card-text"><strong class="text-white-50"> Nationality: </strong> {{ $movie->nationality }}</p>
                        <p class="card-text"><strong class="text-white-50"> Date: </strong>  {{ $movie->date }}</p>
                        <p class="card-text"><strong class="text-white-50"> Vote: </strong>  {{ $movie->vote }}</p>
                    </div>
                </div>
            @empty
                <h3> Nessun Film disponibile </h3>   
            @endforelse
        </div>
    </div>
</body>
</html>