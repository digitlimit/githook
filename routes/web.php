<?php

use Digitlimit\Githook\Helpers\Config;

/**
 |--------------------------------------------------------------------------
 | Page Routes
 |--------------------------------------------------------------------------
 */

if(config('githook.url')) {
    Route::post(Config::url(), Config::controller())
        ->middleware(Config::middleware());
}
