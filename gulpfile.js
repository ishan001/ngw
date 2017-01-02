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

elixir(function (mix) {
    mix.sass([
        'style.scss',
        'responsive.scss'
        ], 'public/css/style.css')

        .sass([
            'magnigic-popup.scss',
            'animate.scss',
            'bootstrap.scss',
            'meanmenu.scss',
            'owl.carousel.scss',
        ], 'public/css/vendor.css')

        .sass([
            'font-awesome.scss',
            'flaticon.scss',
            'material-design-iconifc-font.scss',
            'monterrat.scss',
        ], 'public/css/fonts.css')

        .scripts([
            'bootstrap.min.js',
            'plugins.js',
            'validator.min.js'
        ], 'public/js/vendor.js')
        .scripts([
            'modernizr-2.8.3.min.js'
        ], 'public/js/modernizr.js')
        .scripts([
            'main.js'
        ], 'public/js/script.js');

    mix.version([
        'public/css/style.css',
        'public/css/vendor.css',
        'public/css/fonts.css',
        'public/js/script.js',
        'public/js/modernizr.js',
        'public/js/vendor.js'
    ]);

});
