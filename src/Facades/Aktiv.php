<?php

namespace Manojkiran\Aktiv\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Manojkiran\Aktiv\Skeleton\SkeletonClass
 */
class Aktiv extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'aktiv';
    }
}
