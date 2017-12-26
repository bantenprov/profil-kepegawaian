<?php namespace Bantenprov\ProfilKepegawaian;

use Illuminate\Support\ServiceProvider;
use Bantenprov\ProfilKepegawaian\Console\Commands\ProfilKepegawaianCommand;

/**
 * The ProfilKepegawaianServiceProvider class
 *
 * @package Bantenprov\ProfilKepegawaian
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class ProfilKepegawaianServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Bootstrap handles
        $this->routeHandle();
        $this->configHandle();
        $this->langHandle();
        $this->viewHandle();
        $this->assetHandle();
        $this->migrationHandle();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('profil-kepegawaian', function ($app) {
            return new ProfilKepegawaian;
        });

        $this->app->singleton('command.profil-kepegawaian', function ($app) {
            return new ProfilKepegawaianCommand;
        });

        $this->commands('command.profil-kepegawaian');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'profil-kepegawaian',
            'command.profil-kepegawaian',
        ];
    }

    /**
     * Loading package routes
     *
     * @return void
     */
    protected function routeHandle()
    {
        //$this->loadRoutesFrom(__DIR__.'/routes/routes.php');
    }

    /**
     * Loading and publishing package's config
     *
     * @return void
     */
    protected function configHandle()
    {
        $packageConfigPath = __DIR__.'/config/config.php';
        $appConfigPath     = config_path('profil-kepegawaian.php');

        $this->mergeConfigFrom($packageConfigPath, 'profil-kepegawaian');

        $this->publishes([
            $packageConfigPath => $appConfigPath,
        ], 'config');
    }

    /**
     * Loading and publishing package's translations
     *
     * @return void
     */
    protected function langHandle()
    {
        $packageTranslationsPath = __DIR__.'/resources/lang';

        $this->loadTranslationsFrom($packageTranslationsPath, 'profil-kepegawaian');

        $this->publishes([
            $packageTranslationsPath => resource_path('lang/vendor/profil-kepegawaian'),
        ], 'lang');
    }

    /**
     * Loading and publishing package's views
     *
     * @return void
     */
    protected function viewHandle()
    {
        $packageViewsPath = __DIR__.'/resources/views';

        //$this->loadViewsFrom($packageViewsPath, 'profil-kepegawaian');

        $this->publishes([
            $packageViewsPath => resource_path('views/vendor/profil-kepegawaian'),
        ], 'views');
    }

    /**
     * Publishing package's assets (JavaScript, CSS, images...)
     *
     * @return void
     */
    protected function assetHandle()
    {
        $packageAssetsPath = __DIR__.'/resources/assets';

        $this->publishes([
            $packageAssetsPath => public_path('vendor/profil-kepegawaian'),
        ], 'public');
    }

    /**
     * Publishing package's migrations
     *
     * @return void
     */
    protected function migrationHandle()
    {
        $packageMigrationsPath = __DIR__.'/database/migrations';

        //$this->loadMigrationsFrom($packageMigrationsPath);

        $this->publishes([
            $packageMigrationsPath => database_path('migrations')
        ], 'migrations');
    }
}
