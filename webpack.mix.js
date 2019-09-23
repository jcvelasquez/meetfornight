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

mix.js(['resources/js/app.js'], 'public/js/app.js')
    .sass('resources/sass/app.scss', 'public/css/app.css')
    .styles([
        'resources/css/bootstrap.min.css',
        'resources/css/main.css',
        'resources/css/responsive.css',
        'resources/css/fonts/style.css',
        'resources/css/jquery.fancybox.min.css',
        'resources/css/asRange.css',
        'resources/fonts/style.css',
        'resources/css/smart_wizard.css',
        'resources/css/smart_wizard_theme_circles.css',
        'resources/css/fontawesome.css',
        'resources/css/piwicho.css',
    ], 'public/css/meetfornight.css')
    .scripts([
        'resources/js/main.js',
        'resources/js/jquery.repeater.min.js',
        'resources/js/jquery.fancybox.min.js',
        'resources/js/jquery.smartWizard.min.js',
        'resources/js/jquery-asRange.js',
        'resources/js/jquery.validate.js',
        'resources/js/fontawesome.js'
    ], 'public/js/meetfornight.js');
