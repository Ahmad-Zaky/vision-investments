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
<<<<<<< HEAD
    .sass('resources/sass/app_cart.scss', 'public/css')
    .sass('resources/sass/responsive_cart.scss', 'public/css');
=======
    .sass('resources/sass/app.scss', 'public/css');
>>>>>>> cf704e62529f0efa54daf011aede787371eced0d
