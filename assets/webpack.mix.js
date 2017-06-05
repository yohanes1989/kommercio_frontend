const { mix } = require('laravel-mix');

mix.webpackConfig({
  externals: {
    'jquery': 'jQuery'
  }
});

mix.js('resources/assets/js/app.js', 'js/compiled.js')
  .sass('resources/assets/sass/main.scss', 'css')
  .setResourceRoot('/project/assets/');

mix.babel(['js/compiled.js'], 'js/app.js');
