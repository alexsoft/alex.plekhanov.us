@extends('_layouts.bulma')

@section('html_attrs', ' amp')

@push('meta')
    <meta property="og:title" content="«{!! $title !!}» by Alexey Plekhanov" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="article" />
    <meta property="article:author" content="https://www.facebook.com/alex.plekhanov" />
    <meta property="og:image" content="{{ asset('img/alexey@2x.jpg') }}" />
    <meta property="og:description" content="{!! str_limit(strip_tags($text), 200) !!}" />

    <link rel="canonical" href="{{ url()->current() }}">

    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "TechArticle",
        "headline": "{!! $title !!}",
        "datePublished": "{{ $publishedAtAtom }}",
        "image": [
          "logo.jpg"
        ]
      }
    </script>
@endpush

@push('head_js')
    <script async src="https://cdn.ampproject.org/v0.js"></script>
@endpush

@section('page_title', '«' .  $title . '» by Alexey Plekhanov')

@section('meta_description', '«' . $title . '» by Alexey Plekhanov')

@section('css')
    @parent
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ilyabirman-likely/2.2.2/likely.css">
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
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

    <div class="content">

        <h1>{{ $title }}</h1>

        <p style="text-align: justify;">
            {!! $text !!}
        </p>

    </div>

    <div class="likely likely-big">
        <div class="facebook">Share</div>
        <div class="telegram">Send to Telegram</div>
        <div class="twitter" data-via="alex_soft">Tweet</div>
        <div class="vkontakte">Share</div>
    </div>

@endsection

@section('js')
    @parent
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ilyabirman-likely/2.2.2/likely.js"></script>
@endsection