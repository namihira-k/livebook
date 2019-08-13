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

mix.react('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');

mix.react('resources/js/components/Example.js', 'public/js/app.js');

mix.react('resources/js/components/Header.js', 'public/js/header.js');
mix.react('resources/js/components/Footer.js', 'public/js/footer.js');

mix.react('resources/js/components/LiveInfo.js', 'public/js/liveinfo.js');

