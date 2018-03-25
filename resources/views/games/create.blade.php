@extends("layouts.master")

@section('content')

    <div class="col-md-8">

        <h1>Adding a new game</h1>
        <br>

        <form class="" action="/create" method="POST" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Name: </label>
                <input type="text" class="form-control"  name="name" required>
            </div>

            <div class="form-group">
                <label for="price">Price: </label>
                <input type="number" class="form-control" name="price" required min="0">
            </div>

            <div class="form-group">
                <label for="publisher">Publisher: </label>
                <input type="text" class="form-control"  name="publisher" required>
            </div>

            <div class="form-group">
                <label for="description">Description: </label>
                <input type="text" class="form-control"  name="description" required>
            </div>

            <div class="form-group">
                <label for="screenshot">Screenshot: </label>
                <input type="file" class="form-control"  name="screenshot" required>
            </div>

            <div class="form-group">
                <button class="btn btn-success" type="submit">Add new game</button>
            </div>

            @include('layouts.errors')

        </form>

    </div>

@endsection