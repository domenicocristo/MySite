<header>
    <span>DOMENICO CRISTO</span>

    <a href="#7">ESPERIENZE</a>
    <a href="#8">FORMAZIONE</a>
    @auth
    <div>
        <a class="btn btn-danger" href="{{ route('logout') }}">LOGOUT</a>
        <a class="btn btn-primary" href="{{ route('create') }}">CREATE</a>
    </div>
    @endauth

    @guest
        <div>
            <a class="btn btn-success" href="{{ route('login_btn') }}">LOGIN</a>
        </div>
    @endguest
</header>