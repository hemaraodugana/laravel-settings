<?php

namespace Prepr2\Settings\App\Facades;

use Illuminate\Support\Facades\Facade;
use PREPR2\Settings\App\SettingsHelper;

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