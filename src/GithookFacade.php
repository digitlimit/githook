<?php

namespace Digitlimit\Githook;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Digitlimit\Githook\Skeleton\SkeletonClass
 */
class GithookFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'githook';
    }
}
