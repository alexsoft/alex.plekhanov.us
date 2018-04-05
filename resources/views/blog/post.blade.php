@extends('_layouts.default')

@push('meta')
    <meta property="og:title" content="«{!! $title !!}» by Alex Plekhanov" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="article" />
    <meta property="article:author" content="https://www.facebook.com/alex.plekhanov" />
    <meta property="og:image" content="{{ asset('img/alexey@2x.jpg') }}" />
    <meta property="og:description" content="{!! str_limit(strip_tags($text), 200) !!}" />
@endpush

@section('page_title', '«' .  $title . '» by Alex Plekhanov')

@section('meta_description', '«' . $title . '» by Alex Plekhanov')

@section('css')
    @parent
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ilyabirman-likely/2.3.0/likely.css">
@endsection

@section('content')
    <div class="container">
        <div class="columns">
            <div class="column">
                <div class="content">
                    <h1>{{ $title }}</h1>

                    <p style="text-align: justify;">
                        {!! $text !!}
                    </p>

                </div>

                <div class="likely likely-big">
                    <div class="facebook">Share to Facebook</div>
                    <div class="telegram">Share to Telegram</div>
                    <div class="twitter" data-via="alex_soft">Tweet</div>
                </div>

            </div>

            <div class="column is-one-quarter">
                @include('blog._partials.aside')
            </div>
        </div>
    </div>


@endsection

@section('js')
    @parent
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ilyabirman-likely/2.3.0/likely.js"></script>
@endsection
