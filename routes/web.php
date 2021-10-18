<?php

use DigitLimit\Githook\Http\Controllers\GithookController;

/**
 |--------------------------------------------------------------------------
 | Page Routes
 |--------------------------------------------------------------------------
 */

 Route::post('/githook', GithookController::class);