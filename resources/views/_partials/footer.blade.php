<footer>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <p>
                    © {{ date('Y') }} Alex Plekhanov
                </p>
            </div>
            @unless(Route::is('pages.cv'))
                <div class="col-sm-6 text-right">
                    <p class="technologies">
                        <img src="{{ asset('img/php.png') }}" alt="PHP" title="PHP" width="50" />
                        <img src="{{ asset('img/laravel5.png') }}" alt="Laravel" title="Laravel" width="50" />
                        <img src="{{ asset('img/js.png') }}" alt="JS" title="JS" width="50" />
                        <img src="{{ asset('img/html5.png') }}" alt="HTML 5" title="HTML 5" width="50" />
                    </p>
                </div>
            @endunless
        </div>
    </div>

</footer>