@extends('_layouts.default')

@section('content')

    <h1>Blog</h1>

    @foreach($posts as $key => $data)
        <div class="row">
            <div class="col-sm-12" style="font-size: 1.2em;">
                <p>
                    <small class="text-muted">{{ $data['date'] }}</small>
                    <a href="{{ route('blog.post', [$data['url']['year'], $data['url']['month'], $data['url']['title']]) }}">{{ $data['title'] }}</a>
                </p>
            </div>
        </div>

    @endforeach

@endsection