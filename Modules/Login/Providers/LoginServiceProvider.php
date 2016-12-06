<?php

namespace Modules\Login\Providers;

use Illuminate\Support\ServiceProvider;

class LoginServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerAliases();
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            __DIR__.'/../Config/config.php' => config_path('login.php'),
        ]);

        $this->mergeConfigFrom(
            __DIR__.'/../Config/config.php', 'login'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = base_path('resources/views/modules/login');

        $sourcePath = __DIR__.'/../Resources/views';

        $this->publishes([
            $sourcePath => $viewPath
        ]);

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/login';
        }, \Config::get('view.paths')), [$sourcePath]), 'login');
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = base_path('resources/lang/modules/login');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'login');
        } else {
            $this->loadTranslationsFrom(__DIR__ .'/../Resources/lang', 'login');
        }
    }

    /**
     * Register aliases.
     *
     * @return void
     */
    protected function registerAliases()
    {
        $providers = [
            \AdamWathan\BootForms\BootFormsServiceProvider::class,
        ];

        $aliases = [
            'Form' => \AdamWathan\BootForms\Facades\BootForm::class,
        ];

        foreach ($providers as $provider) {
            $this->app->register($provider);
        }

        $loader = \Illuminate\Foundation\AliasLoader::getInstance();

        foreach ($aliases as $alias => $classname) {
            $loader->alias($alias, $classname);
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

}
