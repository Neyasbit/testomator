let mix = require('laravel-mix');

function adminAssets() {
  mix.scripts([
    'resources/assets/js/jquery.min.js',
    'resources/assets/js/popper.min.js',
    'resources/assets/js/bootstrap.min.js',
    'resources/assets/js/waves.js',
    'resources/assets/js/jquery.slimscroll.js',
    'resources/assets/js/jquery.core.js',
    'resources/assets/js/jquery.app.js',
  ], 'public/js/scripts.js');

  mix.scripts('resources/assets/js/modernizr.min.js', 'public/js/modernizr.min.js');

  mix.copyDirectory('resources/assets/images/', 'public/images');

  mix.sass('resources/assets/sass/icons.scss', 'public/css/icons.css');
  mix.sass('resources/assets/sass/style.scss', 'public/css/styles.css');
  mix.styles('resources/assets/css/bootstrap.min.css', 'public/css/bootstrap.min.css');
}

adminAssets();