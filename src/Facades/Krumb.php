<?php

namespace Aarishgilani\Krumb\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Illuminate\Support\Collection build()
 *
 * @see \Log1x\Crumb\Crumb
 */
class Krumb extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'krumb';
    }
}
