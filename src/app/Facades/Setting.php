<?php

namespace Hemarao\Laravelsettings\app\Facades;

use Illuminate\Support\Facades\Facade;
use Hemarao\Laravelsettings\app\SettingsHelper;

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