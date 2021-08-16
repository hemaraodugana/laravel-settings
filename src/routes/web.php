<?php

Route::group(['middleware' => config('settings.middleware')], function () {
    Route::resource(config('settings.route'), 'PREPRV2\Settings\App\Http\Controllers\SettingsController');
    Route::get(config('settings.route') . '/download/{setting}', 'PREPRV2\Settings\App\Http\Controllers\SettingsController@fileDownload');
});
