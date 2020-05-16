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
    .js(['resources/js/crear_profesional_footer.js'], 'public/js/crear_profesional_footer.js')
    .js(['resources/js/crear_empresa_footer.js'], 'public/js/crear_empresa_footer.js')
    .js(['resources/js/crear_usuario_footer.js'], 'public/js/crear_usuario_footer.js')
    .sass('resources/sass/app.scss', 'public/css/app.css')
    .styles([
        'resources/css/bootstrap.min.css',
        'resources/css/main.css',
        'resources/css/responsive.css',
        'resources/css/fonts/style.css',
        'resources/css/jquery.fancybox.min.css',
        'resources/fonts/style.css',
        'resources/css/smart_wizard.css',
        'resources/css/dropzone.css',
        'resources/css/smart_wizard_theme_circles.css',
        'resources/css/fontawesome.css',
        'resources/css/fullcalendar.core.css',
        'resources/css/fullcalendar.daygrid.css',
        'resources/css/fullcalendar.timegrid.css',
        'resources/css/jquery.range.css',
        'resources/css/datatables.min.css',
        'resources/css/bootstrap-datepicker3.min.css',
        'resources/css/owl.carousel.min.css',
        'resources/css/jquery.timeselector.css',
        'resources/css/piwicho.css',
    ], 'public/css/meetfornight.css')
    .scripts([
        'resources/js/main.js',
        'resources/js/jquery.repeater.min.js',
        'resources/js/jquery.fancybox.min.js',
        'resources/js/jquery.smartWizard.min.js',
        //'resources/js/jquery-asRange.js',
        'resources/js/jquery.validate.js',
        'resources/js/fontawesome.js',
        'resources/js/fullcalendar.core.js',
        'resources/js/fullcalendar.daygrid.js',
        'resources/js/fullcalendar.timegrid.js',
        'resources/js/jquery.range.js',
        'resources/js/datatables.min.js',
        'resources/js/jquery.timeselector.js',
        'resources/js/owl.carousel.min.js',
        'resources/js/bootstrap-datepicker.min.js'
    ], 'public/js/meetfornight.js');
