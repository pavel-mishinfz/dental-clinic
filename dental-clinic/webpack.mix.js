const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/hamb-menu.js', 'public/js/hamb-menu.js');
mix.js('resources/js/observer.js', 'public/js/observer.js');
mix.js('resources/js/popup.js', 'public/js/popup.js');
mix.js('resources/js/ymaps.js', 'public/js/ymaps.js');

mix.styles('resources/css/normalize.css', 'public/css/normalize.css');
mix.styles('resources/css/style.css', 'public/css/style.css');
mix.styles('resources/css/fonts.css', 'public/css/fonts.css');
