<?php

use Illuminate\Support\Facades\Route;
use Modules\User\Http\Controllers\UserController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('user', UserController::class)->names('user');
});
