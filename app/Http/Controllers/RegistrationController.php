<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\game;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{   public function __construct()
{
    $this->middleware('guest');
}

    public function create() {
        return view('registration.create');
    }
    //Validate the form
    public function store() {
        $this->validate(\request(), [
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'username' => 'required',

        ]);
        //Create and save the user
        //dd(\request()->all());
        $user = User::create([
            'name' => \request('name'),
            'surname' => \request('surname'),
            'email' => \request('email'),
            'password' => bcrypt(\request('password')),
            'username' => (\request('username')),
            'role' => 1
        ]);
        //\request()->session()->flash('status', 'Task was successful!');
        session()->flash('message', 'Your registration was successfull.');
        //\Mail::to($user)->send(new Welcome());
        return view('sessions.create');
    }
}
