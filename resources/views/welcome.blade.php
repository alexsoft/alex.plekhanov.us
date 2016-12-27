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
                    Hey, I'm <strong class="accent">Alexey Plekhanov</strong>, PHP Developer at&nbsp;<a href="http://908.vc">908.vc</a>.
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

    <br>

@endsection