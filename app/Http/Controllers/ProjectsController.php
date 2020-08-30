<?php

declare(strict_types=1);

namespace Alex\Http\Controllers;

class ProjectsController extends Controller
{
    public function index()
    {
        $libraries = [
            [
                'name' => 'Illuminate Container for Slim',
                'description' => 'Package configures Slim to work with the Illuminate (Laravel) container.',
                'links' => [
                    [
                        'url' => 'https://github.com/p-seven-v/illuminate-container-slim-bridge',
                        'title' => 'GitHub',
                    ],
                ],
            ],

            [
                'name' => 'Laravel Socialite Bitbucket',
                'description' => 'Laravel Socialite Bitbucket provider that uses OAuth 2',
                'links' => [
                    [
                        'url' => 'https://github.com/alexsoft/Laravel-Socialite-Bitbucket',
                        'title' => 'GitHub',
                    ],
                ],
            ],
            [
                'name' => 'Laravel Notifications to Pushbullet',
                'description' => 'Pushbullet notifications channel for Laravel',
                'links' => [
                    [
                        'url' => 'https://github.com/laravel-notification-channels/pushbullet',
                        'title' => 'GitHub',
                    ],
                ],
            ],
            [
                'name' => 'Munin Beanstalk',
                'description' => 'Munin plugin to monitor beanstalk jobs count written in PHP',
                'links' => [
                    [
                        'url' => 'https://github.com/alexsoft/munin-beanstalk',
                        'title' => 'GitHub',
                    ],
                ],
            ],
        ];

        return view('projects.index')->with(compact('libraries'));
    }
}
