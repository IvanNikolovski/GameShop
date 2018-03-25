<?php

namespace App\Http\Controllers;

use App\game;
use App\User;
use App\user_game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function view() {
        $gamesArrs = [];
        $id =  Auth::user()->id;
        $user = User::find($id);
        $games = user_game::where('user_id', '=', $id)->distinct('game_id')->pluck('game_id');
        //dd($games);
        $ranked = user_game::where('user_id', '=', $id)->distinct('ranked')->pluck('ranked');
            foreach ($games as $game){
             //dd($ranked);
            $current = game::find($game);
            //dd($current->ranked);
            array_push($gamesArrs, $current);
        }
        //dd($gamesArrs);
        return view ('users.view', compact('user', 'games', 'gamesArrs', 'ranked'));
    }
}
