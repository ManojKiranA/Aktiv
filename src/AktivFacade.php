<?php

namespace Manojkiran\Aktiv;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Manojkiran\Aktiv\Skeleton\SkeletonClass
 */
class AktivFacade extends Facade
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
