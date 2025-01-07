<?php

namespace CornelVerster\LaravelPaystack\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CornelVerster\LaravelPaystack\LaravelPaystack
 */
class LaravelPaystack extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \CornelVerster\LaravelPaystack\LaravelPaystack::class;
    }
}
