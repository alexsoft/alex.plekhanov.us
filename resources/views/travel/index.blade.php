@extends('_layouts.default')

@section('page_title', 'Projects by Alex Plekhanov')

@section('meta_description', 'Alex runs PHP deployment service Deploy Kit. Plus he has couple of open source projects on GitHub.')

@section('content')

    <div class="container">
        <div class="columns">
            <div class="column">
                <div class="content">
                    <h2>Travel</h2>
                </div>
            </div>
        </div>

        <div class="content">

            @foreach($trips as $year => $groupedTrips)
                <div class="columns">
                    <div class="column is-2"><h3>{{ $year }}</h3></div>

                    <div class="column">
                        @foreach($groupedTrips as $trip)
                            <p>{{ $trip->getTitle() }}</p>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>


    </div>

@endsection
