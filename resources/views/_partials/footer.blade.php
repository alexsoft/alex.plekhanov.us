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
                        <img src="{{ asset('img/php.png') }}" width="50" />
                        <img src="{{ asset('img/laravel.png') }}" width="50" />
                        <img src="{{ asset('img/js.png') }}" width="50" />
                        <img src="{{ asset('img/html5.png') }}" width="50" />
                    </p>
                </div>
            @endunless
        </div>
    </div>

</footer>