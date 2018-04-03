<?php

namespace Alex\Http\Controllers;

class ProjectsController extends Controller
{
    public function index()
    {
        $libraries = [
            [
                'name' => 'Laravel Socialite Bitbucket',
                'description' => 'Laravel Socialite Bitbucket provider that uses OAuth 2',
                'links' => [
                    [
                        'url' => 'https://github.com/alexsoft/Laravel-Socialite-Bitbucket',
                        'title' => 'GitHub',
                    ]
                ]
            ],
            [
                'name' => 'Munin Beanstalk',
                'description' => 'Munin plugin to monitor beanstalk jobs count written in PHP',
                'links' => [
                    [
                        'url' => 'https://github.com/alexsoft/munin-beanstalk',
                        'title' => 'GitHub',
                    ]
                ]
            ],
            [
                'name' => 'Laravel Notifications to Pushbullet',
                'description' => 'Pushbullet notifications channel for Laravel',
                'links' => [
                    [
                        'url' => 'https://github.com/laravel-notification-channels/pushbullet',
                        'title' => 'GitHub',
                    ]
                ]
            ],
        ];

        return view('projects.index')->with(compact('libraries'));
    }
}
