<?php

use Digitlimit\Githook\Helpers\Config;
use Illuminate\Support\Facades\Route;

/**
 |--------------------------------------------------------------------------
 | Page Routes
 |--------------------------------------------------------------------------
 */
if (config('githook.url')) {
    Route::post(Config::url(), Config::controller())
        ->middleware(Config::middleware());
}
