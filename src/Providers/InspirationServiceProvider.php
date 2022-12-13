<?php

namespace Rajaduraioec\Inspire\Providers;

use Illuminate\Support\ServiceProvider;

class InspirationServiceProvider extends ServiceProvider
{
    function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'inspire');
    }

}