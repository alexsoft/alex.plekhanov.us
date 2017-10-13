@extends('_layouts.bulma')

@section('content')

    <div class="columns">

        <div class="column is-one-third">

            <figure class="image is-square">
                <img src="{{ asset('img/alexey@2x.jpg') }}" alt="Alexey Plekhanov" itemprop="image">
            </figure>

        </div>

        <div class="column">

            <div class="content is-medium">
                <p>
                    Hi! I am <strong class="accent">Alexey Plekhanov</strong>.
                </p>
                <p>
                    I run <a href="https://deploykit.co" target="_blank">Deploy Kit</a> &mdash; service that drastically simplifies deployment of PHP applications.
                </p>
                <p>
                    I am a huge fan of PHP and Laravel! I use it constantly, and do my best to contribute and improve all of it :)
                </p>
            </div>

        </div>

    </div>

@endsection
