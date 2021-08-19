<?php

Route::group(['middleware' => config('settings.middleware')], function () {
    Route::resource(config('settings.route'), 'Hemarao\Settings\app\Http\Controllers\SettingsController');
    Route::get(config('settings.route') . '/download/{setting}', 'Hemarao\Settings\app\Http\Controllers\SettingsController@fileDownload');
});
