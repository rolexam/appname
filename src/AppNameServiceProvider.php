<?php
namespace Rolexam\AppName;

use Illuminate\Support\ServiceProvider;
use Rolexam\AppName\Console\Commands\AppName;

class AppNameServiceProvider extends ServiceProvider {


    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                AppName::class
            ]);
        }
    }

}
