<?php

namespace Alqabali\ImageOptimizer\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Alqabali\ImageOptimizer\ImageOptimizer
 */
class ImageOptimizer extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return self::class;
    }
}
