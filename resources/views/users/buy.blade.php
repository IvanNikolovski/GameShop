@extends("layouts.master")

@section('content')

    <div class="col-md-8">

        <h1>Buying a game</h1>
        <br>

        <form action="/buy/{{ $game->id }}" method="post">
            {{ csrf_field() }}
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="/screenshot/{{ $game->screenshot }}" alt="Card image cap">
                <div class="card-body">
                    <b>Name:</b> <label class="card-title">{{ $game->name }}</label><br>
                    <b>Publisher:</b> <label class="card-title">{{ $game->publisher }}</label><br>
                    <b>Description:</b> <label class="card-title">{{ $game->description }}</label><br>
                    <b>Ranked</b> <select name="ranked">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select><br><br>
                    <button type="submit" class="btn btn-success">BUY</button>
                </div>
            </div>
        </form>


    </div>

@endsection