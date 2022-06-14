@extends('_layouts.default')

@section('meta')
    @parent
    <meta property="og:type" content="article" />
    <meta property="article:author" content="https://www.facebook.com/alex.plekhanov" />
    <meta property="og:image" content="{{ asset('img/alexey@2x.jpg') }}" />
@endsection

@section('og_title', $title . ' by Alex Plekhanov')
@section('og_description', \Illuminate\Support\Str::limit(strip_tags($text), 140))

@section('page_title', '«' .  $title . '» by Alex Plekhanov')

@section('meta_description', '«' . $title . '» by Alex Plekhanov')

@section('content')
    <div class="container">
        <div class="columns">
            <div class="column">
                <div class="content">
                    <h1>{{ $title }}</h1>

                    <p style="text-align: justify;">
                        {!! $text !!}
                    </p>

                </div>

            </div>

            <div class="column is-one-quarter">
                @include('blog._partials.aside')
            </div>
        </div>
    </div>

@endsection
