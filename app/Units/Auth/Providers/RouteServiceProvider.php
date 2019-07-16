<?php

namespace Alumiar\Units\Auth\Providers;

use Alumiar\Units\Auth\Routes\Web;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

/**
 * Class RouteServiceProvider
 * @package Alumiar\Units\Auth\Providers
 */
class RouteServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    protected $namespace = "Alumiar\Units\Auth\Http\Controllers";

    /**
     * Define your route model binding, pattern filters, etc.
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Define the routes for the application.
     */
    public function map()
    {
        $this->mapWebRoutes();
    }

    protected function mapWebRoutes()
    {
        (new Web([
            'middleware' => 'web',
            'namespace' => $this->namespace,
            'prefix' => 'auth'
        ]))->register();
    }
}