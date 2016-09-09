<footer>
    <div class="container" style="height: 60px;">
        <div class="col-sm-6 copyright">
            <div class="row">
                <div class="col-sm-12">
                    <p>
                        © {{ date('Y') }} Alex Plekhanov
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p style="font-size: 75%;">
                        <a href="https://deploykit.co" target="_blank">
                            Deploy PHP apps with a single click
                        </a>
                    </p>
                </div>
            </div>
        </div>
        @unless(Route::is('pages.cv'))
            <div class="col-sm-6 techs">
                <img src="{{ asset('img/php.png') }}" alt="PHP" title="PHP" width="50" />
                <img src="{{ asset('img/laravel5.png') }}" alt="Laravel" title="Laravel" width="50" />
                <img src="{{ asset('img/js.png') }}" alt="JS" title="JS" width="50" />
                <img src="{{ asset('img/html5.png') }}" alt="HTML 5" title="HTML 5" width="50" />
            </div>
        @endunless
    </div>
</footer>