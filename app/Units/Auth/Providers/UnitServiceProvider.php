<?php

namespace Alumiar\Units\Auth\Providers;

use Alumiar\Support\Units\ServiceProvider;

/**
 * Class UnitServiceProvider
 * @package Alumiar\Units\Auth\Providers
 */
class UnitServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    protected $alias = "auth";

    /**
     * @var string
     */
    protected $hasView = false;

    /**
     * @var bool
     */
    protected $hasTranslations = false;

    /**
     * @var array
     */
    protected $providers = [
        AuthServiceProvider::class,
        RouteServiceProvider::class
    ];
}