<div class="card">
    <header class="card-header">
        <p class="card-header-title">
            {{ $library['name'] }}
        </p>
    </header>
    <div class="card-content">
        <div class="media">
            <div class="media-content">
                <div class="content">
                    <p>{{ $library['description'] }}</p>
                </div>
            </div>
        </div>
    </div>
    <footer class="card-footer">
        @foreach($library['links'] as $link)
            <a class="card-footer-item" href="{{ $link['url'] }}">{{ $link['title'] }}</a>
        @endforeach
    </footer>
</div>
