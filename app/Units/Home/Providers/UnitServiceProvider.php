<?php
namespace App\Units\Home\Providers;

use Car7axo\Laravel\Support\Unit\ServiceProvider;

/**
 * Class UnitServiceProvider
 * @package App\Units\Home\Providers
 */
class UnitServiceProvider extends ServiceProvider
{
    protected $alias = 'home';

    protected $hasViews = true;

    protected $providers = [
        RouteServiceProvider::class,
    ];
}
