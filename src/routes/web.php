<?php

Route::group(['middleware' => config('settings.middleware')], function () {
    Route::resource(config('settings.route'), 'HEMARAO\Settings\App\Http\Controllers\SettingsController');
    Route::get(config('settings.route') . '/download/{setting}', 'HEMARAO\Settings\App\Http\Controllers\SettingsController@fileDownload');
});
