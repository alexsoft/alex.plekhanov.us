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
        <div class="col-sm-2">
            <div class="fb-like" data-href="{{ URL::current() }}" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
        </div>
        <div class="col-sm-3">
            <div id="vk_like"></div>
            <script type="text/javascript">
                VK.Widgets.Like("vk_like", {type: "button", height: 22});
            </script>
        </div>
        <div class="col-sm-3">
            <a href="https://twitter.com/share" class="twitter-share-button" data-via="alex_soft">Tweet</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        </div>
        <div class="col-sm-3">
            <a data-pocket-label="pocket" data-pocket-count="horizontal" class="pocket-btn" data-lang="en"></a>
            <script type="text/javascript">!function(d,i){if(!d.getElementById(i)){var j=d.createElement("script");j.id=i;j.src="https://widgets.getpocket.com/v1/j/btn.js?v=1";var w=d.getElementById(i);d.body.appendChild(j);}}(document,"pocket-btn-js");</script>
        </div>
    </div>

@endsection
