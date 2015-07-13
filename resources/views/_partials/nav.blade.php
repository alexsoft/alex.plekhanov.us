<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}">Alex.Plekhanov.us</a>
        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">

                <li class="{{ Request::is('blog*') ? 'active' : '' }}">
                    <a href="{{ route('blog.index') }}">Blog</a>
                </li>

                <li class="{{ Request::is('cv*') ? 'active' : '' }}">
                    <a href="{{ route('pages.cv') }}">CV</a>
                </li>

            </ul>
        </div>
    </div>
</nav>