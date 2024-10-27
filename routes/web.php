<?php

use DigitLimit\Githook\Http\Controllers\GithookController;

/**
 |--------------------------------------------------------------------------
 | Page Routes
 |--------------------------------------------------------------------------
 */

if(config('githook.url')) {
    Route::post(config('githook.url'), GithookController::class);
}