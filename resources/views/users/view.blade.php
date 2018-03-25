@extends("layouts.master")

@section('content')

    <div class="col-md-8">

        <h1>User profile</h1>
        <br>

        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{ $user->name }}</li>
                <li class="list-group-item">{{ $user->surname }}</li>
                <li class="list-group-item">{{ $user->email }}</li>
                <li class="list-group-item">{{ $user->username }}</li>
            </ul>
            <ul class="list-group list-group-flush">
                @foreach($gamesArrs as $game)
                <li class="list-group-item">{{ $game->name }}</li>
                @endforeach
            </ul>
            @if($ranked)<ul class="list-group list-group-flush"> <li class="list-group-item"> Ranked: {{ $ranked[0] }} </li></ul>
            @else
            <b>Ranked: </b> <select name="ranked" >
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select><br><br>
            @endIf
        </div>
    </div>

@endsection