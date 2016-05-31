<?php

namespace App\Providers;

use App\View\Composers\InjectPages;
use App\View\ThemeViewFinder;
use Illuminate\Support\ServiceProvider;
use App\View\Composers\AddStatusMessage;
use App\View\Composers\AddAdminUser;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['view']->setFinder($this->app['theme.finder']);
        $this->app['view']->composer(['layouts.auth', 'layouts.backend'], AddStatusMessage::class);
        $this->app['view']->composer('layouts.backend', AddAdminUser::class);
        $this->app['view']->composer('layouts.frontend', InjectPages::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('theme.finder', function ($app) {
            $finder = new ThemeViewFinder($app['files'], $app['config']['view.paths']);
            $config = $app['config']['cms.theme'];

            $finder->setBasePath($app['path.public'] . '/' . $config['folder']);
            $finder->setActiveTheme($config['active']);

            return $finder;
        });
    }
}
