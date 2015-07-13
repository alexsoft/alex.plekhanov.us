@extends('_layouts.default')

@section('meta')
    <meta property="og:title" content="«{{ $title }}» by Alexey Plekhanov" />
    <meta property="og:url" content="{{ URL::current() }}" />
    <meta property="og:type" content="post" />
    <meta property="article:author" content="https://www.facebook.com/alex.plekhanov" />
@endsection

@section('content')

    <h1>{{ $title }}</h1>

    <div class="row">
        <div class="col-sm-12 text-justify">
            {!! $text !!}
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="fb-like" data-href="{{ URL::current() }}" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
        </div>
    </div>

@endsection