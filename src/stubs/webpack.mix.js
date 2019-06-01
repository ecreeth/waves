const mix = require('laravel-mix')
const path = require('path')
const tailwindcss = require('tailwindcss')
require('laravel-mix-purgecss');
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

mix
  .react('resources/js/app.js', 'public/js')
  .extract()
  .sass('resources/sass/app.scss', 'public/css')
  .purgeCss()
  .options({
    processCssUrls: false,
    postCss: [ tailwindcss('tailwind.config.js') ],
  })
  .babelConfig({
   plugins: ['babel-plugin-styled-components'],
});
