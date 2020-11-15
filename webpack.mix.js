const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
;

// mix.styles([
//     'resources/sass/app.scss',
//     'temp/assets/css/plugins/slick.css',
//     'temp/assets/css/plugins/slick-theme.css',
//     'temp/assets/fonts/flaticon/flaticon.css',
//     'temp/assets/css/style.css',
// ], 'public/css/app.css');
