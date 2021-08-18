<?php

Route::group(['middleware' => config('settings.middleware')], function () {
    Route::resource(config('settings.route'), 'hemarao\laravelsettings\app\Http\Controllers\SettingsController');
    Route::get(config('settings.route') . '/download/{setting}', 'hemarao\laravelsettings\app\Http\Controllers\SettingsController@fileDownload');
});
