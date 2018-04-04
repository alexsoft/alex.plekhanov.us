@extends('_layouts.default')

@section('content')

    <div class="container" style="margin-top: 50px; margin-bottom: 50px;">
        <div class="columns">
            <div class="column is-four-fifths">
                <div class="columns">
                    <div class="column is-one-third">
                        <figure class="image is-square">
                            <img src="{{ asset('/img/alexey@2x.jpg') }}" alt="Alex Plekhanov">
                        </figure>
                    </div>
                    <div class="column" style="line-height: 2em; font-size: 1.1em;">
                        <p>Hey, I am Alex Plekhanov.</p>

                        <p>Being a huge fan of PHP and Laravel, I constantly contribute to them, help others to know all the best tools to build great web applications for businesses!</p>

                        <p>And I also run <a href="{{ route('projects.index') }}">my own projects</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
