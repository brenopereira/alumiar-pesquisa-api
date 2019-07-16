<?php

namespace Alumiar\Units\Core\Providers;

use Alumiar\Support\Units\ServiceProvider;

/**
 * Class UnitServiceProvider
 * @package Alumiar\Units\Core\Providers
 */
class UnitServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    protected $alias = "core";

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
    protected $providers = [];
}