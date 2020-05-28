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
var elixir = require('laravel-elixir');

var ipaths = {
    'jquery': './vendor/bower_components/jquery/',
    'bootstrap': './vendor/bower_components/bootstrap-sass-official/assets/'
}

elixir(function(mix) {
    mix.copy(ipaths.bootstrap + 'stylesheets/bootstrap/', 'resources/assets/sass');

    mix.sass(["app.scss"])
        .copy(ipaths.bootstrap + 'fonts/bootstrap/**', 'public/fonts')
        .copy(
        ipaths.jquery+'dist/jquery.min.js',
        'public/js/vendor/jquery.js'
    )
        .copy(
        ipaths.bootstrap+'javascripts/bootstrap.min.js',
        'public/js/vendor/bootstrap.js'
    )
});