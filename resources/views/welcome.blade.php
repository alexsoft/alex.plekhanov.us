@extends('_layouts.default')

@section('content')

    <div class="container" style="margin-top: 50px; margin-bottom: 50px;">
        <div class="columns">
            <div class="column is-three-quarters">
                <div class="columns">
                    <div class="column is-one-quarter">
                        <figure class="image is-square">
                            <img src="{{ asset('/img/alexey@2x.jpg') }}" alt="Alex Plekhanov">
                        </figure>
                    </div>
                    <div class="column">
                        <p>Hey, I am Alexey Plekhanov.</p>

                        <p>I run Deploy Kit — service that drastically simplifies deployment of PHP applications.</p>

                        <p>Being a huge fan of PHP and Laravel, I constantly contribute to them, help others to know all the best tools to build great web applications for businesses!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
