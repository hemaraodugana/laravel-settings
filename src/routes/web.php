<?php

Route::group(['middleware' => config('settings.middleware')], function () {
    Route::resource(config('settings.route'), 'Hemarao\LaravelSettings\App\Http\Controllers\SettingsController');
    Route::get(config('settings.route') . '/download/{setting}', 'Hemarao\LaravelSettings\App\Http\Controllers\SettingsController@fileDownload');
});
