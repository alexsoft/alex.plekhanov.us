@extends('_layouts.bulma')

@section('page_title', 'Projects - Alex.Plekhanov.us')

@section('meta_description', 'Alex runs PHP deployment service Deploy Kit. Additionally he has couple of open source projects on GitHub.')

@section('content')

    <div class="columns">
        <div class="column is-one-third">
            <div class="content">
                <h2>Services</h2>
            </div>
        </div>
    </div>

    <div class="columns">
        <div class="column is-one-third">

            <div class="card">
                <div class="card-image">
                    <figure class="image is-2by1">
                        <img src="{{ asset('img/deploykit.jpg') }}" alt="Deploy Kit - Single click PHP deployments">
                    </figure>
                </div>
                <div class="card-content">
                    <div class="media">
                        <div class="media-content">
                            <p class="title is-4"><a href="https://deploykit.co" target="_blank">Deploy Kit</a></p>
                            <p class="subtitle is-6">Single click PHP deployments</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="content">
        <h2>Libraries</h2>

        <div class="columns">
            <div class="column">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            Laravel Socialite Bitbucket
                        </p>
                    </header>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p>Laravel Socialite Bitbucket provider that uses OAuth 2</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a class="card-footer-item" href="https://github.com/alexsoft/Laravel-Socialite-Bitbucket">GitHub</a>
                    </footer>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            Munin Beanstalk
                        </p>
                    </header>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p>Munin plugin to monitor beanstalk jobs count written in PHP</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a class="card-footer-item" href="https://github.com/alexsoft/munin-beanstalk">GitHub</a>
                    </footer>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            Laravel Notifications to Pushbullet
                        </p>
                    </header>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p>Pushbullet notifications channel for Laravel</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a class="card-footer-item" href="https://github.com/laravel-notification-channels/pushbullet">GitHub</a>
                    </footer>
                </div>
            </div>
        </div>

    </div>

@endsection