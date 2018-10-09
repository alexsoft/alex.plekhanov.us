<?php declare(strict_types=1);
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'Alex.Plekhanov.Us');

// Project repository
set('repository', 'git@github.com:alexsoft/alex.plekhanov.us.git');

// Shared files/dirs between deploys
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server
set('writable_mode', 'chmod');
add('writable_dirs', []);
set('allow_anonymous_stats', false);

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

task('php-fpm-restart', function () {
    run('sudo service php7.2-fpm reload');
});

task('sitemap:generate', function () {
    run('cd {{ release_path }} && php artisan sitemap:generate');
});

before('deploy:symlink', 'alex:posts');
before('deploy:symlink', 'sitemap:generate');

after('deploy:failed', 'deploy:unlock');

after('artisan:config:cache', 'artisan:route:cache');

after('cleanup', 'deploy:clear_paths');

after('deploy:symlink', 'php-fpm-restart');
