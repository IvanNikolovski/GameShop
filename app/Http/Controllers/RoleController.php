<?php

namespace App\Http\Controllers;

use App\role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function create(){
        return view('roles.create');
    }
    public function store() {

        Role::create([

            'role_name' =>\request('role_name')
        ]);

        return redirect('/');

    }
}
