@if(isset($movie))
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
@endif