<nav class="navbar is-dark" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{ route('home') }}">
                Alex Plekhanov
            </a>

            <div class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="{{ route('projects.index') }}">💻&nbsp;Projects</a>
                    <a class="navbar-item" href="#">🌎&nbsp;Travel</a>
                    <a class="navbar-item" href="{{ route('pages.cv') }}">CV</a>
                </div>
            </div>

            <div class="navbar-burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</nav>
