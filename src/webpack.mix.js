let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

/*
 |--------------------------------------------------------------------------
 | Bootstrap3 free admin template
 |--------------------------------------------------------------------------
 | https://github.com/ColorlibHQ/gentelella
 */
mix.copy('node_modules/gentelella/build/js/custom.js', 'public/js/gentelella.js')
   .copy('node_modules/gentelella/build/css/custom.css', 'public/css/gentelella.css')
   .copyDirectory('node_modules/gentelella/vendors', 'public/vendors')
   .copyDirectory('node_modules/gentelella/build/images', 'public/img');

// demo pages.
// mix.copyDirectory('node_modules/gentelella/production', 'public/demo');
