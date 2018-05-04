<nav class="navbar is-dark" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{ route('home') }}">
                Alex Plekhanov
            </a>

            <div class="navbar-burger burger" data-target="Navbar">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="navbar-menu" id="Navbar">
            <div class="navbar-start">
                <a class="navbar-item" href="{{ route('projects.index') }}">💻&nbsp;Projects</a>
                <a class="navbar-item" href="{{ route('blog.index') }}">🎲&nbsp;Blog</a>
                {{--<a class="navbar-item" href="{{ route('travel.index') }}">🌎&nbsp;Travel</a>--}}
                <a class="navbar-item" href="{{ route('pages.cv') }}">CV</a>
            </div>
        </div>
    </div>
</nav>
