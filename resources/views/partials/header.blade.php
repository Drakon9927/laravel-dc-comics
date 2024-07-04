<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Home</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('comics.index') }}">Comics List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('comics.create') }}">Add Comic</a>
                </li>
            </ul>
        </div>
    </div>
</nav>