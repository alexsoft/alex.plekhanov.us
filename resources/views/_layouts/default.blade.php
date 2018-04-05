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
            <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css" rel="stylesheet">
        @show

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

        <div style="padding: 3rem 1.5rem;">
            @yield('content')
        </div>

        @include('_partials.footer')

        @section('js')
            <script>
                document.addEventListener('DOMContentLoaded', function () {

                    // Get all "navbar-burger" elements
                    var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

                    // Check if there are any navbar burgers
                    if ($navbarBurgers.length > 0) {

                        // Add a click event on each of them
                        $navbarBurgers.forEach(function ($el) {
                            $el.addEventListener('click', function () {

                                // Get the target from the "data-target" attribute
                                var target = $el.dataset.target;
                                var $target = document.getElementById(target);

                                // Toggle the class on both the "navbar-burger" and the "navbar-menu"
                                $el.classList.toggle('is-active');
                                $target.classList.toggle('is-active');

                            });
                        });
                    }

                });
            </script>
        @show
    </body>
</html>
