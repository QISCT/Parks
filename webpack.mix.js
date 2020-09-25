const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

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
mix.setPublicPath('public');

mix.disableSuccessNotifications();

mix.webpackConfig({
 devtool: 'inline-source-map'
})

.sourceMaps();


mix.js('resources/js/app.js', 'js')
  .sass('resources/sass/concept.scss', 'css')
  // .sass('resources/sass/app.scss', 'css')
  // .options({
  //   processCssUrls: false,
  //   postCss: [tailwindcss('./tailwind.config.js')],
  // });
