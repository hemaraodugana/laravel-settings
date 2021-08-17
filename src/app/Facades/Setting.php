<?php

namespace Hemarao\LaravelSettings;

use Illuminate\Support\Facades\Facade;
use Hemarao\LaravelSettings\App\SettingsHelper;

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