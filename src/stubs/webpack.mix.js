const mix = require('laravel-mix')
const path = require('path')
const tailwindcss = require('tailwindcss')

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
  .extract(['react'])
  .sass('resources/sass/app.scss', 'public/css')
  .options({
    processCssUrls: false,
    postCss: [ tailwindcss('tailwind.config.js') ],
  })
  .webpackConfig({
    resolve: {
      alias: {
        '@': path.resolve('resources/js'),
        '~': path.resolve('resources/js/styles'),
      },
    },
  }).babelConfig({
   plugins: ['babel-plugin-styled-components'],
});