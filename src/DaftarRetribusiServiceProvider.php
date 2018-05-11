<?php namespace Bantenprov\DaftarRetribusi;

use Illuminate\Support\ServiceProvider;
use Bantenprov\DaftarRetribusi\Console\Commands\DaftarRetribusiCommand;

/**
 * The DaftarRetribusiServiceProvider class
 *
 * @package Bantenprov\DaftarRetribusi
 * @author  bantenporv <developer.bantenprov@gmail.com>
 */
class DaftarRetribusiServiceProvider extends ServiceProvider
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
        $this->app->singleton('daftar-retribusi', function ($app) {
            return new DaftarRetribusi;
        });

        $this->app->singleton('command.daftar-retribusi', function ($app) {
            return new DaftarRetribusiCommand;
        });

        $this->commands('command.daftar-retribusi');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'daftar-retribusi',
            'command.daftar-retribusi',
        ];
    }

    /**
     * Loading package routes
     *
     * @return void
     */
    protected function routeHandle()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
    }

    /**
     * Loading and publishing package's config
     *
     * @return void
     */
    protected function configHandle()
    {
        $packageConfigPath = __DIR__.'/config/config.php';
        $appConfigPath     = config_path('daftar-retribusi.php');

        $this->mergeConfigFrom($packageConfigPath, 'daftar-retribusi');

        $this->publishes([
            $packageConfigPath => $appConfigPath,
        ], 'daftar-retribusi-config');
    }

    /**
     * Loading and publishing package's translations
     *
     * @return void
     */
    protected function langHandle()
    {
        $packageTranslationsPath = __DIR__.'/resources/lang';

        $this->loadTranslationsFrom($packageTranslationsPath, 'daftar-retribusi');

        $this->publishes([
            $packageTranslationsPath => resource_path('lang/bantenprov/daftar-retribusi'),
        ], 'daftar-retribusi-lang');
    }

    /**
     * Loading and publishing package's views
     *
     * @return void
     */
    protected function viewHandle()
    {
        $packageViewsPath = __DIR__.'/resources/views';

        $this->loadViewsFrom($packageViewsPath, 'daftar-retribusi');

        $this->publishes([
            $packageViewsPath => resource_path('views/bantenprov/daftar-retribusi'),
        ], 'daftar-retribusi-views');
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
            $packageAssetsPath => public_path('bantenprov/daftar-retribusi'),
        ], 'daftar-retribusi-public');
    }

    /**
     * Publishing package's migrations
     *
     * @return void
     */
    protected function migrationHandle()
    {
        $packageMigrationsPath = __DIR__.'/database/migrations';

        $this->loadMigrationsFrom($packageMigrationsPath);

        $this->publishes([
            $packageMigrationsPath => database_path('migrations')
        ], 'daftar-retribusi-migrations');
    }
}
