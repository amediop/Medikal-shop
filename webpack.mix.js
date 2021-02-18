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
   .js('resources/js/app.js', 
   'js1/custom.js','js1/owl.js','js1/jquery.min.js','js1/bootstrap.bundle.min.js',
   
   'public/js1')
   .js('resources/js/app.js', 'resources/js2/jquery-3.3.1.min.js', 'resources/js2/bootstrap.min.js', 
   'resources/js2/jquery.nice-select.min.js','resources/js2/jquery-ui.min.js',
   'js2/jquery.slicknav.js','js2/mixitup.min.js','js2/owl.carousel.min.js','js2/main.js',
   'public/js3')

   .sass('resources/sass/app.scss', 'public/css')
   .styles(["https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap",'resources/css1/style.css','resources/css1/fontawesome.css',
   'resources/css1/style1.css'], "public/css/all1.css")

   .styles([
   'resources/aimeos/aimeos.css'], "public/css/all4.css")

   .styles(["https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap",
      'resources/css2/bootstrap.min.css','resources/css2/font-awesome.min.css','resources/css2/elegant-icons.css',
   'resources/css2/nice-select.css','resources/css2/jquery-ui.min.css',
   'resources/css2/owl.carousel.min.css','resources/css2/slicknav.min.css','resources/css2/style.css',
   'resources/css2/image.css'],
    "public/css/all3.css")