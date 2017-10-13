<div class="container">
  <nav class="navbar ">
  <div class="navbar-brand">
    @if(Route::is('home'))
      <div class="navbar-item">Alex.Plekhanov.us</div>
    @else
      <a class="navbar-item" href="{{ route('home') }}">Alex.Plekhanov.us</a>
    @endif

    <div class="navbar-burger burger" data-target="navMenuDocumentation">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="navMenuDocumentation" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item{{ request()->is('projects*') ? ' is-active' : '' }}" href="{{ route('projects.index') }}">Projects</a>
      <a class="navbar-item{{ request()->is('blog*') ? ' is-active' : '' }}" href="{{ route('blog.index') }}">Blog</a>
      <a class="navbar-item{{ request()->is('cv*') ? ' is-active' : '' }}" href="{{ route('pages.cv') }}">CV</a>
    </div>

    @unless(Route::is('pages.cv'))
        <div class="navbar-end">
            <a class="navbar-item" href="https://www.facebook.com/alexplekhanov"><span class="bd-emoji"><i class="fa fa-fw fa-lg fa-facebook-official" style="margin-right: 8px;"></i></span>Facebook</a>
            <a class="navbar-item" href="https://t.me/alexplekhanov"><span class="bd-emoji"><i class="fa fa-fw fa-lg fa-telegram" style="margin-right: 8px;"></i></span>Telegram</a>
        </div>
    @endunless
  </div>
</nav>

</div>