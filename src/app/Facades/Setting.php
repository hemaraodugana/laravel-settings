<?php

namespace hemarao\laravelsettings\app\facades;

use Illuminate\Support\Facades\Facade;
use Hemarao\Laravelsettings\App\SettingsHelper;

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