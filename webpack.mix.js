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

mix.js('resources/js/index.js', 'public/assets/js');
// mix.js('resources/assets/js/index.js', 'public/assets/js');
    // .less('resources/less/style.less', 'public/assets/style');
// mix.scripts([
//     'resources/js/index.js'
// ], 'public/js/index.js');

