<?php

namespace PREPRV2\Settings\App\Facades;

use Illuminate\Support\Facades\Facade;
use PREPRV2\Settings\App\SettingsHelper;

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