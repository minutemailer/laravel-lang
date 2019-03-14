<?php

namespace Minutemailer\Lang\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelLangServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                \Minutemailer\Lang\Commands\CheckTranslationCoverage::class,
            ]);
        }
    }
}