@extends('_layouts.bulma')

@section('page_title', 'Blog - Alex.Plekhanov.us')

@section('content')

    <div class="content">

        <h1>Blog</h1>

        @foreach($posts as $key => $data)

            <article class="media">

                <div class="media-content">

                    <div class="content is-medium">
                        <p>
                            <strong><a href="{{ route('blog.post', [$data['url']['year'], $data['url']['month'], $data['url']['title']]) }}">{{ $data['title'] }}</a></strong> <small>{{ $data['date'] }}</small>
                        </p>
                    </div>

                </div>

            </article>

        @endforeach

    </div>

@endsection