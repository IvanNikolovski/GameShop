@extends('layouts.master')

@section('content')

    <div class="col-md-8">

        <h1>Register</h1>
        <br>

        <form class="" action="/registration" method="POST">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Name: </label>
                <input type="text" class="form-control"  name="name" required>
            </div>

            <div class="form-group">
                <label for="surname">Surname: </label>
                <input type="text" class="form-control" name="surname" required>
            </div>

            <div class="form-group">
                <label for="email">E-mail: </label>
                <input type="email" class="form-control"  name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password: </label>
                <input type="password" class="form-control"  name="password" required>
            </div>

            <div class="form-group">
                <label for="username">User name: </label>
                <input type="text" class="form-control"  name="username" required>
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit">Register</button>
            </div>

            @include('layouts.errors')

        </form>

    </div>

@endsection