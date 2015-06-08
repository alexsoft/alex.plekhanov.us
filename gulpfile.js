var elixir = require('laravel-elixir');
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('app.less');

    mix.scripts([
        'bower/jquery/dist/jquery.js',
        'bower/bootstrap/dist/js/bootstrap.js',
        'bower/retina.js/dist/retina.js',
        'js/init.js'
    ], 'public/js', 'resources/assets');

    mix.copy('resources/assets/bower/font-awesome/fonts/**', 'public/fonts');
    mix.copy('resources/assets/bower/bootstrap/fonts/**', 'public/fonts');
    mix.copy('resources/assets/bower/flag-icon-css/flags/**', 'public/flags');

});