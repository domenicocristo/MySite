<header>
    <div id="l-header">
        <a href="/">
            <img src="/storage/asset/logo.png" alt="logo">
        </a>
    </div>

    <div id="c-header">
        <a href="#jumbotron">INTRO</a>
        <a href="#12">EXPERIENCES</a>
        <a href="#13">FORMATION</a>
        <a href="#footer">CONTACT ME</a>
    </div>
    @auth
    <div class="r-header">
        <a id="btn-logout" class="btn-header" href="{{ route('logout') }}">LOGOUT</a>
        <a id="btn-create" class="btn-header" href="{{ route('create') }}">CREATE</a>
    </div>
    @endauth

    @guest
        <div class="r-header">
            <a id="btn-login" class="btn-header" href="{{ route('login_btn') }}">LOGIN</a>
        </div>
    @endguest
</header>