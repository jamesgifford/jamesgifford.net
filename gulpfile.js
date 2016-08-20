var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

var paths = {
    'jquery': 'node_modules/jquery/',
    'bootstrap': 'node_modules/bootstrap-sass/assets/'
}

elixir(function(mix) {

    // Copy package files
    mix.copy(paths.bootstrap + 'fonts/bootstrap/**', 'public/fonts/bootstrap')
       .copy(paths.bootstrap + 'javascripts/bootstrap.min.js', 'resources/assets/js/bootstrap.min.js')
       .copy(paths.jquery + 'dist/jquery.min.js', 'resources/assets/js/jquery.min.js');

    // Combine JavaScript files
    mix.scripts([
        'jquery.min.js',
        'bootstrap.min.js',
        ], 'public/js/scripts.js');

    // Convert Sass to CSS
    mix.sass('app.scss', 'public/css/styles.css');
});
