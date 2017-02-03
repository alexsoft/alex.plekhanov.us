@extends('_layouts.bulma')

@section('page_title', 'Projects - Alex.Plekhanov.us')

@section('content')

    <div class="content">
        <h2>Services</h2>

        <div class="card">
            <div class="card-image">
                <figure class="image is-2by1">
                    <img src="{{ asset('img/deploykit.jpg') }}" alt="Deploy Kit - Single click PHP deployments">
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
    </div>

@endsection