var elixir = require('laravel-elixir');
var postStylus = require('poststylus');

require('laravel-elixir-livereload');
require('laravel-elixir-stylus');

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

elixir(function(mix) {

    mix.stylus('app.styl', null, {
        use: [
            postStylus( [ 'autoprefixer', 'lost', 'rucksack-css' ] )
        ]
    });

    mix
        .copy('node_modules/jquery/dist/jquery.min.js', 'public/js/jquery.min.js')
        .copy('node_modules/bootstrap-sass/assets/fonts/bootstrap', 'public/fonts')
        .copy('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.min.css')
        .copy('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/js/bootstrap.min.js')
        .copy('node_modules/font-awesome/css/font-awesome.css', 'public/css/font-awesome.css')
        .copy('node_modules/font-awesome/fonts', 'public/fonts');
});
