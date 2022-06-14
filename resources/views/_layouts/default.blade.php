<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="theme-color" content="#363636">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        @section('meta')
            <meta name="description" content="@yield('meta_description', 'Alex Plekhanov is a Web developer who is always in process of doing something great')">
            <meta name="author" content="Alex Plekhanov">
        @show
        <link rel="icon" href="{{ asset('ico/favicon.ico') }}">

        <meta property="og:url" content="{{ request()->url() }}" />
        <meta property="og:title" content="@yield('og_title')" />
        <meta property="og:description" content="@yield('og_description')" />

        <meta name="google-site-verification" content="dW-i1q_ReYQ2XTd7hwnMo7J-ER6A33yAScHyxw9Zqu4" />

        <title>@yield('page_title', 'Alex Plekhanov')</title>
        @section('css')
            <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css" rel="stylesheet" integrity="sha384-O2GsbeS5rYQ72SmBXWL+lDu67AGTu0ageCnidKcNJa8133eUgYoLccjQYYWkuj+Q" crossorigin="anonymous">
            <link rel="stylesheet" href="{{ asset('/css/custom2.css') }}">
        @show

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#b91d47">
        <meta name="msapplication-TileColor" content="#b91d47">

    </head>
    <body>
        @include('_partials.nav')

        <div style="padding: 3rem 1.5rem;">
            @yield('content')
        </div>

        @include('_partials.footer')

        @section('js')
            <script src="{{ asset('/js/navbar.js') }}"></script>
        @show
    </body>
</html>
