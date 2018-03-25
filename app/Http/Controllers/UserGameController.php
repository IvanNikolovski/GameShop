<?php

namespace App\Http\Controllers;

use App\game;
use App\user_game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserGameController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
    }
    public function index() {
        $gamesArrs = [];
        $games = DB::table('user_games')->orderBy('ranked', 'DESC')->distinct('game_id')->pluck('game_id')->take(3);
        //dd($games);
        $gameIds = user_game::groupBy('game_id')->count();

        foreach ($games as $game){
          //game::where('id', '=', $game->game_id);
            $current = game::find($game);
            array_push($gamesArrs, $current);
        }
        //dd($gamesArrs);
        return view ('partials.index', compact('games', 'gamesArrs', 'gameIds'));
    }
    public function view($id){
        $game = game::find($id);
        //dd($game);
        return view ('users.buy', compact('game'));
    }

    public function buy($id){
        //dd(Auth::user()->id);
        //dd(\request()->all());
        user_game::create([
            'user_id' => Auth::user()->id,
            'game_id' => $id,
            'ranked' => \request('ranked')
        ]);
        return redirect ('/');
    }
}
