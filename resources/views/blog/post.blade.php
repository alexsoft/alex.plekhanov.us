@extends('_layouts.bulma')

@section('meta')
    @parent
    <meta property="og:title" content="«{!! $title !!}» by Alexey Plekhanov" />
    <meta property="og:url" content="{{ URL::current() }}" />
    <meta property="og:type" content="article" />
    <meta property="article:author" content="https://www.facebook.com/alex.plekhanov" />
    <meta property="og:image" content="{{ asset('img/alexey@2x.jpg') }}" />
    <meta property="og:description" content="{!! str_limit(strip_tags($text), 200) !!}" />
@endsection

@section('page_title', '«' .  $title . '» by Alexey Plekhanov')

@section('css')
    @parent
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ilyabirman-likely/2.1.3/likely.css">
@endsection

@section('content')
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId      : '1015546005136408',
                xfbml      : true,
                version    : 'v2.4'
            });
        };
        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <script type="text/javascript" src="//vk.com/js/api/openapi.js?116"></script>
    <script type="text/javascript">VK.init({apiId: 4994269, onlyWidgets: true});</script>

    <div class="content">

        <h1>{{ $title }}</h1>

        <p style="text-align: justify;">
            {!! $text !!}
        </p>

    </div>

    <div class="likely">
        <div class="facebook">Share</div>
        <div class="twitter" data-via="alex_soft">Tweet</div>
        <div class="vkontakte">Share</div>
    </div>

@endsection

@section('js')
    @parent
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ilyabirman-likely/2.1.3/likely.js"></script>
@endsection