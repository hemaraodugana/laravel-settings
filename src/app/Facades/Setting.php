<?php

namespace PREPR2\LaravelSettings\App\Facades;

use Illuminate\Support\Facades\Facade;
use PREPR2\LaravelSettings\App\SettingsHelper;

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