<?php

Route::group(['middleware' => config('settings.middleware')], function () {
    Route::resource(config('settings.route'), 'Hemarao\Laravelsettings\App\Http\Controllers\SettingsController');
    Route::get(config('settings.route') . '/download/{setting}', 'Hemarao\Laravelsettings\App\Http\Controllers\SettingsController@fileDownload');
});
