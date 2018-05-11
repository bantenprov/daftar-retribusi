<?php

Route::group(['prefix' => 'api','middleware' => ['web']], function() {
    Route::resource('daftar-retribusi','Bantenprov\DaftarRetribusi\Http\Controllers\DaftarRetribusiController');
});
