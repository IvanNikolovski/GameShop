@extends('layouts.master')

@section('content')
    <div class="col-md-6">

        <h1>Roles</h1>
        <br>

        <form class="" action="/roles" method="POST">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="role_name">Name: </label>
                <input type="text" class="form-control"  name="role_name" required>
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit">Register</button>
            </div>

            @include('layouts.errors')

        </form>

    </div>
@endsection