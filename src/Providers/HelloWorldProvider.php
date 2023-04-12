<?php

namespace Darshan\Crud\Providers;

use Illuminate\Support\ServiceProvider;

class HelloWorldProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }
}
