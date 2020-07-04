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

mix.ts('resources/ts/app.ts', 'public/js/app.js')
    .sass('resources/sass/app.scss', 'public/css')
    .version();

mix.ts([
    'resources/ts/components/Test.tsx',
    'resources/ts/components/Clock.tsx',    
    'resources/ts/components/Header.tsx',
    'resources/ts/components/Footer.tsx',    
    'resources/ts/components/Ads.tsx',
    'resources/ts/components/ShareForm.tsx',    
    'resources/ts/components/RankingEvent.tsx',
    'resources/ts/components/CommentList.tsx',    
    'resources/ts/components/EventList.tsx',
    'resources/ts/components/EventSearch.tsx',    
    'resources/ts/components/EventRequest.tsx',
    'resources/ts/components/EventInfo.tsx',
    'resources/ts/components/EventCommentSection.tsx',
    'resources/ts/components/EventCommentForm.tsx',
    'resources/ts/components/EventCommentList.tsx',
    'resources/ts/components/EventCommentRating.tsx',
], 'public/js/app.js').version();