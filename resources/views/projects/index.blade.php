@extends('_layouts.default')

@section('page_title', 'Projects by Alex Plekhanov')

@section('meta_description', 'Alex runs PHP deployment service Deploy Kit. Plus he has couple of open source projects on GitHub.')

@section('content')

    <div class="container">

        <div class="columns">
            <div class="column">
                <div class="content">
                    <h2>Services</h2>
                </div>
            </div>
        </div>

        <div class="columns">
            <div class="column is-one-third">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-2by1">
                            <img src="{{ asset('img/deploykit.jpg') }}" alt="Deploy Kit – Single click PHP deployments">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content">
                                <p class="title is-4"><a href="https://deploykit.co" target="_blank">Deploy Kit</a></p>
                                <p class="subtitle is-6">Single click PHP deployments</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><div class="column is-one-third">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-2by1">
                            <img src="{{ asset('img/nightsky.jpg') }}" alt="Certificator">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content">
                                <p class="title is-4">Certificator</p>
                                <p class="subtitle is-6">Soon to be announced</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="columns">
            <div class="column">
                <div class="content">
                    <h2>Libraries</h2>
                </div>
            </div>
        </div>

        <div class="columns">
            @foreach($libraries as $library)
                <div class="column is-one-quarter">
                    @include('projects._partials.library', ['library' => $library])
                </div>
            @endforeach
        </div>
    </div>

@endsection
