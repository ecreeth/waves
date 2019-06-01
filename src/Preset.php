<?php

namespace eCreeth\WavesPreset;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Arr;
use Illuminate\Foundation\Console\Presets\Preset as BasePreset;

class Preset extends BasePreset
{
  /**
   * Install the preset.
   *
   * @return void
   */
  public static function install()
  {
    static::updatePackages();
    static::updateConfiguration();
    static::updateSass();
    static::updateBootstrapping();
    static::removeNodeModules();
    static::addViews();
    static::exportRoutes();
  }

  /**
   * Update the given package array.
   *
   * @param  array  $packages
   * @return array
   */
  protected static function updatePackageArray(array $packages)
  {
    return [
      '@babel/preset-react' => '^7.0.0',
      'react' => '^16.8.6',
      'react-dom' => '^16.8.6',
      'tailwindcss' => '^1.0.2',
      'styled-components' => '^4.2.1',
      'babel-plugin-styled-components' => '^1.10.0',
      'prop-types' => '^15.7.2',
      "laravel-mix-purgecss" => "^4.1.0"
    ] + Arr::except($packages, ['vue', 'vue-template-compiler', 'jquery', 'bootstrap', 'popper.js', 'lodash']);
  }

   /**
     * Export the authentication routes.
     *
     * @return void
     */
    protected function exportRoutes()
    {
        file_put_contents(
            base_path('routes/web.php'),
            'Auth::routes();',
            FILE_APPEND
        );
    }


  /**
   * Update the Webpack configuration.
   *
   * @return void
   */
  protected static function updateConfiguration()
  {
    (new Filesystem)->delete(
      base_path('webpack.mix.js')
    );

    copy(__DIR__ . '/stubs/webpack.mix.js', base_path('webpack.mix.js'));
    copy(__DIR__ . '/stubs/tailwind.config.js', base_path('tailwind.config.js'));     
  }

  /**
   * Update the Sass files for the application.
   *
   * @return void
   */
  protected static function updateSass()
  {
    (new Filesystem)->delete(
      resource_path('sass/app.scss')
    );

    // copy sass files from the stubs folder
    copy(__DIR__ . '/stubs/sass/app.scss', resource_path('sass/app.scss'));
  }

  /**
   * Update the bootstrapping files.
   *
   * @return void
   */
  protected static function updateBootstrapping()
  {
    (new Filesystem)->deleteDirectory(
      resource_path('js/components')
    );
    (new Filesystem)->delete(
      resource_path('js/bootstrap.js')
    );

    copy(__DIR__ . '/stubs/app.js', resource_path('js/app.js'));
    copy(__DIR__ . '/stubs/bootstrap.js', resource_path('js/bootstrap.js'));
  }

  /**
   * Update the views files.
   *
   * @return void
   */
  protected static function addViews()
  {
    (new Filesystem)->deleteDirectory(resource_path('views'));
    (new Filesystem)->copyDirectory(__DIR__ . '/stubs/resources/views/', resource_path('views'));
  }
}
