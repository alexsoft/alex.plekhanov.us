<nav class="nav has-shadow">
    <div class="container">
        <div class="nav-left">

            <a class="nav-item is-brand" href="{{ route('home') }}">
                Alex.Plekhanov.us
            </a>

            <a class="nav-item{{ request()->is('projects*') ? ' is-active' : '' }}" href="{{ route('projects.index') }}">
                Projects
            </a>

            <a class="nav-item{{ request()->is('blog*') ? ' is-active' : '' }}" href="{{ route('blog.index') }}">
                Blog
            </a>

            <a class="nav-item{{ request()->is('cv*') ? ' is-active' : '' }}" href="{{ route('pages.cv') }}">
                CV
            </a>

        </div>
    </div>
</nav>