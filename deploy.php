<?php

namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'Alex.Plekhanov');

// Project repository
set('repository', 'git@github.com:alexsoft/alex.plekhanov.us.git');

// Shared files/dirs between deploys
add('shared_files', []);
add('shared_dirs', []);

set('ssh_multiplexing', true);
set('keep_releases', 2);

set('clear_paths', [
    '.git',
    'tests',
]);

// Hosts
inventory('hosts.yml');

// Tasks
task('build', function () {
    run('cd {{release_path}} && build');
});

task('alex:posts', function () {
    run('cd {{ release_path }} && php artisan alex:scan-posts');
});

task('php-fpm-reload', function () {
    run('sudo service php8.0-fpm reload');
});

task('sitemap:generate', function () {
    run('cd {{ release_path }} && php artisan sitemap:generate');
});

//before('deploy:symlink', 'alex:posts');
before('deploy:symlink', 'sitemap:generate');

after('deploy:failed', 'deploy:unlock');

after('artisan:config:cache', 'artisan:route:cache');

after('cleanup', 'deploy:clear_paths');

after('deploy:symlink', 'php-fpm-reload');

after('rollback', 'php-fpm-reload');
