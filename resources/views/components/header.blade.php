<header>
    <span>Domenico Cristo</span>
    @auth
    <div>
        <a class="btn btn-danger" href="{{ route('logout') }}">LOGOUT</a>
        <a class="btn btn-primary" href="{{ route('create') }}">CREATE</a>
    </div>
    @endauth
</header>