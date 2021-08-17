<?php

namespace HEMARAO\LaravelSettings\App\Facades;

use Illuminate\Support\Facades\Facade;
use HEMARAO\LaravelSettings\App\SettingsHelper;

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