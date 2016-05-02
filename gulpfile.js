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

    mix
        .coffee('app.coffee')
        .stylus('app.styl', null, {
            use: [
                postStylus( [ 'autoprefixer', 'lost', 'rucksack-css' ] )
            ]
        })
        .livereload();

    mix
        .copy('node_modules/jquery/dist/jquery.min.js', 'public/js/jquery.min.js')
        .copy('node_modules/bootstrap-sass/assets/fonts/bootstrap', 'public/fonts')
        .copy('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.min.css')
        .copy('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/js/bootstrap.min.js')
        .copy('node_modules/font-awesome/css/font-awesome.css', 'public/css/font-awesome.css')
        .copy('node_modules/font-awesome/fonts', 'public/fonts')
        .copy('bower_components/bxslider-4/dist/jquery.bxslider.min.css', 'public/css')
        .copy('bower_components/bxslider-4/dist/jquery.bxslider.min.js', 'public/js')
        .copy('bower_components/bxslider-4/dist/images/bx_loader.gif', 'public/img')
        .copy('bower_components/bxslider-4/dist/images/controls.png', 'public/img')
        .copy('bower_components/scrollmagic/scrollmagic/minified/scrollmagic.min.js', 'public/js')
        .copy('bower_components/bootstrap-select/dist/js/bootstrap-select.min.js', 'public/js')
        .copy('bower_components/bootstrap-select/dist/css/bootstrap-select.min.css', 'public/css')
        .copy('bower_components/parallax.js/parallax.min.js', 'public/js');
});