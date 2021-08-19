<?php

Route::group(['middleware' => config('settings.middleware')], function () {
    Route::resource(config('settings.route'), 'Hemarao\Laravelsettings\app\Http\Controllers\SettingsController');
    Route::get(config('settings.route') . '/download/{setting}', 'Hemarao\Laravelsettings\app\Http\Controllers\SettingsController@fileDownload');
});
