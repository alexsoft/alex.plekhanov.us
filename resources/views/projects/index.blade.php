@extends('_layouts.default')

@section('page_title', 'Projects by Alex Plekhanov')

@section('meta_description', 'Alex runs PHP deployment service Deploy Kit. Plus he has couple of open source projects on GitHub.')

@section('content')

    <div class="container">

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
