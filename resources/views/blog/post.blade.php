@extends('_layouts.default')

@section('meta')
    <meta property="og:title" content="«{{ $title }}» by Alexey Plekhanov" />
    <meta property="og:url" content="{{ URL::current() }}" />
    <meta property="og:type" content="article" />
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
            <div class="fb-like" data-href="{{ URL::current() }}" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
            <div id="vk_like"></div>
            <script type="text/javascript">
                VK.Widgets.Like("vk_like", {type: "button", verb: 1, height: 20});
            </script>
        </div>
    </div>

@endsection
