<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#eeeeee">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    @section('meta')
        <meta name="description" content="Alexey Plekhanov is a Web developer who is always in process of doing something great">
        <meta name="author" content="Alexey Plekhanov">
    @show

    <link rel="icon" href="{{ asset('ico/favicon.ico') }}">

    <meta name="google-site-verification" content="dW-i1q_ReYQ2XTd7hwnMo7J-ER6A33yAScHyxw9Zqu4" />
    <meta name='yandex-verification' content='7fc8dd9f98075585' />

    <title>@yield('page_title', 'Alex.Plekhanov.us')</title>

    @section('css')
        <style>.content .accent{color: #b64900}</style>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.7.0/css/flag-icon.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.2.3/css/bulma.css" rel="stylesheet">
    @show

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('ico/touch144.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('ico/touch114.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('ico/touch72.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('ico/touch57.png') }}">
</head>
<body class="{{ (Route::is('pages.cv')) ? 'cv' : '' }}">

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NLMFDR"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NLMFDR');</script>
<!-- End Google Tag Manager -->

@include('_partials.bulma.nav')

<div class="container">

    <div class="columns" style="margin-top: 25px;">

        <div class="column"{{ Route::is('pages.cv') ? ' itemscope itemtype="http://schema.org/Person"' : '' }}>

            <div class="columns">
                <div class="column is-three-quarters">
                    @yield('content')
                </div>

                @unless(Route::is('home'))
                    @include('_partials.bulma.aside')
                @endunless
            </div>

        </div>

    </div>

</div>


    @include('_partials.bulma.footer')

    @section('js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.0.0/turbolinks.min.js"></script>
        <script>Turbolinks.start();</script>
        {{--<script src="{{ asset('js/all.js') }}" async></script>--}}
    @show
</body>
</html>
