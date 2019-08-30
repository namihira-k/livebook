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

mix.react('resources/js/components/Header.js', 'public/js/header.js');
mix.react('resources/js/components/Footer.js', 'public/js/footer.js');
mix.react('resources/js/components/Ads.js', 'public/js/ads.js');

mix.react('resources/js/components/EventList.js', 'public/js/event-list.js');

mix.react('resources/js/components/EventInfo.js', 'public/js/event-info.js');
mix.react('resources/js/components/EventCommentSection.js', 'public/js/event-comment-section.js');
mix.react('resources/js/components/EventCommentForm.js', 'public/js/event-comment-form.js');
mix.react('resources/js/components/EventCommentList.js', 'public/js/event-comment-list.js');
mix.react('resources/js/components/EventCommentRating.js', 'public/js/event-comment-rating.js');
