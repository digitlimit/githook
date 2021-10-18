<?php

use DigitLimit\Githook\Http\Controllers\GithookController;

/**
 |--------------------------------------------------------------------------
 | Page Routes
 |--------------------------------------------------------------------------
 */

 Route::post(config('githook.url'), GithookController::class);