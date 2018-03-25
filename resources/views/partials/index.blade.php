@extends("layouts.master")

@section('content')


    <div class="col-md-12">

        <h1>Most wanted games</h1>
        <br>
        @foreach($gamesArrs as $game)

        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><img src="/screenshot/{{ $game->screenshot }}" style="height: 130px"></li>
                <li class="list-group-item"><b>Name: </b>{{ $game->name }}</li>
                <li class="list-group-item"><b>Publisher: </b>{{ $game->publisher }}</li>
                <li class="list-group-item"><b>Description: </b>{{ $game->description }}</li>
                <li class="list-group-item"><b>Price: </b>{{ $game->price }}</li>
                <li class="list-group-item"><b>Purchased: </b>{{ $games[0] }}</li>
                <li class="list-group-item"><b>Buy this GAME: </b><a href="/viewGame/{{$game->id}}">here</a></li>
            </ul>
        @endforeach

        </div>
    </div>

@endsection