<?php

namespace Vnideas\LangSwitcher\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Vnideas\LangSwitcher\LangSwitcher
 */
class LangSwitcher extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Vnideas\LangSwitcher\LangSwitcher::class;
    }
}
