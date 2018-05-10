<?php

Route::group(['prefix' => 'daftar-retribusi'], function() {
    Route::get('demo', 'Bantenprov\DaftarRetribusi\Http\Controllers\DaftarRetribusiController@demo');
});
