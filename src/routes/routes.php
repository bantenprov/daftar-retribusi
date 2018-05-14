<?php

Route::group(['prefix' => '/','middleware' => ['web']], function() {
    Route::resource('daftar-retribusi','Bantenprov\DaftarRetribusi\Http\Controllers\DaftarRetribusiController');
});
