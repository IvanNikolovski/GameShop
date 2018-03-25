<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="/">GAMESHOP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">Shop</a>
            </li>


        </ul>
        <ul class="navbar-nav ml-auto" >
            @if (Auth::check())
                <li class="nav-item "><a class="nav-link " href="#">{{ Auth::user()->name }}</a></li>
                <li class="nav-item "> <a class="nav-link " href="/logout">Logout</a></li>

            @else
                <li class="nav-item"><a class="nav-link " href="/login">Login</a></li>
                <li class="nav-item"><a class="nav-link " href="/registration">Register</a></li>
            @endif
        </ul>

    </div>
</nav>
