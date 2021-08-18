<?php

Route::group(['middleware' => config('settings.middleware')], function () {
    Route::resource(config('settings.route'), 'PREPR2\LaravelSettings\App\Http\Controllers\SettingsController');
    Route::get(config('settings.route') . '/download/{setting}', 'PREPR2\LaravelSettings\App\Http\Controllers\SettingsController@fileDownload');
});
