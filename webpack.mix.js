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
   .sass('resources/sass/app.scss', 'public/css');

mix.sass('resources/sass/menu.scss', 'public/css/frontend');
mix.sass('resources/sass/homeScss.scss', 'public/css/frontend');
mix.sass('resources/sass/indexScss.scss', 'public/css/frontend');
mix.sass('resources/sass/footer.scss', 'public/css/frontend');
mix.sass('resources/sass/total.scss', 'public/css/frontend');
mix.sass('resources/sass/aboutus.scss', 'public/css/frontend');
mix.sass('resources/sass/post-blog.scss', 'public/css/frontend');
