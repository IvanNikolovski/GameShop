<?php

namespace App\Http\Controllers;

use App\game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class GameController extends Controller
{
    public function create() {
        return view ('games.create');
    }
    public function store() {
        $screenshotName = '';

        if (Input::hasFile('screenshot'))
        {
            //dd(\request()->all());
            $screenshotName = time(). request()->screenshot->getClientOriginalName();

            request()->screenshot->move(public_path('screenshot'), $screenshotName);
        }
        //dd($screenshotName);
        if (Auth::user()->role == 2 || Auth::user()->role == 3){
            Game::create([

                'name' => \request('name'),
                'price' => \request('price'),
                'publisher' => \request('publisher'),
                'description' => \request('description'),
                'screenshot' => $screenshotName
            ]);
            return redirect('partitions.index');
        }else{ session()->flash('message', 'Not Authorised for the action');
            return redirect ('/create');
        }

    }
}
