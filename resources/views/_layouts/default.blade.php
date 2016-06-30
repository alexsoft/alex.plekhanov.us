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
            <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
            <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
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

        @include('_partials.nav')

        <div class="container">
            <div class="row">
                @if(Route::is('pages.cv'))
                    <div class="col-sm-12" itemscope itemtype="http://schema.org/Person">
                @else
                    <div class="col-sm-12">
                @endif

                    <div class="row">
                        <div class="col-lg-8 col-md-10">
                            @yield('content')
                        </div>
                        @unless(Route::is('home'))
                            @include('_partials.aside')
                        @endunless
                    </div>
                </div>
            </div>
        </div>

        @include('_partials.footer')

        @section('js')
            <script src="{{ asset('js/all.js') }}" async></script>
        @show
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-41504409-1', {'siteSpeedSampleRate': 50});
            ga('send', 'pageview');
        </script>
        <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter31059421 = new Ya.Metrika({ id:31059421, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="https://mc.yandex.ru/watch/31059421" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    </body>
</html>
