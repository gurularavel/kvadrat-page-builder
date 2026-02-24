<?php

namespace Kvadrat\LaravelPageBuilder;

/**
 * @see \Kvadrat\LaravelPageBuilder\LaravelPageBuilder
 */
class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor(): string
    {
        return LaravelPageBuilder::class;
    }
}
