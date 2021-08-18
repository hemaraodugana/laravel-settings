<?php

namespace hemarao\laravelsettings\app\facades;

use Illuminate\Support\Facades\Facade;
use hemarao\laravelsettings\app\SettingsHelper;

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