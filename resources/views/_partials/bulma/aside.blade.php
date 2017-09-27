<div class="column">
    <div class="card">
        <div class="card-image">
            <figure class="image is-square">
                <img src="{{ asset('img/alexey@2x.jpg') }}" alt="Alexey Plekhanov" itemprop="image">
            </figure>
        </div>

        @unless(Route::is('pages.cv'))
            <div class="card-content">
                <div class="content">
                    <p>Hi, I'm <strong>Alex Plekhanov</strong>.</p>
                    <p>I am PHP developer and I run my own project <a href="https://deploykit.co">Deploy Kit</a>.</p>
                </div>
            </div>
        @endunless

    </div>

</div>
