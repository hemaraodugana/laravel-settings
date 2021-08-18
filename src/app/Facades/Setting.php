<?php

namespace Hemarao\LaravelSettings\App\Facades;

use Illuminate\Support\Facades\Facade;
use Hemarao\Settings\App\SettingsHelper;

class Setting extends Facade
{
    /**
     * @return mixed
     */
    protected static function getFacadeAccessor()
    {
        return SettingsHelper::class;
    }
}