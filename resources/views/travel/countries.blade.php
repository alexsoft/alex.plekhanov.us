@extends('_layouts.default')

@section('page_title', 'Travel - Alex Plekhanov')

@section('meta_description', 'Alexey loves travelling and has already been to ' . $countries->count() . ' countries 😎')

@section('css')
    @parent
    <style>.accent{color: #b64900}</style>
@endsection

@section('content')

    <div class="container">
        <div class="columns">
            <div class="column">
                <h1 class="title accent is-1">Visited</h1>
                <h2 class="subtitle is-3">{{ $countries->count() }} countries</h2>
            </div>
        </div>

        <div class="columns">

            @foreach($countries->chunk(10) as $chunk)
                <div class="column is-one-third">

                    <div class="content">
                        @foreach($chunk as $country)
                            <h3>{{ $country->getFlag() }} {{ $country->getName() }}</h3>
                            <p class="has-text-grey-light">{{ $country->getCitiesString() }}</p>
                        @endforeach
                    </div>

                </div>

            @endforeach
        </div>
    </div>

@endsection
