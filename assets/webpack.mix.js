const { mix } = require('laravel-mix');

mix.webpackConfig({
  externals: {
    'jquery': 'jQuery'
  }
});

mix.js('resources/assets/js/app.js', 'js')
  .sass('resources/assets/sass/main.scss', 'css');
