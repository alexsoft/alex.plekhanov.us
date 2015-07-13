@extends('_layouts.default')

@section('content')

    <h1>{{ $title }}</h1>

    <div class="row">
        <div class="col-sm-12 text-justify">
            {!! $text !!}
        </div>
    </div>

@endsection