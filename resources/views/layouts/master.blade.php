<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Games Shop</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

@include ("layouts.nav")
@include ("layouts.errors")

@if($flash = session('message'))

    <div id="flash-message" class="alert alert-success" role="alert">

        {{ $flash }}

    </div>
@endif

<div class="container-fluid">
    <div class="row flex-row flex-nowrap">
        @yield('content')
    </div>
</div>


</body>
</html>