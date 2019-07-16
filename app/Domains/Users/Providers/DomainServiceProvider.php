<?php

namespace Alumiar\Domains\Users\Providers;

use Alumiar\Support\Domain\ServiceProvider;

/**
 * Class DomainServiceProvider
 * @package Alumiar\Domains\Users\Providers
 */
class DomainServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    protected $alias = 'users';

    /**
     * @var bool
     */
    protected $hasTranslations = true;

    /**
     * @var array
     */
    public $bindings = [];

    /**
     * @var array
     */
    public $migrations = [];

    /**
     * @var array
     */
    public $factories = [];

    /**
     * @var array
     */
    public $seeds = [];
}